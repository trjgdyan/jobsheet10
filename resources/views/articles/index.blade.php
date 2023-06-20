@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h3>Data Article</h3>
    <a href="/articles/create" class="btn btn-primary my-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
                <td>
                    <a href="/articles/{{$article->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/articles/{{$article->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/articles/cetak_pdf" class="btn btn-danger" target="_blank">CETAK PDF</a>
</div>
@endsection
