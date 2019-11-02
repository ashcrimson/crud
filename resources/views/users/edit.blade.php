@extends('layout')

@section('title', "Crear usuario")

@section('content')
        <h1>Editar usuario</h1>

        @if ($errors->any())
        <div class="aler alert-danger">
          <h5>Por favor corrige los errores debajo</h5>
               <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>

        </div>
        @endif

        <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
                {{ method_field('PUT') }}
                {!! csrf_field() !!}

                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" placeholder="Son Goku" value="{{ old('name', $user->name) }}">
               
                <br>

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="goku@gmail.com" value="{{ old('email', $user->email)}}">
                <br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">
                <br>

                <button type="submit">Actualizar usuario</button>

        </form>

        <p>
                <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
        </p>

@endsection
