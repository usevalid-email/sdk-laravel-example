<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailValidationController extends Controller
{
    public function validateEmail(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|valid_email',
        ]);

        if ($validator->fails()) {
            return back()->with('error', "The email address is invalid.");
        }

        return back()->with('success', "The email address is valid.");
    }
}
