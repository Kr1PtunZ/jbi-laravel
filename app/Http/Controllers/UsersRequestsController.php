<?php

namespace App\Http\Controllers;

use App\Models\UsersRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UsersRequestsController extends Controller
{
    protected function getUsersRequests() : View
    {
        $requests = UsersRequests::query('SELECT * FROM users_requests ORDER BY `date` ')->paginate(10);
        return view('usersRequests', compact($requests));
    }
}
