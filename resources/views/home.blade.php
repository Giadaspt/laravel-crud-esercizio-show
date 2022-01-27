@extends('layouts.main')

@section('content')
  <div class="container">
    <h1 class="text-center">
      La nostra pasta...
      <span class="d-block mt-3">
        What else?
      </span>
    </h1>

    <section class="row d-flex">
      @foreach ($pastas as $pasta)
        <div class="pasta_view"> 
          <a href="{{ route('pastas.show', $pasta)}}">
            <img src="{{ $pasta->image }}" alt="">
          </a>
        </div>
        @endforeach
    </section>
  </div>
@endsection