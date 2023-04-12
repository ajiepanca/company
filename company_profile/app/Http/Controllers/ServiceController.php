<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        // data yg ditangkap oleh services akan dibaca dimasukan ke Service dan ditampilkan semuanya

        return view('service.index',compact('services'));
        // ini akan membaca ke folder view Service index.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('service.create');
        // ini akan membaca ke folder view Service index.blade
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
        $image->move($destinationPath,$imageName);
        $input['image'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }

       Service::create($input);

       return redirect('/admin/services')->with('message','Data berhasil ditambahkan');
       //setelah berhasil makan akan di create lalu dikembalikan ke /admin/services dengan text berhasil
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
    public function edit(Service $service)
    {


        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Service $service)
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
            // jika ingin namanya menggunakan date bisa seperti ini
            $image->move($destinationPath,$imageName);
            $input['image'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image']);
           }
    
           $service->update($input);
    
           return redirect('/admin/services')->with('message','Data berhasil diedit');
           //setelah berhasil makan akan di create lalu dikembalikan ke /admin/services dengan text berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/admin/services')->with('message','Data berhasil dihapus');
    }
}
