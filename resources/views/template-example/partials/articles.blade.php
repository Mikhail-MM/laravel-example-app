@foreach ($articles as $article)
  <section>
    <a href="generic" class="image">
      <img src="images/pic10.jpg" alt="" data-position="25% 25%" />
    </a>
    <div class="content">
      <div class="inner">
        <header class="major">
          <h3>{{ $article->title }}</h3>
        </header>
        <p>{{ $article->body }}</p>
        <ul class="actions">
          <li><a href={{ "/article/{$article->id}" }} class="button">Learn more</a></li>
        </ul>
      </div>
    </div>
  </section>
@endforeach