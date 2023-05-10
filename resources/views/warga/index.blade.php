@extends('layouts.master')

@section('title', 'Daftar Warga')

@section('content')

<div class="container mx-auto my-12">
    <div class="w-2/12 mx-auto text-center my-6">
        <a href="/warga/create" class="bg-blue-600 text-white py-2 px-4 rounded-lg ">Tambah Warga</a>
    </div> 
    <table class="table-auto w-10/12 mx-auto bg-gray-600 border border-white rounded-2xl">
        <thead>
            <tr>
                <th class="border text-white border-white">Id</th>
                <th class="border text-white border-white">Nama</th>
                <th class="border text-white border-white">No Nik</th>
                <th class="border text-white border-white">No KK</th>
                <th class="border text-white border-white">Jenis Kelamin</th>
                <th class="border text-white border-white">Alamat</th>
                <th class="border text-white border-white">Aksi</th>
            </tr>
        </thead>

        @foreach($warga as $w)
        <tbody>
            <tr>
                <td class="text-center border text-white border-white">{{$w->id}}</td>
                <td class="text-center border text-white border-white">{{$w->nama}}</td>
                <td class="text-center border text-white border-white">{{$w->nik}}</td>
                <td class="text-center border text-white border-white">{{$w->no_kk}}</td>
                <td class="text-center border text-white border-white">{{$w->jenis_kelamin}}</td>
                <td class="text-center border text-white border-white">{{$w->alamat}}</td>
                <td class="text-center border text-white border-white">
                    <div class=" w-7/12 mx-auto my-2">
                        <a href="/warga/{{$w->id}}/edit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit</a>
                        <form action="/warga/{{$w->id}}" method="post" class="bg-red-600 text-white px-4 py-2 rounded-lg inline-block ">
                            @csrf
                            @method('delete')
                            <input type="submit" class="cursor-pointer" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
</div>

@endsection