@extends('layout.main')

@section('title', 'Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>
            <a href="/students/create" class="btn btn-primary my-2">Tambah Data</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                
            @endif
            <table class="table table-striped ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $std)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$std->nama}}</td>
                        <td>{{$std->nis}}</td>
                        <td>{{$std->nilai}}</td>
                        <td>
                            
                            <a href="/edit/{{$std->id}}" class="badge bg-success">Edit</a>
                            <form name="delete" action="/delete/{{$std->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger">Hapus</button>
                            </form>
                            
                            
                        </td>

                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <b>Rata-rata = </b>  </td>
                        <td> {{ $avgrg }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <b>NIlai MAX =</b>  </td>
                        <td> {{ $max }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <b>NIlai MIN =</b>  </td>
                        <td> {{ $min }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <a href="/students/operations" class="btn btn-primary my-2">Mencari Frekuensi</a>
        </div>
    </div>
    
</div>

@endsection