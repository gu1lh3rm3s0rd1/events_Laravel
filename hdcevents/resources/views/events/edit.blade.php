@extends('layouts.main')
@section('title', 'Editando: ' . $event->title)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="image"> Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title"> Evento: </label>
            <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="date"> Data do evento: </label>
            <input type="date" id="date" class="form-control" name="date" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="title"> Cidade: </label>
            <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title"> O evento é privado ? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title"> Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento ? " {{ $event->description }}></textarea>
        </div>
        <div class="form-group">
            <label for="title"> Adicone itens de infraestrutura: </label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>


        <input type="submit" class="btn btn-primary mt-3" value="Editar Evento">
    </form>
</div>

@endsection
