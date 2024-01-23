@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

{{-- <h1>Algum Título</h1> --}}

{{-- @foreach ($events as $event)
<p>{{$event->title}} -- {{$event->description}}</p>
@endforeach --}}

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>

    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure um evento...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os próximos eventos dos próximos dias</p>
    <div id="card-container" class="row">
        @foreach ($events as $event)
        <div class="col-md-4">
            <img src="https://picsum.photos/1280/420?ramdom=10" alt="{{ $event->title}}" class="" />
            <div class="card-body">
                <p class="card-date">23/01/2024</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
