@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Novo Livro</h3>

        </div>

        {!! Form::open(['route' => 'books.store', 'class' => 'form']) !!}

        @include('codeedubook::books._form')

        {!! Html::openFormGroup() !!}
        {!! Button::primary('Criar Livro')->submit() !!}
        {!! Html::closeFormGroup() !!}

        {!! Form::close() !!}

    </div>

@endsection