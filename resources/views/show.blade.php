@extends('layouts.app')

@section('content')
    
    <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            Подкатегория: {{ $subSlug }}
                            <span class="pull-right"><a href="/">Назад к списку категорий -></a></span>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        Все статьи
                    </div>
                    <div class="card-body pb-0" style="color: #aaa">
                        <div class="row">
                            <ul>
                                @foreach ($articles as $article)
                                    <li><a href="">{{ $article->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection