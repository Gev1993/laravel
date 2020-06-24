@extends('layouts.app')

@section('title-block')Обновления записи@endsection

@section('content')
    <h1>Обновления записи</h1>
    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" value="{{$data->name}}" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Emaill</label>
            <input type="email" name="email" placeholder="Введите email" value="{{$data->email}}" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" value="{{$data->subject}}" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщения</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщения">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
