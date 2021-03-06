@extends('layouts.main')

@section('content')
  <div class="container text-center mt-5">

    <h2>{{$show_pastas->title}}</h2>
    <h4>Pasta {{$show_pastas->type}}</h4>
    <img src="{{$show_pastas->image}}" alt="">
    <h4> Tempo di cottura: {{$show_pastas->cooking_time}} minuti</h4>
    <p class="pl-5 pr-5"> {!!$show_pastas->description!!}</p>

    <button class="btn btn-info d-flex justify-content-start ">
      <a href="{{ route('pastas.index', $show_pastas) }}"> Indietro </a>
    </button>
    <button class="btn btn-dark d-flex justify-content-start mt-3 mb-3">
      <a href="{{ route('pastas.edit', $show_pastas) }}"> Modifica </a>
    </button>
  </div>

@endsection