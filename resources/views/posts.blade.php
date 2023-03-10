@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center"> {{ $title }} </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="\posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Searching" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid mt-3"
                        alt="{{ $posts[0]->category->image }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }} </a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-secondary">Read more...</a>
            </div>
        </div>



        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card" style="height:625px";>
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color:rgba(0, 0, 0, 0.562)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white  text-decoration-none">
                                    {{ $post->category->name }}</a>
                            </div>
                            <a href="/posts/{{ $post->slug }}">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3"
                                        alt="{{ $post->category->image }}">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="...">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><a
                                        href="/posts/{{ $post->slug }}"class="text-dark  text-decoration-none">{{ $post->title }}</a>
                                </h5>
                                <p>
                                    <small class="text-muted">
                                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                                            class="text-decoration-none">{{ $posts[0]->author->name }} </a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-secondary">Read
                                    More....</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-5">no posts found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
