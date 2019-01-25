<div class="wrap">
    <ul class="dc_pagination dc_paginationA dc_paginationA03">
        {{--<li><a href="{{{$post->url(1)}}}" class="first">First</a></li>--}}
        @if($post->lastPage()>1)
            @if($post->currentPage()!==1)
                <li><a href="{{{$post->url($post->currentPage()-1)}}}"
                       class="previous">{{{Lang::get('pagination.previous')}}}</a>
                </li>
            @endif
            @for($i=1; $i <= $post->lastPage(); $i++)
                @if($post->currentPage()==$i)
                    <li><a class="current">{{{$i}}}</a></li>
                @else
                    <li><a href="{{{$post->url($i)}}}">{{{$i}}}</a></li>
                @endif
            @endfor
            @if($post->currentPage() !== $post->lastPage())
                <li><a href="{{{$post->url($post->currentPage()+1)}}}">{{{Lang::get('pagination.next')}}}</a></li>
            @endif
        @endif
        {{--<li><a href="#" class="last">Last</a></li>--}}
    </ul>
    <div class="clear"></div>
</div>
<div class="clear"></div>