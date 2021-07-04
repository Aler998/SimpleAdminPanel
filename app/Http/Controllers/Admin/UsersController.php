<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::with('role')->get();
        return view('admin.pages.users.index', compact('users'));
    }
}
