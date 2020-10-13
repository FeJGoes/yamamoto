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

    <span id="ty-burger-menu" class="burger two uk-hidden@m" uk-toggle="cls: activated">
        <span></span>
        <span></span>
        <span></span>
    </span>
</header>
