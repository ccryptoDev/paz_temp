<header class="header">
    @if( request()->is('blog') || request()->is('master-practitioner') )
        <div class="header__bg">
            <picture class="header__bg__img">
                <source media="(max-width: 1024px)" srcset="{{asset('assets/img/template/headerBgMb.svg')}}">
                <source media="(min-width: 1025px)" srcset="{{asset('assets/img/template/headerBg.svg')}}">
                <img alt="" src="{{asset('assets/img/template/headerBg.svg')}}" alt="">
            </picture>
        </div>
    @endif
    <nav class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <div class="nav__logo">
                    <a class="nav__logo__link">
                        <img class="nav__logo__link__img" src="{{asset('assets/img/template/logo.svg')}}">
                        <img class="nav__logo__link__img nav__logo__link__img_mb" src="{{asset('assets/img/template/logo_light.svg')}}">
                    </a>
                </div>
                <div class="nav__menu">
                    <ul class="nav__menu__list">
                        <li class="nav__menu__item">
                            <a class="nav__menu__item__link">עלינו</a>
                        </li>
                        <li class="nav__menu__item">
                            <a class="nav__menu__item__link">אנשי קשר</a>
                        </li>
                        <li class="nav__menu__item">
                            <a class="nav__menu__item__link">תנאים</a>
                        </li>
                        <li class="nav__menu__item">
                            <a class="nav__menu__item__link">קורסים</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__buttons">
                    <a class="nav__profile" href=""><span>התחברות</span></a>
                    <a class="btn" href="">להתחיל</a>
                </div>
                <button class="nav__burger_link"></button>
                <button class="nav__burger_close"></button>
            </div>
        </div>
    </nav>
</header>
