<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','can:view role']);
    }

    public function index()
    {
        return view('admin.user-permissions.index');
    }
}
