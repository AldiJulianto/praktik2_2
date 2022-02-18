<!-- menghubungkan dengan view template app -->

@extends('layouts.app')

<!-- isi dengan bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

<!-- isi bagian konten -->
<!-- cara penulisan section yang panjang -->
@section('konten')

    <p>Ini adalah Halaman</p>
    <p>Selamat Datang!</p>

@endsection
