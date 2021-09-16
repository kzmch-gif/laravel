@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis accusamus vel ipsa adipisci eius magni veniam beatae ipsum nostrum dolorem et repellendus explicabo, omnis tempore recusandae? Inventore, eligendi soluta!</p>

@endsection

@section('aside')
  @parent
  <p>Дополнительный текст</p>
@endsection