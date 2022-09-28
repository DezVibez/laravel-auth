@extends('layouts.app')

@section('content')

   
<header class="d-flex justify-content-between container">
    <h1>
        Post List
    </h1>

    <a href="{{ route('admin.posts.create') }}" >
            
        
            <button class="btn btn-success btn-sm mt-2">
                <i class="fa-solid fa-plus"></i> Crea Nuovo
            </button>

    </a>

</header>

<main class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo </th>
      <th scope="col">Slug</th>
      <th scope="col">Creato il</th>
      <th scope="col">Modificato il</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @forelse($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->slug }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->updated_at }}</td>
      <td>
        <a href="{{ route('admin.posts.show', $post) }}">
            <button class="btn btn-sm btn-primary">
            <i class="fa-solid fa-magnifying-glass">
                Vedi
            </i>
            </button>
        </a>

        <a href="{{ route('admin.posts.edit', $post) }}">
            <button class="btn btn-sm btn-warning">
            <i class="fa-solid fa-pen">
                Modifica
            </i>
            </button>
        </a>

        <form action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST">
            
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm mt-2" type="submit">
                <i class="fa-solid fa-trash"></i> Elimina
            </button>

        </form>

        

      </td>
    </tr>
    @empty
    <tr>
      <td scope="row"> <h3 class="text-center"> Nessun post </h3> </td>
    </tr>
    @endforelse
    
  </tbody>
</table>
</main>

@endsection