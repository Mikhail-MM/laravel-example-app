@extends('template-example/layout')

@section ('content')

  <!-- Banner -->
  <!-- Note: The "styleN" class below should match that of the header element. -->
    <section id="banner" class="style2">
      <div class="inner">
        <span class="image">
          <img src="images/pic07.jpg" alt="" />
        </span>
        <header class="major">
          <h1>Landing</h1>
        </header>
        <div class="content">
          <p>Lorem ipsum dolor sit amet nullam consequat<br />
          sed veroeros. tempus adipiscing nulla.</p>
        </div>
      </div>
    </section>

  <!-- Main -->
    <div id="main">

      <!-- One -->
        <section id="one">
          <div class="inner">
            <header class="major">
              <h2>Sed amet aliquam</h2>
            </header>
            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna.</p>
          </div>
        </section>

      <!-- Two -->
      <section id="two" class="spotlights">
      
        <!-- PHP Driven DB Articles -->
        @include('template-example/partials/articles', [
          'articles' => $articles
        ])
        
      </section>

      <!-- Three -->
        <section id="three">
          <div class="inner">
            <header class="major">
              <h2>Massa libero</h2>
            </header>
            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
            <ul class="actions">
              <li><a href="generic" class="button next">Get Started</a></li>
            </ul>
          </div>
        </section>

    </div>
@endsection