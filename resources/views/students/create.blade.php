@extends('layout.main')

@section('title', 'Form Tambah data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Form Data Siswa</h1>
            <form method="POST" action="/students">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required name="nama" >  
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                     <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS 5 digit" required name="nis">  
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" required name="nilai">  
                </div>
                <button type="submit" class="btn btn-primary mt-2" > Submit </button>
            </form>

        </div>
    </div>
</div>

@endsection