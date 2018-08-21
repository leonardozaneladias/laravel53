@extends('resources.views.layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <h3>Editar Livro</h3>
            <p>Autor: <strong>{{$book->author->name}}</strong></p>

        </div>

        {!! Form::model($book, [
                        'route' => ['books.update', 'book' => $book->id], 'class' => 'form', 'method' => 'PUT']) !!}

        @include('codeedubook::books._form')

        {!! Html::openFormGroup() !!}
        {!! Button::primary('Salvar')->submit() !!}
        {!! Html::closeFormGroup() !!}

        {!! Form::close() !!}

    </div>

@endsection