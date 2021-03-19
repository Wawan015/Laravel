@extends('layout.main')

@section('title', 'Tabel Frekuensi')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Data Frekuensi Siswa</h1>
            <table class="table table-striped ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Nilai</th>
                        <th scope="col">Frekuensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($frekuensi as $nilai)
                    <tr>
                        <td> {{ $nilai->nilai }} </td>
                        <td> {{ $nilai->frekuensi }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td> <b>Total Nilai = </b>  </td>
                        <td> {{ $totalskor }}</td>
                    </tr>
                    <tr>
                        <td> <b>Total Frekuensi =</b>  </td>
                        <td> {{ $totalfrekuensi }}</td>
                    </tr>
                   
                </tbody>
            </table>
            <a href="/students" class="btn btn-primary my-2">Kembali</a>
        </div>
    </div>
    
</div>

@endsection