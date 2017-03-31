@foreach ($posts as $post)
    <div class="post-preview">
            <div>
                <h2 class="post-title">
                    <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                </h2>

                <p class="post-meta">
                    @unless( $post->tags->isEmpty())
                        {!! implode(' ', $post->tagLinks()) !!}
                    @endunless
                </p>  
                
                <p class="postSubtitle">
                    {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
                </p>
            </div>
            
            <div>
                <a href="{{ $post->url($tag) }}"><img style="width: 90%;"  src="{{$post->page_image}}" alt="{{ $post->title }}"></a>
            </div>
    </div>
    <hr>
@endforeach