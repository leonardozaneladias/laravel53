@extends('layouts.app')

@section('content')

    <div class="container">
        {!! Form::model($book, [
                        'route' => ['books.update', 'category' => $book->id], 'class' => 'form', 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('subtitle', 'Sub Titulo') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Valor') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Livro', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection