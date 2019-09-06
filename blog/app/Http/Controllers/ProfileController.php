<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */

    public function newProfile(Request  $request)
    {

        if ($request->isMethod('get')) {
            return View('profile.profile_create');
        }



        $profile_form_data = (object) $request->all();

        Profile::create([
            'address' => $profile_form_data->address,
            'email'   => $profile_form_data->email,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/');

    }
}
