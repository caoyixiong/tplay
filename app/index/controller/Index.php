<?php


namespace app\index\controller;


use app\BaseController;

class Index extends BaseController
{

    public function index()
    {
        return view('index/index');
    }

    public function welcome()
    {
        return view('index/welcome-1');
    }


    public function welcome1()
    {
        return view('index/welcome-1');
    }

    public function welcome2()
    {
        return view('index/welcome-2');
    }


    public function welcome3()
    {
        return view('index/welcome-3');
    }

    public function menu()
    {
        return view('index/menu');
    }


    public function setting()
    {
        return view('index/setting');
    }

    public function table()
    {
        return view('index/table');
    }

    public function form()
    {
        return view('index/form');
    }

    public function form_step()
    {
        return view('index/form-step');
    }


    public function login()
    {
        return view('index/login-1');
    }

    public function login1()
    {
        return view('index/login-1');
    }

    public function login2()
    {
        return view('index/login-2');
    }

    public function login3()
    {
        return view('index/login-3');
    }

    public function error()
    {
        return view('index/404');
    }

    public function button()
    {
        return view('index/button');
    }


    public function layer()
    {
        return view('index/layer');
    }

    public function icon()
    {
        return view('index/icon');
    }

    public function icon_picker()
    {
        return view('index/icon-picker');
    }


    public function color_select()
    {
        return view('index/color-select');
    }

    public function table_select()
    {
        return view('index/table-select');
    }

    public function upload()
    {
        return view('index/upload');
    }

    public function editor()
    {
        return view('index/editor');
    }


    public function area()
    {
        return view('index/area');
    }

    public function user_setting()
    {
        return view('index/user-setting');
    }


    public function user_password()
    {
        return view('index/user-password');
    }
}
