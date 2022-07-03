@extends('_layouts.main')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="blog-post-header columns is-centered">
                <div class="column is-7"> 
                    <h1 class="has-text-centered semibold is-size-2 pt-6">{{ $page->title }}</h1>
                    <p class="body2 has-text-centered has-text-grey"> 
                        <a href="https://github.com/mohamed-zezo" target="_blank">{{ $page->author }}</a>
                         .. بتاريخ: {{ date('d/m/Y', $page->date) }}
                    </p>
                </div>
            </div>            
            <div class="columns">
                <div class="column is-three-fifths is-offset-one-fifth">
                    @yield('content')
                </div>
            </div>
        </div>
    </article>

    <!-- Footer -->
    @include('_partials/footer')
@endsection