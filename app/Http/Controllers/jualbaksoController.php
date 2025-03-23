<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualBaksoController extends Controller
{
    public function getData()
   {
    $datajualbakso = [
        ['id' => 1, 'nama' => 'baskourat', 'harga' => 15000],
        ['id' => 2, 'nama' => 'baksohalus', 'harga' => 20000],
        ['id' => 3, 'nama' => 'baksoberanak', 'harga' => 25000],
        ['id' => 4, 'nama' => 'mieayambakso', 'harga' => 20000],
        ['id' => 5, 'nama' => 'baksokosong', 'harga' => 14000],
    ];

    return $datajualbakso;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('jualbakso', compact('data'));
}
}
?>