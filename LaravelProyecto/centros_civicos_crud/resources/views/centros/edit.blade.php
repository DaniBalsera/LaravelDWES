<!-- resources/views/centros/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Centro Cívico</h1>
    <form action="{{ route('centros.update', $centro) }}" method="POST">
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
        @csrf
        @method('PUT')
        <input type="text" name="nombre" value="{{ $centro->nombre }}" required>
        <input type="text" name="direccion" value="{{ $centro->direccion }}" required>
        <input type="text" name="telefono" value="{{ $centro->telefono }}">
        <input type="email" name="email" value="{{ $centro->email }}" required>
        <input type="text" name="horario" value="{{ $centro->horario }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
