@extends('layout')


@section('content')
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo usuario</a>
        </p>

    </div>
    

    @if ($users->isNotEmpty())
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
         
        <form action="{{ route('users.destroy', $user)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('users.show', $user) }}" class="btn btn-link"><i class="far fa-eye"></i></a> 
            <a href="{{ route('users.edit',  $user) }}" class="btn btn-link"><i class="far fa-edit"></i></a>
            <button type="submit" class="btn btn-link"><i class="fas fa-trash-alt"></i></button>
        </form> 

      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@else 
    <p>No hay usuarios registrados.</p>
@endif

@endsection

@section('sidebar')
    
    <h2>Barra lateral personalizada</h2>
@endsection
    
