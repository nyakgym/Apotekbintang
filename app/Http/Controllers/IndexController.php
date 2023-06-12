<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

    class IndexController extends Controller
    {
        public function home()
        {
            return view('dashboard');
        }
        public function obat()
        {
            return view('obat');
        }
        public function katobat()
        {
            return view('katobat');
        }
        public function pemasok()
        {
            return view('pemasok');
        }
        public function penjualan()
        {
            return view('penjualan');
        }
        public function pembelian()
        {
            return view('pembelian');
        }
        public function karyawan()
        {
            return view('karyawan');
        }
        public function laporan()
        {
            return view('laporan');
        }
    }