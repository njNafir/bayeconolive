<div class="widget">
    <div class="recent-post">
        <h5 class="font-weight-bold mb-4">Recent Posts</h5>

        @foreach(\App\Models\Blog::latest()->active()->limit(5)->get() as $blog)

            <div class="recent-main my-2">
                <div class="recent-img">
                    <a href="{{ action('WebController@blog_show', $blog->id )}}"><img src="{{ asset('/uploads/blogs/'. $blog->image )}}" alt=""></a>
                </div>
                <div class="info-img">
                    <a href="{{ action('WebController@blog_show', $blog->id )}}"><h6>{{ $blog->title }}</h6></a>
                    <p>{{ $blog->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach

    </div>
</div>