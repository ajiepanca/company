<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        return view('about', compact('about'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);

        $request->validate([
            'judul'=>'required',
            'subjudul'=>'required',
            'deskripsi_1'=>'required',
            'deskripsi_2'=>'required',
            'kelebihan_1'=>'required',
            'kelebihan_2'=>'required',
            'kelebihan_3'=>'required',
            'kelebihan_4'=>'required',
           ]);
           $input = $request->all();
           // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
           // diiinput lalu di req dimasukan ke all
    
        //    if($image = $request->file('logo')){
        //     $destinationPath = 'image/';
        //     $imageName = $image->getClientOriginalName();
        //     // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        //     $image->move($destinationPath,$imageName);
        //     $input['logo'] = $imageName;
        //     // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
        //    }else{
        //     unset($input['logo']);
        //    } 
    
           $about->update($input);
    
           return redirect('/admin/about')->with('message','Data berhasil diedit');
           //setelah berhasil makan akan di create lalu dikembalikan ke /sliders dengan text berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
