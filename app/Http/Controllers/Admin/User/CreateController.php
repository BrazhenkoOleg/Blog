<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke() {
        $roles = User::getRoles();
        return view('admin.users.create', compact('roles'));
    }
}
