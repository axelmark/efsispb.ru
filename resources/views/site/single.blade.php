@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@if(isset($article))
@section('content')
    <div class="wrap">
        <div class="about">
            <div class="services-sidebar">
                <h4>Categories</h4>
                <ul>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor
                            sit amet</a></li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor
                            sit amet</a></li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor
                            sit amet</a></li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor
                            sit amet</a></li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor
                            sit amet</a></li>
                </ul>
                <br>
                <h4>Archives</h4>
                <ul>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Jan, 2012</a>
                    </li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Jan, 2012</a>
                    </li>
                    <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Jan, 2012</a>
                    </li>
                </ul>
            </div>
            <div class="bloder-content">

                <div class="blog-box1">
                    <div class="blog-box-image">
                        <img src="{{asset('assets/images/pre.png')}}" title="priview"/>
                    </div>

                    <div class="blog-box-content">
                        <h5>{{$article['title']}}</h5>
                        <p>{{$article['text']}}</p>

                        <ul>
                            <li><a href="#">Админ</a></li>
                            <li><a href="#">: {{$article['created_at']->format('d M Y')}}</a></li>
                            <li><a href="{{url()->previous() }}"><span>Вернуться назад</span></a></li>
                        </ul>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>


@endsection
@else

    <h1>Нет Данных</h1>


@endif