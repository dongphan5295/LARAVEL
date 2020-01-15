@extends('home')
@section('title', 'Detail Blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Detail Blog</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif

            <div class="col-md-12">
                {{-- {{-- @foreach ($blog as $key => $value) --}}
                {{-- <label > STT </label>
                {{ $blog->id }} --}}
                <div>
                <label>Title</label>
                @php
                echo '</br>';
            @endphp
            </div>
            <div>
                {{ $blog->title }}
                @php
                    echo '</br>';
                @endphp
                </div>
                <label>Address</label>
                @php
                echo '</br>';
            @endphp
                {{ $blog->address }}
                @php
                echo '</br>';
            @endphp
                <label>Blogger</label>
                @php
                echo '</br>';
            @endphp
                {{ $blog->blogger }}
                @php
                echo '</br>';
            @endphp
                <label>Content</label>
                @php
                echo '</br>';
            @endphp
                {{ $blog->content }}

                {{-- @endforeach --}}
                </div>
                <a href="{{ route('blogs.index', $blog->id) }}">Back</a>
        </div>
    </div>
@endsection
