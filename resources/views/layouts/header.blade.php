
        <!--========== END HEADER ==========-->
                <header id="section-header" class="header moto-section" data-widget="section" data-container="section">
                            <div data-css-name="moto-container_header_57b6cdf61" class="moto-widget moto-widget-container moto-container_header_57b6cdf61" data-widget="container" data-container="container"><div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-5 undefined" data-container="container"><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"><div data-grid-type="xs" class="moto-widget moto-widget-row row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-xs-1 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c18275" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/mt-0518-home-phone.png" class="moto-widget-image-picture lazyload" data-id="160" title=""  alt="" draggable="false">


            </div>
            </div></div><div class="moto-cell col-xs-11" data-container="container"><div data-spacing="sass" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_12"><a class="moto-link" data-action="url" target="_self" href="callto: #">1-555-333-5566</a><br></p></div></div></div></div></div></div></div><div class="moto-cell col-sm-6" data-container="container"><div data-grid-type="xs" class="moto-widget moto-widget-row row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-xs-1 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c184c4" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/mt-0518-home-location.png" class="moto-widget-image-picture lazyload" data-id="154" title=""  alt="" draggable="false">
            </div>
            </div></div><div class="moto-cell col-xs-11" data-container="container"><div data-spacing="sass" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_12">San Francisco, CA 91604</p></div></div></div></div></div></div></div></div></div></div></div><div class="moto-cell col-sm-7" data-container="container"></div></div></div></div></div>
                    <div data-moto-sticky="{ }" data-css-name="moto-container_header_57b6cf462" class="moto-widget moto-widget-container moto-container_header_57b6cf462  navbar-fixed-top" data-widget="container" data-container="container" ><div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-spacing="sasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_1"><a class="moto-link" data-id="1" data-action="page" href="/" style="font-family:'Lobster',cursive;font-size:1.05em;     background-color: transparent;   text-shadow: 1px 1px 1px rgba(0,0,0,0.7);">EquineIntel</a><br></p></div></div></div><div class="moto-cell col-sm-6" data-container="container"><div data-widget-id="wid__menu__59a5189c19c1e" class="moto-widget moto-widget-menu moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-preset="default" data-widget="menu">
            <a href="#" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i></a>
        <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">
            <li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
    <a href="/"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-submenu moto-link">HOME<span class="fa moto-widget-menu-link-arrow"></span></a>


        </li><li class="moto-widget-menu-item">
    <a href="#plans"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">PLANS</a>
        </li><li class="moto-widget-menu-item">
    <a href="#service"   data-action="blog.index" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">SERVICES</a>
        </li><li class="moto-widget-menu-item">
    <a href=""   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">CONTACTS</a>
        </li>
        @if (Auth::check())
                                    @if (Auth::guest())
                                        <li class="moto-widget-menu-item"><a class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link" href="{{ route('login') }}">SIGN IN</a></li>
                                    @else  
                                        <li class="dropdown moto-widget-menu-item">
                                            <a class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link" href="{{ route('logout') }} "onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                SIGN OUT
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </a>
                                        </li>
                                        <li class="moto-widget-menu-item"> <a href="#" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link"><span style="color: orange;">Hi</span> {{ Auth::user()->name }}</a></li>
                                    @endif
                                @else
                                    <li class="moto-widget-menu-item"><a class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link" href="{{ url('/login') }}">SIGN IN</a></li>
                                @endif        </ul>
    </div></div><div class="moto-cell col-sm-3" data-container="container"><div data-widget-id="wid__social_links__59a5189c1bc8a" class="moto-widget moto-widget-social-links moto-preset-default moto-align-right moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="social_links" data-preset="default">
        <ul class="moto-widget-social-links-list">
                                                        <li class="moto-widget-social-links-item">
                        <a href="http://facebook.com" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://gmail.com" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://twitter.com/" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://pinterest.com/" class="moto-widget-social-links-link moto-widget-social-links-link_pinterest" data-provider="pinterest" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://linkedin.com/" class="moto-widget-social-links-link moto-widget-social-links-link_linkedin" data-provider="linkedin" target="_blank"></a>
                    </li>
                                                                                        </ul>
    </div></div></div></div></div></div>                    