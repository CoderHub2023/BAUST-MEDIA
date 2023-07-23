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

class ProfileController extends Controller
{
    public function home(Request $request)
    {
        $user = new User();
        $userId = $request->user()->id;
        $user = DB::table('users')->where('id',$userId)->get();
        return view('welcome',compact('user'));
    }

     /**
     * Display the user's profile.
     */
    public function profile(Request $request)
    {   
        $user_education = new UserEducation();
        $user = new User();
        $userId = $request->user()->id;
        $user = DB::table('users')->where('id',$userId)->get();
        $user_education = DB::table('users_education')->where('users_id',$userId)->get();
        $user_about = DB::table('users_details')->where('users_id',$userId)->select('about')->get();
        $array_len = count($user_education);
        $user_education = json_decode($user_education); 
        $user = json_decode($user); 
        return view('profile.profile',compact('user','user_education','user_about'));   
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update_details(Request $request){
        // To showing navbar profile info
        $user = new User();
        $userId = $request->user()->id;
        $user = DB::table('users')->where('id',$userId)->get();
        // For other content
        $UserData = $request->user();
        $userId = $UserData->id;
        $getAboutData = DB::table('users_details')->where('users_id', $userId)->get('about');
        return view('profile.update-details',compact('user','UserData','getAboutData'));

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

    public function about_details(Request $request){
        $user = $request->user();
        $userId = $user->id;
        $UserDetails = new UserDetails();
        $UserDetails->users_id = $userId;
        $UserDetails->about = $request->has('about') ? $request->get('about') : " ";
        $UserDetails->save();
        return redirect('/profile');
    }

    public function about_details_update(UserDetails $UserDetails,Request $request){
        dd($UserDetails->users_id);
        return redirect('/profile');
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

    public function my_network(Request $request){
        $user = new User();
        $userId = $request->user()->id;
        $user = DB::table('users')->where('id',$userId)->get();
        return view('Network',compact('user'));
    }


    /**
     *  For add friend or add new network
     */
    public function add_network(Request $request,$id){
        $AuthUser =  $request->user()->id;
        $UserNetwork = new Network();
        $UserNetwork->users_id = $AuthUser;
        $UserNetwork->network_id = $request->get('network-id');
        $UserNetwork->save();
        return redirect()->back();
    }

    /**
     *  For viewing add skills page
     */
    public function add_skills(){
        
        return view('profile.add-skills');
    }

    // SHowing latest work place
    public function latest_work(Request $request){
        $userId = $request->user()->id;
        $UserWorkAt = User::with(['users_works' => function ($query) {
            $query->latest();
        }])->find($userId);
        dd($UserWorkAt);
        return view('profile.profile',compact('UserWorkAt'));
    }
}
