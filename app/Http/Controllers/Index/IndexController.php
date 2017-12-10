<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;

class IndexController extends BaseIndexController
{
    public function index()
    {
        return view('index.index');
    }

    public function introduction()
    {
        return view('index.introduction');
    }

    public function login()
    {
        return view('index.login');
    }

    public function pay()
    {
        return view('index.pay');
    }

    public function register()
    {
        return view('index.register');
    }

    public function search()
    {
        return view('index.search');
    }

    public function shopcart()
    {
        return view('index.shopcart');
    }

    public function sort()
    {
        return view('index.sort');
    }

    public function success()
    {
        return view('index.success');
    }

    public function error404()
    {
        return view('errors.404');
    }
}
