@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Nova categorias</h3>
            {!! Alert::warning('Ola Mundo') !!}
            {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

            @include('categories._form')

            {!! Html::openFormGroup() !!}
                {!! Button::primary('Criar Categoria')->submit() !!}
            {!! Html::closeFormGroup() !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection