<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        // data yg ditangkap oleh clients akan dibaca dimasukan ke client dan ditampilkan semuanya

        return view('client.index',compact('clients'));
        // ini akan membaca ke folder view client index.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('client.create');
        // ini akan membaca ke folder view client index.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'title'=>'required',
        'description'=>'required',
        'image'=>'required|image'
       ]);
       $input = $request->all();
       // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
       // diiinput lalu di req dimasukan ke all

       if($image = $request->file('image')){
        $destinationPath = 'image/';
        $imageName = $image->getClientOriginalName();
        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image->move($destinationPath,$imageName);
        $input['image'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }

       Client::create($input);

       return redirect('/admin/clients')->with('message','Data berhasil ditambahkan');
       //setelah berhasil makan akan di create lalu dikembalikan ke /admin/clients dengan text berhasil
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {


        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'image'
           ]);
           $input = $request->all();
           // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
           // diiinput lalu di req dimasukan ke all
    
           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image->move($destinationPath,$imageName);
            $input['image'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image']);
           }
    
           $client->update($input);
    
           return redirect('/admin/clients')->with('message','Data berhasil diedit');
           //setelah berhasil makan akan di create lalu dikembalikan ke /sliders dengan text berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/admin/clients')->with('message','Data berhasil dihapus');
    }
}
