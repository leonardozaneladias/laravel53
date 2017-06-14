@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Nova categorias</h3>
        </div>
        {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Categoria', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection