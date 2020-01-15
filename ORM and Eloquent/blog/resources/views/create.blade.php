@extends('home')

@section('title', 'Add new Blog')


@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Add new Blog</h2>

      </div>

      <div class="col-md-12">

          <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                  <label >Title Blog</label>

                  <input type="text" class="form-control" name="title" required>

              </div>

              <div class="form-group">

                  <label > Address </label>

                  <input class="form-control" rows="3" name="address" required>

              </div>

              <div class="form-group">

                <label for="exampleFormControlFile1">Blogger</label>

                <input type="text" name="blogger" class="form-control" required>

            </div>

              <div class="form-group">

                  <label for="exampleFormControlFile1">Content</label>

                  <textarea type="file" name="content" class="form-control-file" required> </textarea>

              </div>


              <button type="submit" class="btn btn-primary">Post</button>

              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

          </form>

      </div>

  </div>


@endsection
