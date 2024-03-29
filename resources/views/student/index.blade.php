@extends('layout/main')

@section('title', 'Learning Laravel')

@section('container')
    <div class="container">
       <div class="row">
          <div class="col-10">
             <h1 class="mt-3">Daftar Mahasiswa</h1>

             <table class="table">
               <tr>
                  <thead class="thead-dark">
                     <th scope="col">#</th> 
                     <th scope="col">NIM</th> 
                     <th scope="col">Nama</th> 
                     <th scope="col">Email</th> 
                     <th scope="col">Jurusan</th> 
                     <th scope="col">Aksi</th> 
                  </thead>
               </tr>
               <tbody>
                  @foreach ($mahasiswa as $mhs)
                  <tr>
                     {{-- https://laravel.com/docs/6.x/blade#loops --}}
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $mhs->nama }}</td>
                     <td>{{ $mhs->nim }}</td>
                     <td>{{ $mhs->email }}</td>
                     <td>{{ $mhs->jurusan }}</td>
                     <td>
                        <a href="" class="badge badge-warning">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
          </div>
       </div>
    </div>
@endsection