<!-- resources/views/centros/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Centro Cívico</h1>
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
    <form action="{{ route('centros.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="horario" placeholder="Horario" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
