<nav id="offcanvas" uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>

    <ul class="uk-nav uk-nav-center uk-margin-xlarge-top">
      <li class="ty-nav-item active">
        <a href="{{route('home')}}">
          <small>Home</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('home')}}#sobre-mim-biografia">
          <small>Biografia</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('home')}}#o-que-defendo">
          <small>O que defendo</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('home')}}#entenda-mais">
          <small>Entenda mais</small>
        </a>
      </li>
      {{-- <li class="ty-nav-item">
        <a href="{{route('home')}}">
          <small>Atividade Parlamentar</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('home')}}#ty-cards-area">
          <small>Projetos</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('home')}}#acompanhe-videos">
          <small>Videos</small>
        </a>
      </li>
      <li class="ty-nav-item">
        <a href="{{route('contato')}}">
          <small>Contato</small>
        </a>
      </li> --}}
    </ul>

    <div id="ty-social-media" class="uk-margin-large-top">
      <a class="ty-tc1" href="https://www.facebook.com/vereadorthiagoyamamoto/" target="_blank"
      uk-icon="icon: facebook; ratio: 1.5"></a>
      <a class="ty-tc1" href="https://www.instagram.com/vereadorthiagoyamamoto/?igshid=ogh1v0pt2yw3" target="_blank"
        uk-icon="icon: instagram; ratio: 1.5"></a>
      <a class="ty-tc1" href="https://www.youtube.com/channel/UCSku-XFs_VomTllqtluNCJg" target="_blank"
        uk-icon="icon: youtube; ratio: 1.5"></a>
      <a class="ty-tc1" href="#modal-articles-list" uk-icon="icon: info; ratio: 1.5"
        uk-tooltip="title: Artigos; pos: bottom" uk-toggle></a>
    </div>

  </div>
</nav>
