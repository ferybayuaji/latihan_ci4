<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Hello world $this->nama";
    }

    public function Home()
    {
        // return view('welcome_message');
        echo "Hello world $this-'nama";
    }

    public function coba($nama = '', $tmp = '')
    {
        echo "coba $nama, gas dong ya $tmp";
    }
}
