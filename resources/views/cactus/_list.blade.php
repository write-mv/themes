@extends('themes::cactus._layout')
@section('content')
<section id="about">{{ $blog->description }}</section>

    <section id="writing">
        <span class="h1"><a href="https://themes.gohugo.io/theme/hugo-theme-cactus/posts">Writings</a></span>

        <span class="h2">Most recent</span>

        <ul class="post-list">
            @forelse ($posts as $post)
                <li class="post-item">
                    <div class="meta"><time itemprop="datePublished">{{ $post->published_date->format('Y-m-d') }}</time>
                    </div>
                    <span><a
                            href="{{ route('posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}">{{ $post->title }}</a></span>
                </li>

            @empty  

            <li class="post-item">
                <div class="meta">No publications found..</div>
            </li>

            @endforelse


        </ul>

    </section>
@endsection
