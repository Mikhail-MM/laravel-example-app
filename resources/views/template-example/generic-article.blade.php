@extends('template-example/layout')

@section ('content')


  <!-- Main -->
    <div id="main" class="alt">

      <!-- One -->
        <section id="one">
          <div class="inner">
            <header class="major">
              <h1>{{ $article->title }}</h1>
            </header>
            <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
            <p>{{ $article->body }}</p>
            <div class="tags">
              @foreach ($article->tags as $tag) 
                @include('/template-example/partials/tag', [ 'tag' => $tag ])
              @endforeach
            </div>
          </div>
        </section>

    </div>
@endsection