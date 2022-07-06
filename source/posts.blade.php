---
pagination:
    collection: posts
---
@extends('_layouts.page')

@section('head')
<div id="postsHead"  class="has-text-right">
    <h1 class="is-size-3">
        كتابات
    </h1>
    <p>المواضيع تشمل تطوير الويب وآراء شخصية وأشياء اخرى.</p>
</div>
@endsection

@section('content')
<div id="postsContent" class="container">
    @foreach ($pagination->items as $post)
    <article class="bd-post">
        <a class="bd-post-link" href="{{ $page->baseUrl }}{{ $post->getPath() }}">
            <div class="bd-post-body">
                <figure class="icon">
                    #
                </figure>
    
                <div class="bd-post-content">
                    <h2 class="title is-mediam-size is-secondary-color">
                        <p>{{ $post->title }}</p>
                    </h2>
                    <div class="subtitle is-muted">
                        <p>{{ $post->getExcerpt(125) }}</p>
                    </div>
                </div>
            </div>
        </a>
    </article>
    @endforeach
    <!-- Pager -->
    <div class="clearfix">
        @if ($previous = $pagination->previous)
            <a class="button is-dark is-pulled-left is-rtl" href="{{ $page->baseUrl }}{{ $previous }}">تدوينات تالية &larr; </a>
        @endif
        @if ($next = $pagination->next)
            <a class="button is-dark is-pulled-right is-rtl" href="{{ $page->baseUrl }}{{ $next }}"> &rarr; تدوينات سابقة</a>
        @endif
    </div>
</div>
@endsection
