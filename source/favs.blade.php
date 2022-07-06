---
pagination:
    collection: favs
    perPage: 15
---
@extends('_layouts.page')

@section('head')
<div id="postsHead"  class="has-text-right">
    <h1 class="is-size-3">
        الخزنه
    </h1>
    <p>تحتوى هذة الصفحة على العديد من صناع المحتوى المفضلين.</p>
</div>
@endsection

@section('content')
<div id="postsContent" class="container">
    @foreach ($pagination->items as $fav)
    <article class="bd-post">
        <a class="bd-post-link" href="{{ $fav->url }}" target="_blank">
            <div class="bd-post-body">
                <figure class="icon">
                    #
                </figure>
    
                <div class="bd-post-content">
                    <h2 class="title is-mediam-size is-secondary-color">
                        <p>{{ $fav->title }}</p>
                    </h2>
                    <div class="subtitle is-muted">
                        <p>{{ $fav->getExcerpt(125) }}</p>
                    </div>
                </div>
            </div>
        </a>
    </article>
    @endforeach
    <!-- Pager -->
    <div class="clearfix">
        @if ($previous = $pagination->previous)
            <a class="button is-dark is-pulled-left is-rtl" href="{{ $page->baseUrl }}{{ $previous }}">تالية &larr; </a>
        @endif
        @if ($next = $pagination->next)
            <a class="button is-dark is-pulled-right is-rtl" href="{{ $page->baseUrl }}{{ $next }}"> &rarr; سابقة</a>
        @endif
    </div>
</div>
@endsection
