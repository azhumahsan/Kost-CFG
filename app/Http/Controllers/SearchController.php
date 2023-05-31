<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $booking = Booked::all();
        $cari = $request->get('keyword');
        if($cari)
        {
            $booking = Booked::where('nama','LIKE',"%$cari%")->paginate(10);
        }
        return view('search.index', compact('booking'));   
    }
}
