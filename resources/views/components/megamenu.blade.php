<ul class="menu">
    <li class="has-dropdown">
        <a href="#">
            Home
        </a>
        <ul class="mega-menu">
            <li>
                <ul>
                    <li>
                        @if (Request::path()==='/')
                            <span class="title">Concepts</span>
                        @else
                            <a href="/">Concepts</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='adventure-travel')
                            <span class="title">Adventure Travel</span>
                        @else
                            <a href="/adventure-travel">Adventure Travel</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='agency')
                            <span class="title">Agency</span>
                        @else
                            <a href="/agency">Agency</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='agency-2')
                            <span class="title">Agency 2</span>
                        @else
                            <a href="/agency-2">Agency 2</a>
                        @endif
                        <span class="label">New!</span>
                    </li>
                    <li>
                        @if (Request::path()==='app-landing')
                            <span class="title">App Landing</span>
                        @else
                            <a href="/app-landing">App Landing</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='app-landing-2')
                            <span class="title">App Landing 2</span>
                        @else
                            <a href="/app-landing-2">App Landing 2</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='capital-firm')
                            <span class="title">Capital Firm</span>
                        @else
                            <a href="/capital-firm">Capital Firm</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='fashion')
                            <span class="title">Fashion</span>
                        @else
                            <a href="/fashion">Fashion</a>
                        @endif
                    </li>
                    <li>
                        @if (Request::path()==='fitness')
                            <span class="title">Fitness</span>
                        @else
                            <a href="/fitness">Fitness</a>
                        @endif
                    </li>
                    <li>
                        <a href="/restaurant">Restaurant</a>
                    </li>
                    <li>
                        <a href="/music">Music</a>
                    </li>
                    <li>
                        <a href="/event">Event / Seminar</a>
                    </li>
                    <li>
                        <a href="/architecture">Architecture</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <a href="/photography">Photography</a>
                    </li>
                    <li>
                        <a href="/photography-2">Ken Burns</a>
                    </li>
                    <li>
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="/property">Property Listing</a>
                    </li>
                    <li>
                        <a href="/resume">Resumé</a>
                    </li>
                    <li>
                        <a href="/winery">Winery</a>
                    </li>
                    <li>
                        <span class="title">Home Pages</span>
                    </li>
                    <li>
                        <a href="/">Home Classic</a>
                    </li>
                    <li>
                        <a href="/default-2">Home Layout 2</a>
                    </li>
                    <li>
                        <a href="/default-3">Home Layout 3</a>
                    </li>
                    <li>
                        <a href="/default-4">Home Layout 4</a>
                    </li>
                    <li>
                        <a href="/default-5">Home Layout 5</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="has-dropdown">
        <a href="#">
            Pages
        </a>
        <ul class="mega-menu">
            <li>
                <ul>
                    <li>
                        <span class="title">Inner Pages</span>
                    </li>
                    <li>
                        <a href="/about-us-1">About Us 1</a>
                    </li>
                    <li>
                        <a href="/about-us-2">About Us 2</a>
                    </li>
                    <li>
                        <a href="/about-us-3">About Us 3</a>
                    </li>
                    <li>
                        <a href="/services-1">Services 1</a>
                    </li>
                    <li>
                        <a href="/services-2">Services 2</a>
                    </li>
                    <li>
                        <a href="/services-3">Services 3</a>
                    </li>
                    <li>
                        <a href="/contact-1">Contact 1</a>
                    </li>
                    <li>
                        <a href="/contact-2">Contact 2</a>
                    </li>
                    <li>
                        <a href="/contact-3">Planner</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <span class="title">Utility Pages</span>
                    </li>
                    <li>
                        <a href="/page-login">Login</a>
                    </li>
                    <li>
                        <a href="/page-register">Register</a>
                    </li>
                    <li>
                        <a href="/page-coming-soon">Coming Soon</a>
                    </li>
                    <li>
                        <a href="/page-faq">FAQ</a>
                    </li>
                    <li>
                        <a href="/page-confirmation">Confirmation</a>
                    </li>
                    <li>
                        <a href="/page-countdown">Countdown</a>
                    </li>
                    <li>
                        <a href="/page-countdown-2">Countdown 2</a>
                    </li>
                    <li>
                        <a href="/page-404">404 - Error</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="has-dropdown">
        <a href="#">
            Elements
        </a>
        <ul class="mega-menu">
            <li>
                <ul>
                    <li>
                        <span class="title">Elements</span>
                    </li>
                    <li>
                        <a href="elements-buttons.html">
                            <i class="ti-link"></i> Buttons</a>
                    </li>
                    <li>
                        <a href="elements-tabs.html">
                            <i class="ti-layout-tab"></i> Tabbed Content</a>
                    </li>
                    <li>
                        <a href="elements-progress.html">
                            <i class="ti-rocket"></i> Progress Bars</a>
                    </li>
                    <li>
                        <a href="elements-accordions.html">
                            <i class="ti-layout-accordion-separated"></i> Accordions</a>
                    </li>
                    <li>
                        <a href="elements-alerts.html">
                            <i class="ti-flag-alt"></i> Alerts</a>
                    </li>
                    <li>
                        <a href="elements-form-inputs.html">
                            <i class="ti-pencil-alt"></i> Form Inputs</a>
                    </li>
                    <li>
                        <a href="elements-countdown.html">
                            <i class="ti-alarm-clock"></i> Countdowns</a>
                    </li>
                    <li>
                        <a href="elements-modals.html">
                            <i class="ti-layout-slider-alt"></i> Modals</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <span class="title">Elements</span>
                    </li>
                    <li>
                        <a href="elements-pricing.html">
                            <i class="ti-money"></i> Pricing Tables</a>
                    </li>
                    <li>
                        <a href="elements-icon-boxes.html">
                            <i class="ti-eye"></i> Icon Boxes</a>
                    </li>
                    <li>
                        <a href="elements-widgets.html">
                            <i class="ti-layout-media-right"></i> Widgets</a>
                    </li>
                    <li>
                        <a href="elements-typography.html">
                            <i class="ti-text"></i> Typography</a>
                    </li>
                    <li>
                        <a href="elements-lists.html">
                            <i class="ti-list"></i> Lists</a>
                    </li>
                    <li>
                        <a href="elements-grid.html">
                            <i class="ti-view-grid"></i> Grid Structure</a>
                    </li>
                    <li>
                        <a href="elements-textimage.html">
                            <i class="ti-layout-list-large-image"></i> Text &amp; Image</a>
                    </li>
                    <li>
                        <a href="elements-intros.html">
                            <i class="ti-microphone"></i> Intro Sections</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <span class="title">Elements</span>
                    </li>
                    <li>
                        <a href="elements-titles.html">
                            <i class="ti-layout-cta-left"></i> Titles Left</a>
                    </li>
                    <li>
                        <a href="elements-titles-center.html">
                            <i class="ti-layout-cta-center"></i> Titles Center</a>
                    </li>
                    <li>
                        <a href="elements-video.html">
                            <i class="ti-video-clapper"></i> Video Inline</a>
                    </li>
                    <li>
                        <a href="elements-video-bg.html">
                            <i class="ti-video-clapper"></i> Video BG</a>
                    </li>
                    <li>
                        <a href="elements-video-slider.html">
                            <i class="ti-video-clapper"></i> Video Slider</a>
                    </li>
                    <li>
                        <a href="elements-galleries.html">
                            <i class="ti-gallery"></i> Image Galleries</a>
                    </li>
                    <li>
                        <a href="elements-parallax.html">
                            <i class="ti-layers"></i> Parallax</a>
                    </li>
                    <li>
                        <a href="elements-nav-light.html">
                            <i class="ti-menu-alt"></i> Nav Styles</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="has-dropdown">
        <a href="#">
            Portfolio
        </a>
        <ul>
            <li class="has-dropdown">
                <a href="#">
                    Contained
                </a>
                <ul>
                    <li>
                        <a href="portfolio-grid-2col.html">
                            2 Columns
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-grid.html">
                            3 Columns
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-grid-4col.html">
                            4 Columns
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">
                    Wide
                </a>
                <ul>
                    <li>
                        <a href="portfolio-wide-2col.html">
                            2 Columns
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-wide.html">
                            3 Columns
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-wide-4col.html">
                            4 Columns
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="portfolio-parallax.html">
                    Parallax
                </a>
            </li>
            <li class="has-dropdown">
                <a href="#">
                    Single
                </a>
                <ul>
                    <li>
                        <a href="portfolio-single-1.html">
                            Case Study 1
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-single-2.html">
                            Case Study 2
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-single-3.html">
                            Case Study 3
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-single-4.html">
                            Case Study 4
                        </a>
                    </li>
                    <li>
                        <a href="portfolio-single-5.html">
                            Case Study 5
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="has-dropdown">
        <a href="#">
            Shop
        </a>
        <ul>
            <li class="has-dropdown">
                <a href="#">
                    Shop Layout
                </a>
                <ul>
                    <li>
                        <a href="shop-sidebar.html">
                            Sidebar Left
                        </a>
                    </li>
                    <li>
                        <a href="shop-sidebar-right.html">
                            Sidebar Right
                        </a>
                    </li>
                    <li>
                        <a href="shop-fullwidth-4col.html">
                            4 Columns
                        </a>
                    </li>
                    <li>
                        <a href="shop-fullwidth.html">
                            3 Columns
                        </a>
                    </li>
                    <li>
                        <a href="shop-fullwidth-2col.html">
                            2 Columns
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">
                    Product Single
                </a>
                <ul>
                    <li>
                        <a href="shop-product-sidebar-left.html">
                            Sidebar Left
                        </a>
                    </li>
                    <li>
                        <a href="shop-product-sidebar.html">
                            Sidebar Right
                        </a>
                    </li>
                    <li>
                        <a href="shop-product-fullwidth.html">
                            No Sidebar
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="shop-cart.html">
                    Cart
                </a>
            </li>
            <li>
                <a href="shop-checkout.html">
                    Checkout
                </a>
            </li>
        </ul>
    </li>
    <li class="has-dropdown">
        <a href="#">
            Blog
        </a>
        <ul>
            <li class="has-dropdown">
                <a href="#">
                    Listing
                </a>
                <ul>
                    <li>
                        <a href="blog-sidebar.html">
                            Sidebar Left
                        </a>
                    </li>
                    <li>
                        <a href="blog-sidebar-right.html">
                            Sidebar Right
                        </a>
                    </li>
                    <li>
                        <a href="blog-no-sidebar.html">
                            No Sidebar
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">
                    Masonry
                </a>
                <ul>
                    <li>
                        <a href="blog-masonry-sidebar.html">
                            Sidebar Left
                        </a>
                    </li>
                    <li>
                        <a href="blog-masonry-sidebar-right.html">
                            Sidebar Right
                        </a>
                    </li>
                    <li>
                        <a href="blog-masonry.html">
                            3 Columns
                        </a>
                    </li>
                    <li>
                        <a href="blog-masonry-2col.html">
                            2 Columns
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">
                    Single
                </a>
                <ul>
                    <li>
                        <a href="blog-single-sidebar.html">
                            Sidebar Left
                        </a>
                    </li>
                    <li>
                        <a href="blog-single-sidebar-right.html">
                            Sidebar Right
                        </a>
                    </li>
                    <li>
                        <a href="blog-single-no-sidebar.html">
                            No Sidebar
                        </a>
                    </li>
                    <li>
                        <a href="blog-single-disqus.html">
                            Disqus Comments
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blog-simple-feed.html">
                    Simple Feed
                </a>
            </li>
        </ul>
    </li>
</ul>
