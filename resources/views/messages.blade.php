@extends('layouts.app')

@section('title-block')Сообщения@endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3> {{ $el->name }} </h3>
            <p> {{ $el->email }} </p>
            <p> {{ $el->subject }} </p>
            <p> {{ $el->message }} </p>
            <p><smail>{{$el->created_at}}</smail></p>
            <p><smail>{{$el->updated_at}}</smail></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Деталнее</button></a>
        </div>
    @endforeach
@endsection
