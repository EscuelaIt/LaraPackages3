<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
		return view('backend.dashboard');
    }
}