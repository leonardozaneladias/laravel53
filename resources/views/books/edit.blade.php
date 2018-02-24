@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

        </div>

        {!! Form::model($book, [
                        'route' => ['books.update', 'book' => $book->id], 'class' => 'form', 'method' => 'PUT']) !!}

        @include('books._form')

        {!! Html::openFormGroup() !!}
        {!! Button::primary('Salvar')->submit() !!}
        {!! Html::closeFormGroup() !!}

        {!! Form::close() !!}

    </div>

@endsection