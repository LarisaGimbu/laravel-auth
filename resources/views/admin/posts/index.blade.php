@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Elenco post:</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Slug</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <th scope="row"> {{$post->id}} </th>
          <td>{{$post->title}}</td>
          <td>{{$post->content}}</td>
          <td> {{$post->slug}} </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>

</div>
@endsection