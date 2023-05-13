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
            'idcardphoto' => ['required'],
        ]);
        $idcardphoto = "";
        if($request->hasFile('idcardphoto')){
            $files = $request->file('idcardphoto');
            $imageLocation= array();
            $i=0;
                $extension = $files->getClientOriginalExtension();
                $fileName= 'idcardphoto_'. time() . ++$i . '.' . $extension;
                $location= '/uploads/idcardphoto/';
                $files->move(public_path() . $location, $fileName);
                $imageLocation= $location. $fileName;
            $idcardphoto = $imageLocation;
        }

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->idcardphoto = $idcardphoto;
        $user->roll = $request->roll;
        $user->password = Hash::make($request->password);
        $user->save();
        // $user = User::create([
        //     'email' => $request->email,
        //     'name' => $request->name,
        //     'mobile' => $request->mobile,
        //     'roll' => $request->roll,
        //     'idcardphoto' => 'idcardphoto',
        //     'password' => Hash::make($request->password),
        // ]);

        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}