@extends('home')
@section('title', 'Danh sách Blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách Blog</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Address</th>
                    <th scope="col">Blogger</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $key => $blog)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->address }}</td>
                    <td>{{ $blog->blogger }}</td>
                    <td>{{ $blog->content }}</td>
                    <td><a href="{{ route('blogs.show', $blog->id) }}">Detail</a>
                        <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                    <a href="{{ route('blogs.destroy', $blog->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
