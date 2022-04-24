<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepengurusanModel;

class KepengurusanController extends Controller
{
    public function __construct()
    {
        $this->KepengurusanModel = new KepengurusanModel();
    }

    public function index()
    {
        $data = [
            'kepengurusan'=> $this->KepengurusanModel->allData(),
        ];
        return view('kepengurusan', $data);
    }

    public function detail($id_pengurus)
    {
        $data = [
            'kepengurusan'=> $this->KepengurusanModel->detailData($id_pengurus),
        ];
        return view ('detailpengurus', $data);
    }
}
