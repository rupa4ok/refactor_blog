@extends('layouts.app')

@section('content')
    
    <div class="container">
        @if (!empty($categories))
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        Все категории
                    </div>
                    <div class="card-body pb-0" style="color: #aaa">
                        <div class="row">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            Категория: {{ $category }}
                            <span class="pull-right"><a href="/">Назад к списку категорий -></a></span>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header">
                            Подкатегории
                        </div>
                        <div class="card-body pb-0" style="color: #aaa">
                            <div class="row">
                                <ul>
                                    @foreach ($subCategory as $item)
                                        <li><a href="/{{ $category }}/{{ $item->slug }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    
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
                                    <li><a href="{{ route('category.show', $article->title) }}">{{ $article->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection