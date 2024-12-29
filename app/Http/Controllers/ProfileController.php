<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the logged-in user
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'birthday' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
                        $fail('The birthday must be in the format YYYY-MM-DD.');
                    }
                },
            ],
        ]);

        $user->update($request->only('name', 'email'));
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

}