@extends('_layouts.main')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <section class="section">
        <div class="container">
          <div class="columns">
              <div class="column is-three-fifths is-offset-one-fifth">
                  @yield('head')
              </div>
          </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-three-fifths is-offset-one-fifth">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('_partials/footer')
@endsection