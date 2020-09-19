<nav id="menu">
  <ul class="links">
    <li><a class="{{ Request::path() === '/' ? 'active-link' : '' }}" href="/">Home</a></li>
    <li><a class="{{ Request::path() === 'landing' ? 'active-link' : '' }}" href="/landing">Landing</a></li>
    <li><a class="{{ Request::path() === 'generic' ? 'active-link' : '' }}" href="/generic">Generic</a></li>
    <li><a class="{{ Request::path() === 'elements' ? 'active-link' : '' }}" href="/elements">Elements</a></li>
  </ul>
  <ul class="actions stacked">
    <li><a href="#" class="button primary fit">Get Started</a></li>
    <li><a href="#" class="button fit">Log In</a></li>
  </ul>
</nav>