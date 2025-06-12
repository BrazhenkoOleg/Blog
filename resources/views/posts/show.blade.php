@extends('layouts.main')

@section('content')
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{ $post->created_at->translatedFormat('d F, Y') }} • {{ $post->created_at->format('H:i') }} • {{ $post->category->title }} • {{ $post->comments->count() }} Комментария</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ Storage::url($post->main_image) }}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    {!! $post->content !!}
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="py-3">
                    @auth()
                        <form action="{{ route('posts.likes.store', $post->id) }}" method="POST">
                            @csrf
                            <span>{{ $post->liked_users_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa-{{ auth()->user()->likedPosts->contains($post->id) ? 'solid' : 'regular'}} fa-heart"></i>
                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div>
                            <span>
                                {{ $post->liked_users_count }}
                            </span>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    @endguest
                </section>
                @if ($relatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        <div class="row">
                            @foreach ($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ Storage::url($relatedPost->preview_image) }}" alt="related post" class="post-thumbnail">
                                    <p class="post-category">{{ $relatedPost->category->title }}</p>
                                    <a href="{{ route('posts.show', $relatedPost->id) }}" class="blog-post-permalink">
                                        <h5 class="post-title">{{ $relatedPost->title }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
                <section class="comment-list mb-6">
                    <h2 class="section-title mb-4" data-aos="fade-up">Комментарии ({{ $post->comments->count() }})</h2>
                    @foreach ($post->comments as $comment)
                        <div class="comment-text mb-3">
                            <span class="username">
                            <div>
                                <strong>{{ $comment->user->name }}</strong>
                            </div>
                            <span class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                            </span><!-- /.username -->
                            {{ $comment->message }}
                        </div>
                    @endforeach
                </section>
                @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Добавить комментарий</h2>
                        <form action="{{ route('posts.comment.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Комментарий</label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Напишите комментарий" rows="10"></textarea>
                                </div>
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Добавить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                @endauth
            </div>
        </div>
    </div>
</main>
@endsection