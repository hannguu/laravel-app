@extends('layout.app')
@section('content')
    <h1>This is FoodsController.Update</h1>
    <a href="/foods" class="btn btn-primary " role="button">Back</a>
    <form action="/foods/{{ $food->id }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control" type="text" name="name" value="{{ $food->name }}">
        <input class="form-control" type="text" name="description" value="{{ $food->description }}">
        <input class="form-control" type="text" name="count" value="{{ $food->count }}">
        <input class=" btn btn-danger" type="submit" name="submit" value="Edit">
    </form>
@endsection
