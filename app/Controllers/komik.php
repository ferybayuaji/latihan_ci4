<?php

namespace App\Controllers;

use App\Models\m_komik;
use CodeIgniter\Validation\Validation;

class Komik extends BaseController
{
    protected $m_komik;
    public function __construct()
    {
        $this->m_komik = new m_komik();
    }
    public function index()
    {
        //cara koenec db tanpa db
        //$db = \Config\Database::connect();
        //$komik = $db->query("Select * from komik;");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }
        //$komik = $this->m_komik->findAll();

        $data = [
            'title' => 'Komik',
            'komik' => $this->m_komik->getdata()
        ];

        #$m_komik = new \App\Models\m_komik();
        #$m_komik = new m_komik();
        #dd($komik);


        return view('komik/komik', $data);
    }

    public function detail($slug)
    {
        //$komik = $this->m_komik->where(['slug' => $slug])->first();
        //$komik = $this->m_komik->getdata($slug);
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->m_komik->getdata($slug)
        ];

        //dd($komik);
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik' . $slug . 'Tidak ditemukan.');
        };
        return view('komik/detail', $data);

        #echo $slug;
    }

    public function adddata()
    {
        session();
        //$komik = $this->m_komik->where(['slug' => $slug])->first();
        //$komik = $this->m_komik->getdata($slug);
        $data = [
            'title' => 'Form Tambah data Komik',
            'validation' => \Config\Services::validation()
            //'komik' => $this->m_komik->getdata($slug)
        ];
        //dd($komik);
        return view('komik/tambah', $data);

        #echo $slug;
    }
    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} judul komik ini sudah terdaftar.'
                ]
            ]
            // 'judul' => 'required|is_unique[komik.judul]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/komik/adddata')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        //var_dump($slug);
        //die();
        //dd($this->request->getVar());
        $this->m_komik->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis')
        ]);
        //var_dump($slug);
        //die();
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/komik');
        //$data = [
        //  'title' => 'Save Tambah data Komik'
        //'komik' => $this->m_komik->getdata($slug)
        //];

        //return view('komik/tambah', $data);
    }
    public function delete($id)
    {
        $data = [
            'title' => 'Delete data Komik'
        ];
        $this->m_komik->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/komik');
        //return view('/komik', $data);
    }
}
