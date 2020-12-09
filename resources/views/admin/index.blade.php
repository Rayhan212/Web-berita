@extends('template_backend.home')
@extends('template_backend.home')
@section('content')
@section('sub-judul','Category')

<a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Tambah Kategori</a>
    <table class="table table-striped table-hover table-sn table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $result => $hasil)
                <tr>
                    <td>
                        {{ $result + $category->firstitem() }}
                    </td>
                    <td>{{ $hasil->name }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $category->links()}}
@endsection