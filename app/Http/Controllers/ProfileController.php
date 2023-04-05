<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Models\UserEducation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function home(Request $request)
    {
        return view('welcome');
    }

     /**
     * Display the user's profile.
     */
    public function profile(Request $request)
    {
        return view('profile.profile', [
            'user' => $request->user(),
        ]);
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
        $user = $request->user();
        return view('profile.update-details',compact('user'));
    }

    public function post_update_details(Request $request){
        $user = $request->user();
        $education = new UserEducation();
        $userId = $request->user()->id;
        $education->id = $userId;
        $education->institution = $request->has('institution') ? $request->get('institution') : " ";
        $education->subject = $request->has('subject') ? $request->get('subject') : " ";
        $education->start = $request->has('start') ? $request->get('start') : " ";
        $education->end = $request->has('end') ? $request->get('end') : " ";
        $education->save();
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
}
