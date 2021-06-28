@extends('layouts.main')

@section('content')

  <div class="container p-5">

    <form action="{{ route('comics.store') }}" method="post">
      @csrf
      @method('POST')

      <div class="mb-3"> {{-- title --}}
          <label for="title" class="form-label">Nome Fumetto</label>
          <input type="text" id="title" name="title" class="form-control">
      </div>

      <div class="mb-3"> {{-- description --}}
          <label for="description" class="form-label">Descrizione</label>
          <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
      </div>
      <div class="mb-3"> {{-- thumb --}}
          <label for="thumb" class="form-label">Immagine</label>
          <textarea  id="thumb" name="thumb" class="form-control" rows="6"></textarea>
      </div>

      <div class="mb-3"> {{-- price --}}
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" id="price" name="price" class="form-control">
      </div>

      <div class="mb-3"> {{-- series --}}
          <label for="series" class="form-label">Serie</label>
          <input type="text" id="series" name="series" class="form-control">
      </div>

      <div class="mb-3"> {{-- sale date --}}
          <label for="sale_date" class="form-label">Data uscita</label>
          <input type="date" id="sale_date" name="sale_date" class="form-control">
      </div>

      <div class="mb-3"> {{-- type --}}
          <label for="type" class="form-label">Tipo di fumetto</label>
          <select  id="type" name="type" class="form-control">
              <option value="comic book">comic book</option>
              <option value="graphic novel">graphic novel</option>
          </select>
      </div>


      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary ">Reset</button>

  </form>
  </div>


@endsection