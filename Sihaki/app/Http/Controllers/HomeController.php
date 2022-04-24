<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'nip' => '1234',
            'nama' => 'A.Nova Zulfahmi, S.Pi., M.Sc.',
            'jabatan' => 'Ketua'

        ];
        return view('home', $data);
    }

}

