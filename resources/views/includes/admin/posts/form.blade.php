@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach    
    </ul>
</div>
@endif

<div class="container">

    @if($post->exists)
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @method('PUT')
    @else
    <form action="{{ route('admin.posts.store') }}" method="POST">
    @endif
        @csrf
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control"
             id="title" required minlenght="5" maxlenght="50" value="{{ old('title', $post->title)  }}" name="title">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content">
                {{ old('content', $post->content) }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="url" class="form-control"
             id="image" value="{{ old('image', $post->image) }}" name="image">
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