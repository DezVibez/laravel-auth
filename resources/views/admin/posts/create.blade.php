@extends('layouts.app')

@section('content')

<header class="container">
    <h1>
        Crea un nuovo Post
    </h1>
</header>
<div class="container">
    
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control"
             id="title" required minlenght="5" maxlenght="50" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content">
                {{ old('content') }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="url" class="form-control"
             id="image" value="{{ old('image') }}">
        </div>

        <hr>
    
        
        
        <hr>
        
        <footer class="d-flex justify-content-between">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                Torna indietro <i class="fa-solid fa-rotate-left"></i>
            </a>
            
            <button type="submit" class="btn btn-success">
                Crea <i class="fa-solid fa-plus"></i>
            </button>
        </footer>
    </form>
    
</div>
    @endsection