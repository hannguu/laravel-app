@extends('layout.app')
@section('content')
    <h1>This is FoodsController.create</h1>
    <a href="/foods" class="btn btn-primary " role="button">Back</a>
    <form action="/foods" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="file" name="image">
        <input class="form-control" type="text" name="name" placeholder="Enter food's name">
        <input class="form-control" type="text" name="description" placeholder="Description">
        <input class="form-control" type="text" name="count" placeholder="Quantity">
        <select class="form-select" name="category_id" aria-label="Default select example">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input class=" btn btn-success" type="submit" name="submit" value="Create">
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style='color: red'>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
