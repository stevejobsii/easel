<div class="container">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
</div>

<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">SCROLL TO TOP</a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif