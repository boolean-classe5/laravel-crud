@extends('layouts.app')

@section('page_title', 'Inserimento nuovo prodotto')

@section('content')
  <div class="container mt-5">
    <h1>Inserisci un nuovo prodotto</h1>
    <form method="post" action="{{ route('products.store') }}">
      @csrf
      <div class="form-group">
        <label for="name">Nome prodotto:</label>
        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto">
      </div>
      <div class="form-group">
        <label for="description">Descrizione prodotto:</label>
        <textarea class="form-control" name="description" placeholder="Inserisci la descrizione del prodotto"></textarea>
      </div>
      <div class="form-group">
        <label for="price">Prezzo prodotto:</label>
        <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo del prodotto">
      </div>
      <div class="form-group">
        <label for="sale_price">Prezzo scontato prodotto:</label>
        <input type="text" class="form-control" name="sale_price" placeholder="Inserisci il prezzo scontato del prodotto">
      </div>
      <div class="form-group">
        <label for="category">Categoria prodotto:</label>
        <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria del prodotto">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
