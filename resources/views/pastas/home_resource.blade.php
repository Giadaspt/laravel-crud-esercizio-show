@extends('layouts.main')

@section('content')
  <div class="container m-5">
    <h2 class="text-center">La nostra pasta</h2>
    <table class="table m-5">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Tipo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pastas as $pasta)
          <tr>
            <th scope="row">{{$pasta->id}}</th>
            <td>{{$pasta->title}}</td>
            <td>{{$pasta->type}}</td>
            <td>
              <button class="btn btn-info">
                <a href="{{ route('pastas.show', $pasta) }}">Show</a>
              </button>
            </td>
            <td>
              <button class="btn btn-warning">
                <a href="">Edit</a>
              </button>
            </td>
            <td>
              <button class="btn btn-danger">
                <a href="">Delete</a>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end">
      {{ $pastas->links() }}
    </div>
    <button class="btn btn-info d-flex justify-content-start m-5">
      <a href="{{ route('home') }}"> Indietro </a>
    </button>
  </div>
@endsection