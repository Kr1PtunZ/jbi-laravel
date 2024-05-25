<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPanelController extends Controller
{
    public function getAdminPanel() : View
    {
        return view('admin-panel');
    }
}
