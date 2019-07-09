@extends('layouts.app')

@section('page_title', 'Visualizzazione prodotto')

@section('content')
    <div class="container mt-5">
      <h1>Prodotto: {{ $product->id }}</h1>
      <ul>
        <li><strong>Nome: </strong>{{ $product->name }}</li>
        <li><strong>Descrizione: </strong>{{ $product->description }}</li>
        <li><strong>Categorie: </strong>{{ $product->category }}</li>
        <li><strong>Prezzo: </strong>{{ $product->price }}</li>
        <li><strong>Prezzo scontato: </strong>{{ $product->sale_price ? $product->sale_price : '-' }}</li>
      </ul>
      <a class="btn btn-primary" href="{{ route('products.index') }}">Torna alla lista prodotti</a>
    </div>
@endsection
