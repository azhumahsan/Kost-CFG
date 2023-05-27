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
        $input = $request->all();

        if($request->hasFile('foto'))
        {
            $destination_path = 'public/images/kamar';
            $image = $request->file('foto');
            $name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path, $name);
            $input['foto'] = $name;
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
        $kamar = Kamar::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('foto'))
        {
            $destination_path = 'public/images/kamar';
            $image = $request->file('foto');
            $name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path, $name);
            $data['foto'] = $name;
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
