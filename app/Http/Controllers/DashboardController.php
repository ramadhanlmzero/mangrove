<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kecamatan;
use App\Model\Mangrove;
use App\Model\Sampel;

class DashboardController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::count();
        $mangroves = Mangrove::count();
        $sampels = Sampel::count();
        return view('admin.dashboard', compact('kecamatans', 'mangroves', 'sampels'));
    }
}
