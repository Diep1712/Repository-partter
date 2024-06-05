<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addUser(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8' // Fixed typo here
        ]);

        $product = $this->userRepository->create($validatedData);

        return redirect()->route('user.index')->with('success', 'User added successfully.');
    }
}
