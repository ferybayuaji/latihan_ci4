<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web fery',
            'array' => ['1', '2', '3']
        ];
        //echo view('layout/v_header', $data);
        //echo view('pages/v_pages');
        //echo view('layout/v_footer');
        //echo "Hello world pages";
        return view('pages/v_pages', $data);
        //echo "Hello world $this->nama";
    }

    public function about()
    {
        $data = [
            'title' => 'About | Web fery',
            'array' => ['satu', 'dua', 'tiga']
        ];
        //echo view('layout/v_header', $data);
        return view('pages/v_about', $data);
        //echo view('layout/v_footer');
        //return view('pages/v_about');
        //echo "Hello world $this->nama";
    }

    public function contact()
    {
        $data =
            [
                'title' => 'Contact | Web fery',
                'alamat' => [
                    [
                        'tipe' => 'rumah',
                        'alamat' => 'jl abc',
                        'kota' => 'Cimahi'
                    ],
                    [
                        'tipe' => 'Kantor',
                        'alamat' => 'jl setiabudi',
                        'kota' => 'Cimahi'
                    ]
                ]
            ];
        //echo view('layout/v_header', $data);
        return view('pages/v_contact', $data);
        //echo view('layout/v_footer');
        //return view('pages/v_about');
        //echo "Hello world $this->nama";
    }
}
