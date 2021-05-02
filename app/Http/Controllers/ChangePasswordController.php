<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function changePassword(User $user)
    {
        $data = request()->validate([
            'password_current' => 'required',
            'password' => 'required|confirmed'
        ]);

        if (!Hash::check(request('password_current'), $user->password)) {
            throw ValidationException::withMessages([
                'password_current' => ['The provided password is incorrect.'],
            ]);
        }

        $data = $user->update(['password' => Hash::make(request('password'))]);

        return redirect()->back();
    }
}
