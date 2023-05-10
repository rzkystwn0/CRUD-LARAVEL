@extends('layouts.master')

@section('title', 'Edit Warga')

@section('content')

<div class="container mx-auto">
    <form action="/warga/{{$warga->id}}" class="w-6/12 my-5 text-center rounded-2xl mx-auto bg-blue-600 py-4" method="POST">
        <h1 class="text-center text-white text-2xl font-bold">Edit Warga</h1>
        @method('PUT')
        @csrf
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl"  name="nama" placeholder="nama" value="{{$warga->nama}}"><br>
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl"  name="nik" value="{{$warga->nik}}" placeholder="nik"><br>
        <input type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl"  name="no_kk" placeholder="no kk" value="{{$warga->no_kk}}"><br>
        <select class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl"  name="jenis_kelamin">
            <option value="">Pilih jenis kelamin</option>
            <option value="L" @if($warga->jenis_kelamin == 'L') selected @endif>L</option>
            <option value="P" @if($warga->jenis_kelamin == 'P') selected @endif>P</option>
        </select><br>
        <textarea  type="text" class="w-8/12 mx-auto my-2 py-2 px-4 rounded-2xl"  name="alamat" placeholder="alamat" rows="5">{{$warga->alamat}}</textarea><br>
        <button type="submit" name="submit"  class="py-2 px-8 font-bold my-3 text-white bg-green-600 rounded-xl">kirim</button>
    </form>
</div>

@endsection