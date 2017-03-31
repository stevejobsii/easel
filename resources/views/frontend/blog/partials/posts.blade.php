@foreach ($posts as $post)
    <div class="post-preview">
        <h2 class="post-title">
            <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
        </h2>

        <div><!-- 左边 -->
        <p class="post-meta">
            {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
            <br>
            @unless( $post->tags->isEmpty())
                {!! implode(' ', $post->tagLinks()) !!}
            @endunless
        </p>
        <p class="postSubtitle">
            {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
        </p>
        <p style="font-size: 13px"><a href="{{ $post->url($tag) }}">READ MORE...</a></p>
        </div>

        <div style="  position:absolute;right:5px;"><!-- 右边 -->
        <a href="{{ $post->url($tag) }}"><img src="{{$post->page_image}}" alt="{{ $post->title }}"></a>
        </div>

    </div>
    <hr>
@endforeach