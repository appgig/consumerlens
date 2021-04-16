<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
       return view('web.index');
    }

    public function services()
    {
       return view('web.services');
    }

    public function consumerLense()
    {
       return view('web.consumerLense');
    }

    public function profile()
    {
       return view('web.profile');
    }

    public function signIn()
    {
       return view('web.signIn');
    }
}
