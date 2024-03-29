@extends('layout')

@section('title', "Crear usuario")

@section('content')
        <div class="card">
                <h4 class="card-header">Crear usuario</h4>
                        <div class="card-body">
                        @if ($errors->any())
        <div class="alert alert-danger">
          <h5>Por favor corrige los errores debajo</h5>
               <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>

        </div>
        @endif

        <form method="POST" action="{{ url('usuarios') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Son Goku" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="goku@gmail.com" value="{{ old('email')}}">
                </div>

                <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">

                </div>

                <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea name="bio" class="form-control" id="bio">{{ old('bio') }}</textarea>
                </div>

                <div class="form-group">
                        <label for="twitter">Twitter:</label>
                        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="https://twitter.com/gundamdraws" value="{{ old('twitter') }}">
                </div>
                

                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>


        </form>

                        </div>
                
        </div>
        

@endsection
