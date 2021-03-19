@extends('layout.main')

@section('title', 'Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>
            <table class="table table-striped ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $ssw)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ssw->nama}}</td>
                        <td>{{$ssw->nis}}</td>
                        <td>{{$ssw->nilai}}</td>
                        <td>
                            <a href="" class="badge bg-success">Edit</a>
                            <a href="" class="badge bg-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection