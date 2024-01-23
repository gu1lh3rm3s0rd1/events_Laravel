@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')

{{-- <h1>Criar um Evento</h1> --}}

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title"> Evento: </label>
            <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title"> Cidade: </label>
            <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title"> O evento é privado ? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title"> Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento ? "></textarea>
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Criar Evento">
    </form>
</div>

@endsection
