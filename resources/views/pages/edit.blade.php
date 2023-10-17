@extends('layout.layout')
@section('contgot ent')
<div class="container col-5 mt-5 mb-3">

  <a href={{ "/" }} class="btn btn-back">Back</a>

</div>
<div class="container mb-5 card col-5 py-3">
  <h1 class="text-center">Edit</h1>

  <form action="{{ route('update', ['library' => $library]) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="bookTitle" class="form-label">Book Title</label>
      <input type="text" name="title" class="form-control" id="bookTitle" required value="{{ $library->title }}">
    </div>
    <div class="mb-3">
      <label for="bookAuthor" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="bookAuthor" required value="{{ $library->author }}">
    </div>
    <div class="mb-3">
      <label for="datePublished" class="form-label">Genre</label>
      <input type="text" name="genre" class="form-control" id="bookGenre" required value="{{ $library->genre }}">
    </div>
    <input type="submit" class="btn btn-success" value="Submit">
  </form>
  @endsection