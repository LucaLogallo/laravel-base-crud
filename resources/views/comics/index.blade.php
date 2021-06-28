@extends('layouts.main')

@section('content')

<div class="container">
  <h1>Li fumetti</h1>
  <section class="container">
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th colspan="3">Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($comics as $comic)
                  <tr>
                      <td>{{ $comic->id }}</td>
                      <td>{{ $comic->title }}</td>
                      <td>{{ $comic->type }}</td>
                      <td>
                          <a href="{{ route('comics.show',$comic)}}" class="btn btn-success">SHOW</a>
                      </td>
                      <td>
                        <a href="/" class="btn btn-success " style="background-color: blue">EDIT</a>
                      </td>
                      <td>
                        <a href="/" class="btn btn-success " style="background-color: red">DELETE</a>
                      </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
  </section>
  <section class="container">
    {{-- parte di suoi per i cabbi suoi e parte un componente di bootstrappone --}}
    {{ $comics->links() }} {{-- questo è per mettere i numerini x scorrere le pagine --}}
</section>
</div>

@endsection