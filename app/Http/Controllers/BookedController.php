<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use App\Models\Kamar;
use App\Models\User;
use Illuminate\Http\Request;

class BookedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $booking = Booked::all();
        $kamar = Kamar::all();
        $user = User::all();
        return view('booked.index', compact('booking', 'kamar', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if($request->hasFile('bukti'))
        {
            $destination_path = 'public/images/booked';
            $image = $request->file('bukti');
            $name = $image->getClientOriginalName();
            $path = $request->file('bukti')->storeAs($destination_path, $name);
            $input['bukti'] = $name;
        }

        Booked::create($input);
        return redirect('/booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booked  $booked
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booked::find($id);
        return view('booked.detail', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booked  $booked
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booked::find($id);
        $kamar = Kamar::all();
        return view('booked.edit', compact('booking','kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booked  $booked
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booked::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('bukti'))
        {
            $destination_path = 'public/images/booked';
            $image = $request->file('bukti');
            $name = $image->getClientOriginalName();
            $path = $request->file('bukti')->storeAs($destination_path, $name);
            $data['bukti'] = $name;
        }

        $booking->update($data);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booked  $booked
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Booked::find($id);
        $data->delete();
        return redirect('/admin');
    }
}
