<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        private UserService  $userService,
    ) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersList = $this->userService->getUserList();
        return view('page.users.usersList', ['userList' => $usersList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('page.users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $message = $this->userService->createUser($request);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        $user = $this->userService->getUserDetail($user);
        return view('page.users.userProfile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = $this->userService->deleteUser($id);
        return redirect()->route('users.index')->with('message', $message);
    }

    public function showCard()
    {
        return view('page.users.userCard');
    }
}
