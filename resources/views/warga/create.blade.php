@extends('layouts.master')

@section('title', 'Tambah Warga')

@section('content')

<div class="container mx-auto">
        <form action="/warga/store" method="POST" class="w-6/12 mt-5 text-center rounded-2xl mx-auto bg-blue-600 py-4">
        <h1 class="text-center text-white text-2xl font-bold">Tambah Warga</h1>
        @method('POST')
        @csrf
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl" name="nama" placeholder="nama">
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl" name="nik" placeholder="nik">
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl" name="no_kk" placeholder="no kk"><br>
        <select class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl" name="jenis_kelamin">
            <option value="">Pilih jenis kelamin</option>
            <option value="L">L</option>
            <option value="P">P</option>
        </select><br>
        <textarea class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl" type="text" name="alamat" placeholder="alamat" rows="5"></textarea><br>
        <button type="submit" name="submit" class="py-2 px-8 font-bold my-3 text-white bg-green-600 rounded-xl">Kirim</button> 
    </form>
</div>

@endsection