@extends('layout.layout')
@section('content')
<div class="container my-5 card col-5 py-3">
  <h1 class="text-center">Book Entry</h1>

  <form action="{{ route('submit') }}" method="POST">
  @csrf
  @method('post')
    <div class="mb-3">
      <label for="bookTitle" class="form-label">Book Title</label>
      <input type="text" name="title" class="form-control" id="bookTitle" required>
    </div>
    <div class="mb-3">
      <label for="bookAuthor" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="bookAuthor" required>
    </div>
    <div class="mb-3">
      <label for="datePublished" class="form-label">Genre</label>
      <input type="text" name="genre" class="form-control" id="bookGenre" required>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>

</div>
<div class="container card py-3 col-5">
  <h1 class="text-center">Library</h1>

<table border="1">
<thead>
  <tr>
  <th >id</th> 
  <th >Book Title</th> 
  <th >Author</th> 
  <th >Genre</th> 
  <th >ACTIONS</th> 
  </tr>
</thead>
<tbody class="table-group-divider divider">
  @foreach ($library as $library)
    <tr class="content">
      <td>{{ $library->id }}</td>
      <td>{{ $library->title }}</td>
      <td>{{ $library->author }}</td>
      <td>{{ $library->genre }}</td>
      <td>

      <div class="d-flex flex-row">
      <a href= {{route('edit', ['library' => $library]) }} class="btn btn-primary me-3">Edit</a>
        <form method="POST" action="{{ route('delete', ['library' => $library]) }}">
          @csrf
          @method('delete') 
      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>
  
  </td>
    @endforeach
</tbody>
</table>

</div>

@endsection