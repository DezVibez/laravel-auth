@extends('layouts.app')

@section('content')

<header>
    <h1>
       {{ $post->title }}
    </h1>
</header>

    <div class="clearfix">
        @if($post->image)
        <img class="float-left mr-2" src="{{$post->image}}" alt="{{$post->id}}">
        @endif
        <p>
            {{ $post->content }}
        </p>
        <div>
            <strong>Creato il:</strong> <time>{{ $post->created_at }}</time>
    
            <strong>Modificato il:</strong> <time>{{ $post->updated_at }}</time>
        </div>
    </div>

    <hr>




    <footer class="d-flex align-items-center justify-content-end">
        <a class="btn btn-secondary" href=" {{ route('admin.posts.index') }}">
            <i class="fa-solid fa-rotate-left"></i> Indietro
        </a>
    </footer>


@endsection

