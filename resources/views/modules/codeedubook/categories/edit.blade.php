@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Nova categorias</h3>
        </div>
        {!! Form::model($category, [
                        'route' => ['categories.update', 'category' => $category->id], 'class' => 'form', 'method' => 'PUT']) !!}

        @include('codeedubook::categories._form')

        {!! Html::openFormGroup() !!}
            {!! Button::primary('Salvar alteração')->submit() !!}
        {!! Html::closeFormGroup() !!}

        {!! Form::close() !!}
    </div>

@endsection