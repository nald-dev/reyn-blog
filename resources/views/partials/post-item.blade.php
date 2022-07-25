<div class="mb-5 pb-2 border-bottom">
    <h2>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>

    <p>
        By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in

        <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>        
    </p>

    <p>
        {{ $post->excerpt }}
    </p>
</div>