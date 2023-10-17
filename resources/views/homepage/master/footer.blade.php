<footer>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <div class="footer_left">
                    <div class="footer_left_logo">
                        <img src="assets/img/logo_footer.svg" alt="">
                    </div>
                    <div class="footer_left_brand">
                        <span>Web Developer & UX/UI Designer</span>
                        <h3>Fryderyk Szafarczyk</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer_right">
                    <div class="footer_right_bigtext">
                        Lets Talk Together!
                    </div>
                    <div class="footer_right_sub">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="footer_left">
                    <div class="footer_left_brand">
                        <span>E-Mail:</span>
                        <h3>contact@fryderyk.dev</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <div class="footer_right footer_icon_right">
                    <div class="footer_right_sub footer_icons">
                        <a href="https://www.instagram.com/fryderyk096/"><img src="{{ asset('assets/img/icons/instagram_material.svg') }}" alt="Fryderyk Szafarczyk Instagram"></a>
                        <a href="https://www.xing.com/profile/Fryderyk_Szafarczyk"><img src="{{ asset('assets/img/icons/xing_material.svg') }}" alt="Fryderyk Szafarczyk Xing"></a>
                        <a href="https://de.linkedin.com/in/fryderyk-s"><img src="{{ asset('assets/img/icons/linkedin_material.svg') }}" alt="Fryderyk Szafarczyk LinkedIn"></a>
                        <a href="https://github.com/JZSandbox"><img src="{{ asset('assets/img/icons/github_material.svg') }}" alt="GitHub JZSandbox"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-footer"></div>
        <div class="row">
            <div class="col-md-6">
                <ul class="footer_ul">
                    <li class="footer_li">
                        <a href="#abitme" class="footer_li_link">About</a>
                        <a href="#latest_work_place" class="footer_li_link">Work</a>
                        <a href="#contact" class="footer_li_link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div class="footer_copyright">
                    <a href="@auth{{ route('dashboard') }} @endauth @guest{{ route('login') }}@endguest" class="footer_copy">(C) 2021 Fryderyk.dev</a>
                </div>
            </div>
        </div>
    </div>
</footer>
