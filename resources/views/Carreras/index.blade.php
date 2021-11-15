@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
  <!-- Content here -->
</div>
    <h1> Lista de las Carreras</h1>
    <table class="table table-striped table-hover">
  <thead>
  <tr>
  <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">area</th>
      <th scope="col">fecha_creacion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($carreras as $carrera)
    <tr>
    <th scope="col">{{$carrera->id}}</th>
      <th scope="col">{{$carrera->nombre}}</th>
      <th scope="col">{{$carrera->area}}</th>
      <th scope="col">{{$carrera->fecha_creacion}}</th>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
    @endsection