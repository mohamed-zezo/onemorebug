---
pagination:
    collection: posts
---
@extends('_layouts.page')

@section('head')
<div id="homeHead"  class="has-text-centered">
    <h1 class="is-size-3">
        مرحباً 👋,
        انا محمد .. مطور ويب من مصر 🇪🇬
    </h1>
    <p>كل ما يتم تدوينه هنا معتمد على رأيى الشخصى والتجارب المتكرره, فأعتذر مسبقاً عن اى اخطاء.</p>
</div>
@endsection

@section('content')
<div id="homeContent" class="container">
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
@endsection

</div>