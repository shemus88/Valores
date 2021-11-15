@extends ('layouts.app')

@section('content')
    <div class="container !direction !spacing">
        <div class="container">
            <!-- Content here -->
        </div>
        <h1> Lista de Usuarios</h1>
        <a href="{{ route('register') }}">Registrar Usuario</a>
        <table class="table table-striped table-hover">
            <thead>

                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">appaterno</th>
                    <th scope="col">apmaterno</th>
                    <th scope="col">email</th>
                    <th scope="col">foto</th>
                    <th scope="col">rol</th>
                    <th scope="col">sexo</th>
                    <th scope="col">status</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="col">{{ $user->id }}</th>
                        <th scope="col">{{ $user->name }}</th>
                        <th scope="col">{{ $user->appaterno }}</th>
                        <th scope="col">{{ $user->apmaterno }}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->foto }}</th>
                        <th scope="col">{{ $user->rol }}</th>
                        <th scope="col">{{ $user->sexo }}</th>
                        <th scope="col">{{ $user->status }}</th>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </div>
@endsection
