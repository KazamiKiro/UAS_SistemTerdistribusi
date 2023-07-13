<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use PhpParser\Node\Expr\PostDec;

class dashboardController extends Controller
{
    public function index()
    {
        $user = student::where('user_id','1')->count();

        return view('dashboard', compact ('user'));
    }
}
