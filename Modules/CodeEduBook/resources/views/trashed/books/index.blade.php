@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Lixeira de Livros</h3>
        </div>
        <br>
        <div class="row">
            {!! Form::model([compact('search')], ['class' => 'form-inline', 'method' => 'GET']) !!}
            {!! Form::label('search', 'Pesquisar por título') !!}
            {!! Form::text('search', null, ['class' => 'form-control']) !!}
            {!! Button::primary('Buscar') !!}
            {!! Form::close() !!}

        </div>
        <div class="row">
            @if($books->count() > 0)
            {!!
                Table::withContents($books)
                ->callback('Ações', function ($field, $book){

                    $linkView = route('trashed.books.show', ['book' => $book->id]);
                    $linkDestroy = route('books.destroy', ['book' => $book->id]);

                    $restoreForm = "delete-form-{$book->id}";
                    $form = Form::open(['route' => ['trashed.books.update', 'book' => $book->id], 'method' => 'PUT', 'id' => $restoreForm, 'style' => 'display:none']).
                    Form::hidden('redirect_to', URL::current()).
                    Form::close();

                    $anchorDestroy = Button::link('Restore')->asLinkTo($linkDestroy)->addAttributes([
                        'onclick' => "event.preventDefault();document.getElementById(\"$restoreForm\").submit();"
                    ]);

                    return
                        "<ul class=\"list-inline\">".
                            "<li>".Button::link('Ver')->asLinkTo($linkView)."</li>".
                            "<li> | </li>".
                            "<li>".$anchorDestroy."</li>".
                        "</ul>".
                        $form;
                })
            !!}

            {{ $books->links() }}
            @else
                <br>
                <div class="well well-lg"><strong>Lixeira vazia</strong></div>
            @endif
        </div>
    </div>

@endsection