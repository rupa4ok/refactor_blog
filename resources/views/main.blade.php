@extends('layouts.app')

@section('content')
    
    <div class="container">
        
        @if($articles)

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @foreach($articles as $article)
                        @if($article->public == 1)
                            <article class="main">
                                
                                <div class="article-images" style=" background-color: #000; background:url('{{ $article->images() }}') no-repeat;" >
                                    <div class="categories-links "><a href="/thems/{{$article->category->alias }}">{{ $article->category->title }}</a></div>
                                    <div class='article-title'><h2>{{$article['title']}}</h2></div>
                                    <div class="welcome-author"><a href="id{{ $article->author->id }}">{{ $article->author->name }}</a></div>
                                    <div class="more-links"><li><a  href="/{{$article['alias']}}"> <i class="fa fa-bolt" aria-hidden="true"></i> Читать!</a></li></div>
                                </div>
                            
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>
        
        @else
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            <div style="margin:30px 0; ";>
                                <h2 style="text-align: center;">Пока статей на блоге нет</h2>
                                <p style="text-align: center;">Напишите первую статью <a href='/login'>Login</a></p>
                            
                            </div>
                        </div>
                    </div>
                    
                    @endif
                
                </div>
            </div>
    </div>

@endsection
