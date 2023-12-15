@extends('layout.app')
@section('content')
<h1>FoodsController.index</h1>
{{-- <h2>Hello {{ $user }}</h2> --}}
<a href="foods/create" class="btn btn-primary "  role="button" >Add new food</a>

<ol class="list-group list-group-numbered">
  
@foreach ($foods as $item)
<li class="list-group-item d-flex justify-content-between align-items-start">
  <div class="ms-2 me-auto">
    <div class="fw-bold">
      <a href="/foods/{{ $item->id }}"> {{ $item->name }}</a>
    </div>
    {{ $item->description }}
  </div>
  <span class="badge bg-primary rounded-pill">{{ $item->count }}</span>
  <a href="foods/{{ $item->id }}/edit" class="btn btn-warning "  role="button" >Edit</a>
  <form action="/foods/{{ $item->id }}" method="POST">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger" type="submit">Delete</button>
  </form>
</li>

@endforeach
</ol>
@endsection