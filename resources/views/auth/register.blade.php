@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="appaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input name="appaterno" type="text" class="form-control @error('appaterno') is-invalid @enderror"  value="{{ old('appaterno') }}" required autocomplete="appaterno" autofocus>

                                @error('appaterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apmaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input name="apmaterno" type="text" class="form-control @error('apmaterno') is-invalid @enderror"  value="{{ old('apmaterno') }}" required autocomplete="apmaterno" autofocus>

                                @error('apmaterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                                <label for="apmaterno"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="custom-select" name="rol"
                                            aria-label="Example select with button addon">
                                            <option selected>Elija su rol</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Estudiante</option>
                                            <option value="3">Tutor</option>
                                            <option value="3">Coordinador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <label for="apmaterno"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="custom-select" name="sexo"
                                            aria-label="Example select with button addon">
                                            <option selected>Elija su sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="form-group row">
                                <label for="apmaterno"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="custom-select" name="rol"
                                            aria-label="Example select with button addon">
                                            <option selected>Elija su estatus</option>
                                            <option value="1">Activo</option>
                                            <option value="2">Baja Temporal</option>
                                            <option value="3">Baja Definitiva</option>
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>   
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
