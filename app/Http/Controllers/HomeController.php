<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('created_at', '>=', Carbon::now()->subYear());
        return $this->render('admin.users.list', compact('users'));
    }
}
