@foreach ($posts as $post)
    <div class="post-preview" style="position: absolute;">
            <div>
                <h2 class="post-title">
                    <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                </h2>

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

            <div style="position:relative; float:right;margin-left: 10px;">
                <a href="{{ $post->url($tag) }}"><img style=" height: 150px;width: auto;" src="{{$post->page_image}}" alt="{{ $post->title }}"></a>
           </div>

    </div>
    <hr>
@endforeach