@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">

            <p> {{ $data->email }} </p>
            <p> {{ $data->subject }} </p>
            <p> {{ $data->message }} </p>
            <p><smail>{{$data->created_at}}</smail></p>
            <p><smail>{{$data->updated_at}}</smail></p>
            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>

@endsection
