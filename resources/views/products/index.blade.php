@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h1 class="pull-left">Tutti i prodotti</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Aggiungi nuovo</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>Prezzo scontato</th>
        <th>Categoria</th>
        <th>Azioni</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr>
          <th>{{ $product->id }}</th>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description}}</td>
          <td>{{ $product->price}}</td>
          <td>
            @if ($product->sale_price)
              {{ $product->sale_price}}
            @else
              -
            @endif
          </td>
          <td>{{ $product->category}}</td>
          <td>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Visualizza</a>
          </td>
        </tr>
        @empty
          <tr>
            <td colspan="7">
              Non ci sono prodotti
            </td>
          </tr>
      @endforelse
    </tbody>
  </table>


</div>
@endsection

@section('page_title', 'Tutti i prodotti')
