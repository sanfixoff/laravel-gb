@extends('layouts.app')

@section('title', 'Новость')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($news)
                            @if (!$news->isPrivate)
                                <h2>{{ $news->title }}</h2>
                                <p>{{ $news->desc }}</p>
                            @else
                                Зарегистрируйтесь для просмотра
                            @endif
                        @else
                            Нет новости с таким id
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
