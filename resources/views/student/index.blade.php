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
                  <tr>
                     <th scope="row">1</th>
                     <td>Wildan</td>
                     <td>10113267</td>
                     <td>dankurniadi10@gmail.com</td>
                     <td>Teknik Informatika</td>
                     <td>
                        <a href="" class="badge badge-warning">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                     </td>
                  </tr>
               </tbody>
             </table>
          </div>
       </div>
    </div>
@endsection