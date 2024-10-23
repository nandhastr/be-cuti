<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
            'pegawai' => Pegawai::all()
            
        ];
        return view('pages.pegawai.index', $data);
    }
}
