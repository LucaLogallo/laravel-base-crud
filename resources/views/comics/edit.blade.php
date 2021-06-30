@extends('layouts.main')

@section('content')

  <div class="container p-5">

    <form action="{{ route('comics.update', $comic) }}" method="post">
      @csrf
      @method('PATCH')

      <div class="mb-3"> {{-- title --}}
          <label for="title" class="form-label">Nome Fumetto</label>
          <input type="text" id="title" name="title" class="form-control" value="{{$comic['title']}}">
      </div>

      <div class="mb-3"> {{-- description --}}
          <label for="description" class="form-label">Descrizione</label>
          <textarea  id="description" name="description" class="form-control" rows="6" >{{$comic['description']}}</textarea>
      </div>
      <div class="mb-3"> {{-- thumb --}}
          <label for="thumb" class="form-label">Immagine</label>
          <textarea  id="thumb" name="thumb" class="form-control" rows="6">{{$comic['thumb']}}</textarea>
      </div>

      <div class="mb-3"> {{-- price --}}
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" id="price" name="price" class="form-control" value="{{$comic['price']}}">
      </div>

      <div class="mb-3"> {{-- series --}}
          <label for="series" class="form-label">Serie</label>
          <input type="text" id="series" name="series" class="form-control" value="{{$comic['series']}}">
      </div>

      <div class="mb-3"> {{-- sale date --}}
          <label for="sale_date" class="form-label">Data uscita</label>
          <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{$comic['sale_date']}}">
      </div>

      <div class="mb-3"> {{-- type --}}
          <label for="type" class="form-label">Tipo di fumetto</label>
          <select  id="type" name="type" class="form-control">
              <option value="comic book" @if ($comic->type === 'comic book') selected @endif>comic book</option>
              <option value="graphic novel" @if ($comic->type === 'graphic novel') selected @endif>graphic novel</option>
          </select>
      </div>


      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary ">Reset</button>

  </form>
  </div>


@endsection