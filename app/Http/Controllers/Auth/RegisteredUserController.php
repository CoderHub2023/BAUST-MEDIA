<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'roll' => ['required', 'string', 'unique:'.User::class],
            'mobile' => ['required', 'string', 'max:11','unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'idcardphoto' => ['required', 'string'],
        ]);

        $user = User::create([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'roll' => $request->roll,
            'password' => Hash::make($request->password),
        ]);

        if($request->hasFile('idcardphoto')){
            $files = $request->file('idcardphoto');
            $imageLocation= array();
            $i=0;
                $extension = $files->getClientOriginalExtension();
                $fileName= 'idcardphoto_'. time() . ++$i . '.' . $extension;
                $location= '/uploads/idcardphoto/';
                $files->move(public_path() . $location, $fileName);
                $imageLocation= $location. $fileName;
            $idcardphoto = DB::table('users')->where('id', $request->user()->id)->update([
                'idcardphoto'=>$imageLocation
            ]);
            if($idcardphoto)
            return back()->with('success',"Cover Picture Upload Successfully");
            else
            dd("Photo Not Uploaded");
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
