<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
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
        $kamar = Kamar::all();
        return view('kamar.index', compact('kamar'));
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
        $input = $request->except(
            'photo1',
            'photo2',
            'photo3'
        );

        // $destination_path = 'public/images/kamar';
        // $image = $request->file('foto');
        // $name = $image->getClientOriginalName();
        // $path = $request->file('foto')->storeAs($destination_path, $name);
        // $input['photo_link1'] = $name;

        if ($request->hasFile('photo1')) {
            $destination_path = 'public/images/kamar';
            $image = $request->file('photo1');
            $name = $image->getClientOriginalName();
            $path = $request->file('photo1')->storeAs($destination_path, $name);
            $input['photo_link1'] = $name;
        }

        if ($request->hasFile('photo2')) {
            $destination_path = 'public/images/kamar';
            $image = $request->file('photo2');
            $name = $image->getClientOriginalName();
            $path = $request->file('photo2')->storeAs($destination_path, $name);
            $input['photo_link2'] = $name;
        }

        if ($request->hasFile('photo3')) {
            $destination_path = 'public/images/kamar';
            $image = $request->file('photo3');
            $name = $image->getClientOriginalName();
            $path = $request->file('photo3')->storeAs($destination_path, $name);
            $input['photo_link3'] = $name;
        }

        Kamar::create($input);
        return redirect('/kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.detail', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kamar = Kamar::find($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $destination_path = 'public/images/kamar';
            $image = $request->file('foto');
            $name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path, $name);
            $data['photo_link1'] = $name;
        }

        $kamar->update($data);
        return redirect('/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kamar::find($id);
        $data->delete();
        return redirect('/kamar');
    }
}
