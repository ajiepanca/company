@extends('layouts.app')

@section('title')
Data Portofolio
    
@endsection

@section('content')

<div class="container">
        <a href="/admin/portofolios" class="btn btn-primary mb-3">Kembali</a>
       {{-- saat tombol kembali dipencet maka akan kembali ke link /portofolio keluar dari /portofolio/create --}}
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('portofolios.update', $portofolio->id)}}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                {{-- action="{{ route ('portofolios.store')}}" untuk mengambil data dari store  --}}
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$portofolio->title}}">
                </div>
                @error('title')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$portofolio->description}}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$portofolio->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
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