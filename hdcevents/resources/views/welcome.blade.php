@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

{{-- <h1>Algum Título</h1> --}}

{{-- @foreach ($events as $event)
<p>{{$event->title}} -- {{$event->description}}</p>
@endforeach --}}

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>

    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure um evento...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os próximos eventos dos próximos dias</p>
    @endif
    <div id="card-container" class="row">
        @foreach ($events as $event)
        <div class="col-md-4">
            <img src="https://picsum.photos/1280/420?ramdom=10" alt="{{ $event->title}}" class="" />
            {{-- referenciando a pasta static/img --}}
            {{-- <img src="/img/events/{{$event->image}}" alt="{{ $event->title}}" class="" /> --}}
            <div class="card-body">
                <p class="card-date">{{ date('d/m/y', strtotime( $event->date )) }}</p>
                <h5 class="card-title"> {{ $event->title }} </h5>
                {{-- <p class="card-participants"> {{ count( $event->users ) }} </p> --}}
                <p class="card-participants"> {{ count($event->users ?? []) }} </p>
                <a href="/events/ {{ $event->id }} " class="btn btn-primary"> Saber Mais </a>
            </div>
        </div>
        @endforeach

        @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif (count($events) == 0)
        <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>

@endsection
