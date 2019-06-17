@extends('layouts.admin')

@section('content')
    <div class="container">
        
        <div class="panel panel-default">
            <div class="panel-heading">Статистика блога</div>
            <div class="statistika">
                <table>
                    <tr>
                        <td><h2 style="text-align:center;">5</h2>
                            <p style="text-align:center;">Статей</p></td>
                        <td><h2 style="text-align:center;">0</h2>
                            <p style="text-align:center;">Коментарьев</p></td>
                        <td><h2 style="text-align:center;">3</h2>
                            <p style="text-align:center;">Пользователей</p></td>
                        <td><h2 style="text-align:center;">0</h2>
                            <p style="text-align:center;">Подпищиков</p></td>
                        <td><h2 style="text-align:center;">1</h2>
                            <p style="text-align:center;color: #009933; font-weight: bold;">Online</p></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <aside class="leftbar">
            <nav class="admin-navbar">
                
                <ul>
                    <li class='active'><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Добавить статью </a>
                    </li>
                    
                </ul>
            </nav>
            /* createArticleform */
        </aside>
        
        
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-8">
                    <div class="admin admin-caver">
                        <div class="admin-title">Статьи</div>
                        @foreach($articles as $article)
                                <article class="article droop">
                                    <ul>
                                        <li class="dropdown"><a style="color:#fff;" href="#">{{$article->title}}  </a>
                                            <span><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                     role="button" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Одобрить
                                        </a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            удалить
                                        </a></li></ul></span>
                                        </li>
                                    </ul>
                                </article>
                        @endforeach
                    </div>
@endsection
