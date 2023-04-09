@extends('layouts.app')

@section('title')
Data Testimonial
    
@endsection

@section('content')

<div class="container">
        <a href="/admin/testimonials/create" class="btn btn-primary mb-3">Tambah Data</a>
        {{-- /testimonials/create artinya untuk ngelink kesitu agar saat dipencet --}}
      
      
        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>            
        @endif
        {{-- jika pesan sukses maka message akan tampil --}}
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td>
                            <img src="/image/{{ $testimonial->image }}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('testimonials.destroy', $testimonial->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        {{-- untuk membaca dari $sliders lalu akan ditangkap oleh slider dan ditampilkan --}}
                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection