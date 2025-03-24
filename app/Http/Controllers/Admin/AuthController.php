<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest\LoginRequest;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(
        private UserService  $userService,
    ) {}


    public function index()
    {
        return view('page.home');
    }

    public function login()
    {
        return view('page.auth.login');
    }

    public function loginpost(LoginRequest $request)
    {

        $data = $request->validated();
        $cer = Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $request->remember);

        if ($cer) {
            if (Auth::user()->status == 1) {
                return redirect()->route('home');
            } else {
                Auth::logout();
                return  redirect()->back()->with(['er' => 'tài khoản của bạn đã bị khóa']);
            }
        } else {
            return  redirect()->back()->with(['er' => 'đăng nhập thất bại']);
        }
    }

    public function register()
    {
        return view('page.auth.register');
    }

    public function registerpost(RegisterRequest $request)
    {
        $data = $request->validated();
        $this->userService->createUser($data);
        $cer = Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $request->remember);
        return redirect()->route('home');
    }

    public function resetPassword()
    {
        return view('page.auth.resetPassword');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showProfileAccount()
    {
        return view('page.auth.accountProfile');
    }

    public function forgotPassword()
    {
        return view('page.auth.forgotPassword');
    }

    public function checkMail()
    {
        return view('page.auth.checkMail');
    }

    public function codeVerification()
    {
        return view('page.auth.codeVerification');
    }
}
