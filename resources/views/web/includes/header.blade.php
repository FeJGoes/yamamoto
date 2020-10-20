<header id="ty-header">
    <a id="ty-logo" href="{{route('home')}}">
        <img src="{{asset('images/logo.jpeg')}}" alt="logo">
    </a>

    <nav id="ty-navbar" class="uk-visible@m">
        <ul>
            <li class="ty-nav-item active">
                <a href="{{route('home')}}">
                    <small>Home</small>
                </a>
            </li>
            <li class="ty-nav-item">
                <a href="{{route('biografia')}}">
                    <small>Biografia</small>
                </a>
            </li>
            <li class="ty-nav-item">
                <a href="">
                    <small>O que defendo</small>
                </a>
            </li>
            <li class="ty-nav-item">
                <a href="">
                    <small>Atividade Parlamentar</small>
                </a>
            </li>
            <li class="ty-nav-item">
                <a href="">
                    <small>Videos</small>
                </a>
            </li>
            <li class="ty-nav-item">
                <a href="">
                    <small>Contato</small>
                </a>
            </li>
        </ul>
    </nav>

    <div id="ty-social-media" class="uk-visible@m">
        <a class="ty-tc1" href="https://www.facebook.com/vereadorthiagoyamamoto/" target="_blank" uk-icon="icon: facebook; ratio: 1.5"></a>
        <a class="ty-tc1" href="https://www.instagram.com/vereadorthiagoyamamoto/?igshid=ogh1v0pt2yw3" target="_blank" uk-icon="icon: instagram; ratio: 1.5"></a>
        <a class="ty-tc1" href="https://www.youtube.com/channel/UCSku-XFs_VomTllqtluNCJg" target="_blank" uk-icon="icon: youtube; ratio: 1.5"></a>
    </div>

    <span id="ty-burger-menu" class="burger two uk-hidden@m" uk-toggle="cls: activated">
        <span></span>
        <span></span>
        <span></span>
    </span>
</header>
