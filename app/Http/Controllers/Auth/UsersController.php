<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function unactive(User $user)
    {
        $user->active = 0;
        $user->save();
        return back();
    }
    public function active(User $user)
    {
        $user->active = true;
        $user->save();
        return back();
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Ban(User $user)
    {

        $user->active = false;
        $user->save();
        return back ();

    }
}
