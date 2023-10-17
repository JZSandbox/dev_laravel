<section id="hero">
    @include('homepage.master.navbar')
    <div class="hero-mid d-flex justify-content-center align-items-lg-center">
        <div class="container position-relative">
            <h1 class="text-center">Fryderyk Szafarczyk</h1>
            <p class="text-center intro_p">Web Developer & UI/UX Designer</p>
            <div class="hero-mid-box">
                <img src="{{ asset('/assets/img/icons/php.svg') }}" class="floating" alt="Logo PHP">
                <img src="{{ asset('/assets/img/icons/laravel.svg') }}" class="floating" alt="Logo Laravel">
                <img src="{{ asset('/assets/img/icons/css.svg') }}"  class="floating"alt="Logo CSS">
                <img src="{{ asset('/assets/img/icons/sass.svg') }}"  class="floating" alt="Logo SASS">
                <img src="{{ asset('/assets/img/icons/js.svg') }}"  class="floating" alt="Logo JS">
                <img src="{{ asset('/assets/img/icons/adobe.svg') }}" class="floating"  alt="Logo Adobe">
                <img src="{{ asset('/assets/img/icons/atom.svg') }}"  class="floating" alt="Logo Atom">
            </div>
        </div>
    </div>
    <div class="hero-bottom position-relative d-flex align-items-end">
        <a href="#intro" class="arrow-down">
            <span></span>
            <span class="material-icons floatXDown">keyboard_double_arrow_right</span>
        </a>
        <img src="{{ asset('/assets/img/bghero.svg')}}" class="bg_svg" alt="">
        <div class="hero-picture">
            <img src="{{ asset('/assets/img/index-removebg-preview.png')}}" alt="">
        </div>
    </div>
</section>
