@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A facilis hic, incidunt magnam nulla sequi sint voluptate! Ad aliquam delectus et ipsa iure labore nisi nulla quo, quos tempora unde! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores assumenda consequuntur debitis, dolorum eius, error illum itaque iure iusto laudantium molestiae, nam necessitatibus omnis praesentium provident saepe suscipit ut?</p>
@endsection

@section('aside')
@parent
    <p>дополнительныи текст</p>
@endsection

