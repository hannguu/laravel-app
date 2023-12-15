@extends('layout.app')
@section('content')
    <h1>This is FoodsController.show</h1>
    <a href="/foods" class="btn btn-primary " role="button">Back</a>
    <div>
        <img src="{{ asset('images/' . $food->image_path) }}" style="width: 30%;" alt="image">
        <h1>{{ $food->name }} <span class="badge bg-danger">{{ $food->count }}</span></h1>
        <p>{{ $food->description }}</p>

        <p>Food type: {{ $food->category->name }}</p>
        <p>Description: {{ $food->category->description }}</p>
    </div>
@endsection
