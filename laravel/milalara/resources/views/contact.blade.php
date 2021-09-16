@extends('layouts.app')

@section('title-block')
Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis accusamus vel ipsa adipisci eius magni veniam beatae ipsum nostrum dolorem et repellendus explicabo, omnis tempore recusandae? Inventore, eligendi soluta!</p>


    <form action="/contact/submit" method="post">
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder = "Введите имя" id="name" class = "form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder = "Введите email" id="email" class = "form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder = "Тема сообщения" id="subject" class = "form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Введите ваше сообщение"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>


@endsection