@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
    </tr>
    @foreach($hoteles as $hotel)
    @if($hotel->categoria==1 && $hotel->completo==1)
      <tr style="color: red">
        <td>{{$hotel->id}}</td>
        <td>{{$hotel->nombre}}</td>
        <td>{{$hotel->direccion}}</td>
        <td>{{$hotel->categoria}}</td>
      </tr>
      @endif
    @endforeach
  </table>

@endsection
