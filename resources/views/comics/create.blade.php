@extends('layout.base')
@section('page-title')
    creazione nuovo fumetto
@endsection

@section('page-content')
<h1>Crea un nuovo prodotto</h1>

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    
    <div class="mb-3">
      <label for="thumb" class="form-label">Immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
  </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" >
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">data di uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" >
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">genere</label>
        <input type="type" class="form-control" id="type" name="type" >
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
</form>

@endsection