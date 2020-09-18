<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostComments;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){

        return view("admin.index");
    }
}
