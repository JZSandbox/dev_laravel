<nav id="mainNav">
    <div class="container center-nav">
        <div class="nav-left">
            <ul>
                <li class="nav-item">
                    <a class="nav-link-cstm {{ (request()->is('/') ? 'active' : '') }}" href="{{ route('home') }}">Me</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link-cstm {{ (request()->is('projects') ? 'active' : '')  }}" href="{{ route('projects') }}">Projects</a>
                </li>
            </ul>
        </div>
        <div class="nav-mid">
            <div class="nav-mid-brand">
                <img src="{{ asset('/assets/img/logo_fryderyk.svg') }}" alt="Fryderyk Szafarczyk - Logo">
            </div>
        </div>
        <div class="nav-right">
            <div class="nav-right-icon-box">
                <a href="https://github.com/JZSandbox"><img src="{{ asset('/assets/img/icons/github.svg') }}" alt="GitHub JZSandbox"></a>
                <a href="https://de.linkedin.com/in/fryderyk-s"><img src="{{ asset('/assets/img/icons/linkin.svg') }}" alt="Fryderyk Szafarczyk LinkedIn"></a>
                <a href="https://www.xing.com/profile/Fryderyk_Szafarczyk"><img src="{{ asset('/assets/img/icons/xing.svg') }}" alt="Fryderyk Szafarczyk Xing"></a>
                <a href="https://www.instagram.com/fryderyk096/"><img src="{{ asset('/assets/img/icons/insta.svg') }}" alt="Fryderyk Szafarczyk Instagram"></a>
            </div>
        </div>
    </div>
</nav>
<nav id="mobile-nav-bar">
    <div class="navbar_mobile">
        <div class="navbar_mobile_ul">
            <div class="navbar_mobile_li">
                <a href="" class="navbar_mobile_item">
                    <img src="assets/img/icons/mobileicons/icon_mobile_instagram.svg" alt="Fryderyk Szafarczyk | Instagram">
                </a>
            </div>
            <div class="navbar_mobile_li">
                <a href="" class="navbar_mobile_item">
                    <img src="assets/img/icons/mobileicons/icon_mobile_xing.svg" alt="Fryderyk Szafarczyk | Xing">
                </a>
            </div>
            <div class="navbar_mobile_li">
                <a href="" class="navbar_mobile_item">
                    <img src="assets/img/icons/mobileicons/icon_mobile_menu.svg" class="eight" alt="Infinte System">
                </a>
            </div>
            <div class="navbar_mobile_li">
                <a href="" class="navbar_mobile_item">
                    <img src="assets/img/icons/mobileicons/icon_mobile_linkedin.svg" alt="Fryderyk Szafarczyk | Linkedin">
                </a>
            </div>
            <div class="navbar_mobile_li">
                <a href="" class="navbar_mobile_item">
                    <img src="assets/img/icons/mobileicons/icon_mobile_github.svg" alt="Fryderyk Szafarczyk | GitHub">
                </a>
            </div>
        </div>
    </div>
</nav>
