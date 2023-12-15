@extends('layout.app')

@section('content')
    <h1>This is PagesController.about</h1>
    
    {{-- {{ $x = 2; }} --}}


    <!-- conditional operation -->
    {{-- @if ($x > 2)
        <h3>x is greater than 2</h3>
    @endif --}}

    {{-- @unless (empty($name))
        <h3>Name is not empty.<br> Name is {{ $name }}</h3>
    @else 
        <h3>Name is empty</h3>
    @endunless --}}

    {{-- empety directive --}}
    {{-- @empty(!$name)
        <h3>Name is: {{ $name }}</h3>
    @endempty
    @empty($age)
       <h3>Age is empty</h3> 
    @endempty
    @isset($name)
        <h3>Name is setted</h3>
    @endisset
    @isset($age)
        <h3>Name is setted</h3>
    @endisset
    @switch($name)
        @case('Duc')
            <h1>My name is Duc</h1>
            @break
        @case('Long')
        <h1>My name is Long</h1>
            @break
        @default
        <h1>Undefine name</h1>
    @endswitch --}}
    {{-- loop interation --}}
    {{-- @for ($i = 0; $i < 10; $i++)
    <h3>i = {{ $i }}</h3>        
@endfor
@foreach ($names as $item)
    <h3>My name is {{ $item }}</h3>
@endforeach
@forelse ($names as $item)
    <p>Each name: {{ $item }}</p>
@empty
    <p>There is no name in there</p>
@endforelse --}}
    {{-- {{ $i = 0 }}
    @while ($i < 10)
        <h1> Value of i: {{ $i }}</h1>
        {{ $i++ }}
    @endwhile --}}
@endsection
