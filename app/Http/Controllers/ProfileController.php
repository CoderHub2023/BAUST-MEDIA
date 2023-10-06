<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Network;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserEducation;
use App\Models\UserWork;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Mockery\Undefined;
use Termwind\Components\Dd;

use function Pest\Laravel\get;
use function Pest\Laravel\json;

class ProfileController extends Controller
{

    
    public function home(Request $request)
    {
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        return view('welcome', compact('loggedInUserData'));
    }

     /**
     * Display the user's profile.
     */
    public function profile(Request $request)
    {   
        $loggedInUserId = Auth::user()->id;
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $countUserEducation = count($user_education);
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user);
        $friends = User::join('users_network', 'users.id', '=', 'users_network.network_id')
        ->where('users_network.users_id', '=', $loggedInUserId) // Match the network_id with logged-in user's id
        ->get(['users.*']);
        $CountFriends = count($friends);
        // dd($friends);
        return view('profile.profile',compact('loggedInUserData','user_education','user_about','count','countUserEducation','users_works_count','users_works','CountFriends','friends'));   
    }

    public function add_works(Request $request){
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $users_education_count = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user); 
        return view('profile.add-works',compact('loggedInUserData','user_education','user_about','count','users_works_count','users_education_count'));
    }

    public function add_education(Request $request){
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user); 
        return view('profile.add-education',compact('loggedInUserData','user_education','user_about','count','users_works','users_works_count'));
    }

    public function submit_add_works(Request $request){
        $userId = $request->user()->id;
        UserWork::create([
            'users_id' => $userId,
            'work_at' => $request->input('work'),
            'position' => $request->input('position'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
        return redirect('/profile');
    }

    public function submit_add_education(Request $request){
        $userId = $request->user()->id;
        UserEducation::create([
            'users_id' => $userId,
            'institution' => $request->input('institution'),
            'subject' => $request->input('subject'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
        return redirect('/profile');
    }


    public function update_works(Request $request,$id){
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $users_education_count = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user); 
        return view('profile.update-works',compact('loggedInUserData','user_education','user_about','count','users_works_count','users_works','users_education_count'));
    }

    public function update_education(Request $request,$id){
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $users_works = DB::table('users_works')->where('users_id',$userId)->get();
        $users_works_count = count($users_works);
        $count = count($user_about);
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user); 
        return view('profile.update-education',compact('loggedInUserData','user_education','user_about','count','users_works_count','users_works'));
    }

    public function submit_update_works(Request $request){
        $user = $request->user();
        $userId = $user->id;

        // Find the user details for the authenticated user
        $UserWorks = UserWork::where('users_id', $userId)->first();
        // If user details exist, update the 'about' field
        if ($UserWorks) {
        $UserWorks->update([
            'work_at' => $request->input('work'),
            'position' => $request->input('position'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
    }   else {
        UserDetails::create([
            'users_id' => $userId,
            'work_at' => $request->input('work'),
            'position' => $request->input('position'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
        ]);
    }
    return redirect('/profile')->with('success', 'About Me updated successfully!');
    }

    /**
     * Submit update user's education 
     * */
    public function submit_update_education(Request $request)
    {
        $user = $request->user();
        $userId = $user->id;
        // Find the user details for the authenticated user
        $UserEducation = UserEducation::where('users_id', $userId)->first();
        // If user details exist, update the 'about' field
        if ($UserEducation) {
            $UserEducation->update([
                'institution' => $request->input('institution'),
                'subject' => $request->input('subject'),
                'start' => $request->input('start'),
                'end' => $request->input('end'),
            ]);
        } else {
            UserDetails::create([
                'users_id' => $userId,
                'institution' => $request->input('institution'),
                'subject' => $request->input('subject'),
                'start' => $request->input('start'),
                'end' => $request->input('end'),
            ]);
        }
        return redirect('/profile')->with('success', 'Data updated successfully!');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        return view('profile.edit', [
            'user' => $request->user(),
        ],compact('loggedInUserData'));
    }

    public function update_profile_photo(Request $request){
        // To showing navbar profile info
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        // For other content
        $UserData = $request->user();
        $userId = $UserData->id;    
        $getAboutData = DB::table('users_details')->where('users_id', $userId)->get('about');
        return view('profile.profile-photo-change',compact('loggedInUserData','UserData','getAboutData'));

    }

    public function update_cover_photo(Request $request){
        // To showing navbar profile info
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        // For other content
        $UserData = $request->user();
        $userId = $UserData->id;
        $getAboutData = DB::table('users_details')->where('users_id', $userId)->get('about');
        return view('profile.cover-photo-change',compact('loggedInUserData','UserData','getAboutData'));

    }

    public  function add_about(Request $request,$id){
        // To showing navbar profile info
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        // For other content
        $UserData = $request->user();
        $userId = $UserData->id;
        $getAboutData = DB::table('users_details')->where('users_id', $userId)->get('about');
        return view('profile.add-about',compact('loggedInUserData','UserData','getAboutData'));
    }

    public function submit_add_about(Request $request){
        $user = $request->user();
        $UserAbout= new UserDetails();
        $userId = $request->user()->id;
        $UserAbout->users_id = $userId;
        $UserAbout->about = $request->has('about') ? $request->get('about') : " ";
        $UserAbout->save();
        return redirect('/profile');
    }


    public function update_about(Request $request,$id){ 
        // To showing navbar profile info
        $user = new User();
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        // For other content
        $UserData = $request->user();
        $userId = $UserData->id;
        $getAboutData = DB::table('users_details')->where('users_id', $userId)->get('about');
        return view('profile.update-about',compact('loggedInUserData','UserData','getAboutData'));
    }



    public function post_update_details(Request $request){
        $user = $request->user();
        $education = new UserEducation();
        $userId = $request->user()->id;
        $education->users_id = $userId;
        $education->institution = $request->has('institution') ? $request->get('institution') : " ";
        $education->subject = $request->has('subject') ? $request->get('subject') : " ";
        $education->start = $request->has('start') ? $request->get('start') : " ";
        $education->end = $request->has('end') ? $request->get('end') : " ";
        $education->save();
        return redirect('/profile');
    }

    public function work_update_details(Request $request){
        $userId = $request->user()->id;
        $work = new UserWork();
        $work->users_id = $userId;
        $work->work_at = $request->has('work') ? $request->get('work') : " ";
        $work->position = $request->has('position') ? $request->get('position') : " ";
        $work->start = $request->has('start') ? $request->get('start') : " ";
        $work->end = $request->has('end') ? $request->get('end') : " ";
        $work->save();
        return redirect('/profile');
    }

    public function education_update_details(Request $request){
        $userId = $request->user()->id;
        $work = new UserEducation();
        $work->users_id = $userId;
        $work->institution = $request->has('institution') ? $request->get('institution') : " ";
        $work->subject = $request->has('subject') ? $request->get('subject') : " ";
        $work->start = $request->has('start') ? $request->get('start') : " ";
        $work->end = $request->has('end') ? $request->get('end') : " ";
        $work->save();
        return redirect('/profile');
    }

    public function image_upload(Request $request){
        $user= new User();
        if($request->hasFile('cover_picture')){
            $request->validate([
                'cover_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the max size as needed
            ]);
            $files = $request->file('cover_picture');
            $imageLocation= array();
            $i=0;
                $extension = $files->getClientOriginalExtension();
                $fileName= 'cover-img_'. time() . ++$i . '.' . $extension;
                $location= '/uploads/cover/';
                $files->move(public_path() . $location, $fileName);
                $imageLocation= $location. $fileName;
            $cover_success = DB::table('users')->where('id', $request->user()->id)->update([
                'cover_picture'=>$imageLocation
            ]);
            if($cover_success)
            return back()->with('success',"Cover Picture Upload Successfully");
            else
            return back()->with('failure',"Cover Picture Upload Failure");
        }
        if($request->hasFile('profile_picture')){
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the max size as needed
            ]);
            $files = $request->file('profile_picture');
            $imageLocation= array();
            $i=0;
                $extension = $files->getClientOriginalExtension();
                $fileName= 'profile-img_'. time() . ++$i . '.' . $extension;
                $location= '/uploads/profile/';
                $files->move(public_path() . $location, $fileName);
                $imageLocation = $location. $fileName;
            $profile_success = DB::table('users')->where('id', $request->user()->id)->update([
                'profile_picture'=>$imageLocation
            ]);
            if($profile_success)
            return back()->with('success',"Profile Picture Upload Successfully");
            else
            return back()->with('failure',"Profile Picture Upload Failure");
            
        }
         else{
            return back()->with('failure',"Error ! Select a Picture to Upload");
        }
    }

    public function submit_update_about(Request $request,$id){
    $user = $request->user();
    $userId = $user->id;

    // Validate the incoming request if needed
    $request->validate([
        'about' => 'required|string',
    ]);

    // Find the user details for the authenticated user
    $userDetails = UserDetails::where('users_id', $userId)->first();

    // If user details exist, update the 'about' field
    if ($userDetails) {
        $userDetails->update(['about' => $request->input('about')]);
    } else {
        // If user details don't exist, create a new record
        UserDetails::create([
            'users_id' => $userId,
            'about' => $request->input('about'),
        ]);
    }

    return redirect('/profile')->with('success', 'About Me updated successfully!');
}

   

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        // Update headlines field
        $request->user()->headlines = $request->input('headlines');
        // Update address field
        $request->user()->address = $request->input('address');
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    
    /**
     *  For viewing add skills page
     */
    public function add_skills(){
        
        return view('profile.add-skills');
    }

    public function general(Request $request){
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        return view('profile.general', compact('loggedInUserData'));
    }

    public function ViewResume(Request $request){
        $userId = $request->user()->id;
        $loggedInUserData = DB::table('users')->select('*')->where('users.id', '=', $userId)->get();
        return view('profile.viewResume', compact('loggedInUserData'));
    }
}