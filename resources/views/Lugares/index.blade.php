@extends ('layouts.app')

@section('content')

<div class="container !direction !spacing">
<div class="container">
  <!-- Content here -->
</div>
    <h1> Lista de Lugares</h1>
    <a href="" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal">
    </button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>Registrar Lugares</a>
    <table class="table table-striped table-hover">
  <thead>
  <tr>
    <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">capacidad</th>
      <th scope="col">status</th>
      <th scope="col">foto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lugares as $lugar)
    <tr>
    <th scope="col">{{$lugar->id}}</th>
    <th scope="col">{{$lugar->nombre}}</th>
      <th scope="col">{{$lugar->capacidad}}</th>
      <th scope="col">{{$lugar->status}}</th>
      <th scope="col">{{$lugar->fotos}}</th>
      <th> <img src="{{assets('images'.$lugares->images)}}" with="100px;" height="160px;"alt="images"></th>
   </tr>
   @endforeach
  </tbody>
</table>
<!--------------------------------ADD NEW LUGAR----------------------------> 


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Lugar</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
        <div class="input-group">
          <div class="input-group-prepent">
            <span class="input-group.text">id</span>
          </div>
          <input type="text" class="form-control" name=" Nombre del lugar" placeholder="">
      </div>
      <br>
      <div class="input-group">
        <div class="input-group-prepent">
          <span class="input-group.text">nombre</span>
        </div>
        <input type="text" class="form-control" name=" Codigo Postal del Lugar" placeholder="">
    </div>
    <br>
    <div class="input-group">
      <div class="input-group-prepent">
        <span class="input-group.text">capacidad</span>
      </div>
      <input name="Nombre de la Calle" type="text" class="form-control @error('nombre de la calle') is-invalid @enderror"  value="{{ old('nombre de la calle') }}" required autocomplete="nombre de la calle" autofocus>
  </div>
  <br>
  <div class="form-group row">
    <label for="apmaterno"
class="col-md-4 col-form-label text-md-right">{{ __('Seleccione Foto') }}</label>
<div class="col-md-6">
    <div class="input-group">
<form>
    <div class="form-group">
      <label for="exampleFormControlFile1"></label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </form>
</div>    
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save Lugar</button>
        

</div>
</div>
    @endsection