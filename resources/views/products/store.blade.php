@extends('layouts.app')
@section('page_title', 'Inserimento nuovo prodotto')
@section('content')
  <div class="container mt-5">
      <h1>Nuovo prodotto inserito con sucesso!</h1>

      <a class="btn btn-primary" href="{{ route('products.index') }}">Torna alla lista prodotti</a>
  </div>

@endsection
