@extends('layouts.main')

@section('content')
  <div class="container text-center mt-5">
    <h1> Errore 404</h1>

    <p>
      {{ $exception->getMessage() }}
    </p>
  </div>

@endsection