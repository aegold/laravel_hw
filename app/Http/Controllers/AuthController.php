<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show signin form (demo style with multiple fields)
    public function signin()
    {
        return view('auth.signin');
    }
    
    // Check signin - simplified for username + password only
    public function checkSignin(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|email',
            'password' => 'required'
        ]);
        
        // Try to find user by email (using username as email)
        $user = User::where('email', $request->input('username'))->first();
        
        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            return redirect('/')->with('success', 'Đăng nhập thành công!');
        }
        
        return back()->with('error', 'Thông tin đăng nhập không chính xác');
    }

    // Show signup form (demo style)
    public function signup()
    {
        return view('auth.signup');
    }
    
    // Check signup - adapted for demo form fields
    public function checkSignup(Request $request)
    {
        // Validate demo form fields
        $validated = $request->validate([
            'username' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'repass' => 'required|same:password',
            'mssv' => 'nullable',
            'class' => 'nullable',
            'gender' => 'nullable'
        ]);

        // Create user with username as email
        $user = User::create([
            'name' => $request->input('username'), // Use username as name
            'email' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Auto login after registration
        Auth::login($user);
        
        return redirect('/')->with('success', 'Đăng ký thành công!');
    }
    
    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/signin')->with('success', 'Đã đăng xuất');
    }
}
