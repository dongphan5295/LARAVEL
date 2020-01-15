@extends('home')

@section('title', 'Update Blog')


@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Update Blog</h2>

      </div>

      <div class="col-md-12">

          <form method="post" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                  <label>Title</label>

                  <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>

              </div>

              <div class="form-group">

                  <label>Address</label>

                  <textarea class="form-control" rows="3" name="address"  required>{{ $blog->address }}</textarea>

              </div>

              <div class="form-group">

                <label>Blogger</label>

                <input type="text" name="blogger" class="form-control"  value="{{ $blog->blogger }}" required>

            </div>

              <div class="form-group">

                  <label>Content</label>

                  <textarea type="text" name="content" class="form-control-file" value="{{ $blog->content }}" required  > </textarea>

              </div>


              <button type="submit" class="btn btn-primary">Edit</button>

              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

          </form>

      </div>

  </div>


@endsection
