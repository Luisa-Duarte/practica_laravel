@extends('layouts.app')

@section('title')

@section('content')

    <form action="/modelo" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="colores" class="form-label">colores</label>
            <input type="text" class="form-control" id="colores" name="colores">
        </div>
        <div class="mb-3">
            <label for="disenos" class="form-label">disenos</label>
            <input type="text" class="form-control" id="disenos" name="disenos">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">crear</button>
    </form>

@endsection
