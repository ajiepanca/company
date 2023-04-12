@extends('layouts.app')

@section('title')
Data Contact
    
@endsection

@section('content')

<div class="container">
        {{-- <a href="/contact" class="btn btn-primary mb-3">Kembali</a> --}}
       {{-- saat tombol kembali dipencet maka akan kembali ke link /contact keluar dari /contact/create --}}
    <div class="row">
        <div class="col-md-12">

            @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{$message}}</p>
            </div>            
            @endif

            <form action="/admin/contact/{{$contact->id}}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                {{-- action="{{ route ('contacts.store')}}" untuk mengambil data dari store  --}}
                @csrf
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name" placeholder="Judul" value="{{$contact->name}}">
                </div>
                @error('name')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$contact->description}}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$contact->alamat}}">
                </div>
                @error('alamat')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$contact->email}}">
                </div>
                @error('email')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{$contact->telepon}}">
                </div>
                @error('telepon')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{$contact->maps_embed}}</textarea>
                </div>
                @error('maps_embed')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$contact->logo}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="logo" >
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection