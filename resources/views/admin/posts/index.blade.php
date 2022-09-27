@extends('layouts.app')

@section('content')

<header>
    <h1>
        Post List
    </h1>

</header>

<main>
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
      <td></td>
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