<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public function showHomepage(){
        return view('homepage');
    }
    public function showArticleForm(){
        $authors=Author::all();
        return view('formarticolo', compact('authors'));
    }
    public function showDashboard(){
        return view('dashboard');
    }
}
