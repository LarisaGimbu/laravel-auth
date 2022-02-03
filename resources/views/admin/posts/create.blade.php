@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un post:</h1>

    <form action=" {{route('admin.posts.store')}} " method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title:</label>
        <input 
        type="text" 
        class="form-control" 
        id="title" 
        name="title" 
        placeholder="Title" 
        aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Content:</label>
        <textarea 
        type="text" 
        class="form-control" 
        id="content"
        name="content">
          
        </textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

</div>
@endsection