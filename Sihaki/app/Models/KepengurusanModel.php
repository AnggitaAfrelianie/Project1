<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KepengurusanModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_pengurus')->get();
    }
    public function detailData($id_pengurus)
    {
        return DB::table('tbl_pengurus')->where('id_pengurus', $id_pengurus)->first();
    }
}
