<div class="wrap">
    <div class="about">
        <div class="services-sidebar">
            <h4>Categories</h4>
            <ul>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>
                <li><img src="{{asset('assets/images/pointer.png')}}" title="pointer"/><a href="#">Lorem ipsum dolor sit
                        amet</a></li>

            </ul>
            <br>
            {{--<h4>Archives</h4>--}}
            {{--<ul>--}}
            {{--<li><img src="{{asset('assets/images/pointer.png')}}" title="pointer" /><a href="#">Jan, 2012</a></li>--}}
            {{--<li><img src="{{asset('assets/images/pointer.png')}}" title="pointer" /><a href="#">Feb, 2012</a></li>--}}
            {{--<li><img src="{{asset('assets/images/pointer.png')}}" title="pointer" /><a href="#">March, 2012</a></li>--}}
            {{--<li><img src="{{asset('assets/images/pointer.png')}}" title="pointer" /><a href="#">April, 2012</a></li>--}}
            {{--</ul>--}}
        </div>
        @foreach($post as $pos)
            <div class="bloder-content">
                <div class="bloger-grid">
                    <div class="blog-img">
                        <a href="/post{{{$pos->id}}}"><img src="{{asset('assets/images/img11.jpg')}}" title="img6"/></a>
                    </div>

                    <div class="bloger-content">
                        <h5><a href="/post{{{$pos->id}}}">{{$pos->title}}</a></h5><br><br>
                        <p>{{$post['desc']}}</p>
                        <ul>
                            <li><a href="#">Админ</a></li>
                            <li><a href="#">{{$pos->created_at}}</a></li>
                            <li><a href="/post{{$pos->id}}"><span>Читать далее</span></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        @endforeach
    </div>
</div>

<div class="clear"></div>
