<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest\LoginRequest;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(
        private UserService  $userService,
        private AuthService  $authService
    ) {}

    /**
     * Display the home page of the website.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('page.home');
    }

    /**
     * Show the login page to the user.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('page.auth.login');
    }

    /**
     * Handle a login POST request.
     *
     * This method delegates authentication to the AuthService and
     * redirects based on the result:
     * - Redirects to home if login is successful.
     * - Redirects back with error message if the account is locked or login fails.
     *
     * @param \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginpost(LoginRequest $request)
    {
        $result = $this->authService->login($request);
        if ($result === true) {
            return redirect()->route('home');
        }

        if ($result === 'locked') {
            return redirect()->back()->with(['er' => 'Tài khoản của bạn đã bị khóa']);
        }

        return redirect()->back()->with(['er' => 'Đăng nhập thất bại']);
    }


    /**
     * Display the user registration page.
     *
     * This method returns the registration view where users can create a new account.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('page.auth.register');
    }

    /**
     * Handle the user registration form submission.
     *
     * This method processes the incoming registration request, creates a new user
     * through the UserService, and redirects the user to the home page upon success.
     *
     * @param  \App\Http\Requests\RegisterRequest  $request  The validated registration request.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerpost(RegisterRequest $request)
    {
        $this->userService->createUser($request);
        return redirect()->route('home');
    }

    /**
     * Show the reset password form.
     *
     * This method returns the view for the password reset page where users
     * can request to reset their password.
     *
     * @return \Illuminate\View\View
     */
    public function resetPassword()
    {
        return view('page.auth.resetPassword');
    }


    /**
     * Log out the currently authenticated user.
     *
     * This method logs the user out of the application and redirects
     * them to the login page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Display the user profile account page.
     *
     * This method returns the view responsible for showing
     * the authenticated user's profile information.
     *
     * @return \Illuminate\View\View
     */
    public function showProfileAccount()
    {
        return view('page.auth.accountProfile');
    }


    /**
     * Display the forgot password page.
     *
     * This method returns the view where users can request
     * a password reset by providing their registered email.
     *
     * @return \Illuminate\View\View
     */
    public function forgotPassword()
    {
        return view('page.auth.forgotPassword');
    }


    /**
     * Display the check mail instruction page.
     *
     * This view informs the user to check their email
     * for a password reset link or confirmation message.
     *
     * @return \Illuminate\View\View
     */
    public function checkMail()
    {
        return view('page.auth.checkMail');
    }

    /**
     * Display the code verification page.
     *
     * This view prompts the user to enter a verification code,
     * typically sent via email or SMS for account confirmation or password reset.
     *
     * @return \Illuminate\View\View
     */
    public function codeVerification()
    {
        return view('page.auth.codeVerification');
    }
}
