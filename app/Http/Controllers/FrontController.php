<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sampel;
use App\Model\Mangrove;
use Mapper;
use PHPUnit\Framework\Constraint\SameSize;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function map()
    {
        $sampels = Sampel::with('kecamatan')->get();
        Mapper::location('Gresik')->map(
            [
                'zoom' => 11,
                'center' => true,
                'marker' => false
            ]
        );
        return view('map', compact('sampels'));
    }

    public function graphic()
    {
        return view('graphic');
    }
}
