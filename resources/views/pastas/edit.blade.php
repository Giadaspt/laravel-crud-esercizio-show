@extends('layouts.main')

@section('content')
  <div class="row mt-5">
    <div class="col-8 offset-2">
      <form action="{{ route('pastas.update', $pastas) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Nome Pasta</label>
          <input type="text" class="form-control" value="{{$pastas->title}}" name="title" id="title" placeholder="Nome della pasta">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Tipo Pasta</label>
          <input type="text" class="form-control" value="{{$pastas->type}}" name="type" id="type" placeholder="Tipo della pasta">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Tipo Pasta</label>
          <input type="text" class="form-control" value="{{$pastas->image}}" name="image" id="image" placeholder="Immagine della pasta">
        </div>
        <div class="mb-3">
          <label for="cooking_time" class="form-label">Tempo di cottura</label>
          <input type="number" class="form" value="{{$pastas->cooking_time}}" name="cooking_time" id="cooking_time" placeholder="Tempo di cottura">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control"  name="description" id="description" rows="3">
            {{$pastas->description}}
          </textarea>
        </div>
        <input class="bg-primary p-2" type="submit" value="Invia"> 
        <input class="bg-secondary p-2" type="reset" value="Cancella"> 
      </form>
    </div>
  </div>
@endsection