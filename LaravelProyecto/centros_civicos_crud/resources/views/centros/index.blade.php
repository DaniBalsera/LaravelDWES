<!-- resources/views/centros/index.blade.php -->
@extends('layouts.app')

@section('content')
    <style>
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        form {
            display: inline;
        }
        button {
            background: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #c82333;
        }
    </style>

    <h1>Lista de Centros Cívicos</h1>
    
    <a href="{{ route('centros.create') }}">Crear Nuevo</a>
    <ul>
        @foreach($centros as $centro)
            <li>
                <div>
                    <strong>Nombre:</strong> {{ $centro->nombre }}<br>
                    <strong>Dirección:</strong> {{ $centro->direccion }}<br>
                    <strong>Teléfono:</strong> {{ $centro->telefono }}<br>
                    <strong>Email:</strong> {{ $centro->email }}
                </div>
                <div>
                    <a href="{{ route('centros.edit', $centro) }}">Editar</a>
                    <form action="{{ route('centros.destroy', $centro) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
