@extends('layouts.app')

@section('page_title', 'Inserimento nuovo prodotto')

@section('content')
  <div class="container mt-5">
    <h1>Inserisci un nuovo prodotto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('products.store') }}" id="create_product">
      @csrf
      <div class="form-group">
        <label for="name">Nome prodotto:</label>
        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto" value="{{ old('name') }}">
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="description">Descrizione prodotto:</label>
        <textarea class="form-control" name="description" placeholder="Inserisci la descrizione del prodotto" value="{{ old('description') }}"></textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="price">Prezzo prodotto:</label>
        <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo del prodotto" value="{{ old('price') }}">
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="sale_price">Prezzo scontato prodotto:</label>
        <input type="text" class="form-control" name="sale_price" placeholder="Inserisci il prezzo scontato del prodotto" value="{{ old('sale_price') }}">
        @error('sale_price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="category">Categoria prodotto:</label>
        <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria del prodotto" value="{{ old('category') }}">
        @error('category')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Crea</button>
    </form>
  </div>

@endsection
