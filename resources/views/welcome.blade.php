@extends('layouts.main')

@section('content')
        @include('layouts.header')

        <style type="text/css">
    .recent-work .owl-carousel {
        margin-left: -10px;
    }
    .our-clients .owl-carousel {
        margin-left: -2px;
    }
    .recent-work .owl-carousel,
    .our-clients .owl-carousel {
        padding-top: 30px;
    }
    .recent-work .owl-buttons,
    .our-clients .owl-buttons {
        top: 0;
        left: -3px;
    }
    .our-clients .owl-buttons {
        left: -10px;
    }

    .testimonials-v1 {
        padding-top: 40px;
    }

    .recent-work .recent-work-item .fa {
        width: 36px;
        height: 36px;
        margin-top: -18px;
        font-size: 14px;
        padding: 12px;
    }

    .recent-news-inner {
        padding: 10px 15px 0;
    }
    .recent-work .recent-work-item .fa {
        width: 36px;
        height: 36px;
        margin-top: -18px;
        font-size: 14px;
        padding: 12px;
    }
.recent-work {
  position: relative;
}
.recent-work a:hover {
  text-decoration: none;
}
.recent-work h2,
.ecommerce .recent-work h2 {
  margin: 3px 0 5px;
}
.recent-work h2 a {
    color: #3e4d5c;
}
.recent-work h2 a:hover {
    color: #E02222;
}
.recent-work-item {
    padding-left: 10px;
}
.recent-work .owl-buttons {
    left: -74px;
    right: auto;
    top: 0;
}
.recent-work .recent-work-item a.recent-work-description {
    padding: 10px;
    display: block;
    background: #081b5d;
}
.recent-work .recent-work-item:hover a.recent-work-description {
    background: #E6400C;
    transition: all 0.9s ease;
    -o-transition: all 0.9s ease;
    -moz-transition: all 0.9s ease;
    -webkit-transition: all 0.9s ease;      
}
.recent-work .recent-work-item strong {
    color: white;
    display: block;
    font-size: 16px;
    font-weight: 300;

}
.recent-work .recent-work-item b {
    color: white;
    font-weight: 300;
    text-align: center;
}
.recent-work .recent-work-item:hover b,
.recent-work .recent-work-item:hover strong {
    color: #fff;
}
.recent-work .recent-work-item em {
    display: block;
    overflow: hidden;
    position: relative;
}
.recent-work .recent-work-item .fa {
    color: #fff;
    padding: 16px 30px 16px 18px;
    font-size: 16px;
    position: absolute;
    top: 50%;
    width: 47px;
    height: 47px;
    margin-top: -23.5px;
    border-radius: 47px;
    background: rgba(0,0,0,0.5);
    transition: all 0.6s ease;
    -o-transition: all 0.6s ease;
    -moz-transition: all 0.6s ease;
    -webkit-transition: all 0.6s ease;  
}
.recent-work .recent-work-item .fa:hover {
    color: #E02222;
}
.recent-work .recent-work-item .fa-link {
    left: -50px;
}
.recent-work .recent-work-item .fa-search {
    right: -50px;
}
.recent-work .recent-work-item:hover .fa-link {
    left: 15%;
}
.recent-work .recent-work-item:hover .fa-search {
    right: 15%;
}
</style>
                <section id="section-content" class="content page-1 moto-section" data-widget="section" data-container="section">
                            <div data-css-name="moto-container_content_57b6d0d43" class="moto-widget moto-widget-container moto-container_content_57b6d0d43" data-widget="container" data-container="container"><div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container">

<!--  -->

<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><div style="height: 50px"></div></div></div><div data-animation="fadeIn" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto wow fadeIn" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_4" style="font-family:'Lobster',cursive; font-style:italic; text-shadow: 1px 1px 1px rgba(0,0,0,0.7);text-align: center;">Equine Intel<br></p></div></div>
    <!--                         
                            <div class="moto-widget moto-widget-spacer moto-preset-default                     moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="lama" data-visible-on="mobile-v">
    
</div> -->
<div style="padding-bottom: 3.5%"></div>
<div data-spacing="aama" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_6" style="    text-shadow: 1px 1px 1px rgba(0,0,0,0.7); font-family:Roboto Slab, sans-serif;text-align: center; text-transform: uppercase;">Sophisticated handicapping In less Than 30 Seconds!<br></p></div></div></div></div></div></div><div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-2 undefined" data-container="container"></div><div class="moto-cell col-sm-8" data-container="container"><div data-spacing="alml" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-large moto-spacing-bottom-medium moto-spacing-left-large" data-widget="text" data-preset="default"></div>
<div class="row">
<ul style="margin-left: 30%;">

<li style="float: left; padding-left: 0px;padding-right: 20px;">
<div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button" style="padding-top: 0px;padding-bottom: 10px;">
            <a href="/test"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">START YOUR FREE TRIAL</span></a>
            
    </div>
</li>
<li style="float: left;">
    <div data-widget-id="wid__button__59a5189c1cb8e" class="moto-widget moto-widget-button moto-preset-2 moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto " data-widget="button" style="padding-bottom: 10px;">
            <a href="/"   data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Learn More</span></a>
    </div>
    </li>
</ul>
</div> <div style="padding-bottom: 2.5%;">

</div>
 
<div class="row">

    <ul style="margin-left: 34%;">

    <li style="float: left; padding-left: 0px;padding-right: 20px;">
    <div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button" style="padding-top: 0px;padding-bottom: 10px;">
                <a href="{{ url('/login/facebook') }}"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><i class="fa fa-facebook-f"></i> <span class="moto-widget-button-label">acebook</span></a>
                
        </div>
    </li>
    <li style="float: left; padding-left: 30px;">
    <div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button" style="padding-top: 0px;padding-bottom: 10px;">
                <a href="{{ url('/login/google') }}"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><i class="fa fa-google"></i> <span class="moto-widget-button-label">oogle</span></a>
                
        </div>
        </li>
    </ul>
</div>
<div style="padding-bottom: 17%;">
    
</div>

<div class="row recent-work">
<div class="col-sm-2">
</div>
                        
              <div class="recent-work-item">
                <em>
                  <img src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/tag1.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="/test"><i class="fa fa-link"></i></a>
                  <a href="#plans" class="fancybox-button" title="Free Trial" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>FREE TRIAL</strong>
                  <b>Price: FREE</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/tag2.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="/test"><i class="fa fa-link"></i></a>
                  <a href="#plans" class="fancybox-button" title="Daily Pass" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>DAILY PASS</strong>
                  <b>Price: $11.99</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/tag3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="/test"><i class="fa fa-link"></i></a>
                  <a href="#plans" class="fancybox-button" title="Weekly Pass" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>WEEKLY PASS</strong>
                  <b>Price: $14.99</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/tag4.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="/test"><i class="fa fa-link"></i></a>
                  <a href="#plans" class="fancybox-button" title="Monthly Pass" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>MONTHLY PASS</strong>
                  <b>Price: $49.99</b>
                </a>
              </div>
                  
   
</div>
    </div><div class="moto-cell col-sm-2" data-container="container"></div></div></div></div>
<!-- 
    <div class="moto-widget moto-widget-spacer moto-preset-default                  moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="lama" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:40px"></div>
</div> -->

</div>




<div data-css-name="moto-container_content_57b6db728" class="moto-widget moto-widget-container moto-container_content_57b6db728" data-widget="container" data-container="container"  id="plans">
<div class="moto-widget moto-widget-row row-fixed" data-widget="row">
<div class="container-fluid">
<div class="row">
<div class="moto-cell col-sm-12" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;">SUBSCRIPTION PLANS</p></div></div><div class="moto-widget moto-widget-divider moto-preset-default moto-align-center        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="divider_horizontal" data-divider-type="horizontal" data-preset="default" data-width="10" data-animation="" data-spacing="aama" data-align="{&quot;desktop&quot;:&quot;center&quot;,&quot;tablet&quot;:&quot;&quot;,&quot;mobile-v&quot;:&quot;&quot;,&quot;mobile-h&quot;:&quot;&quot;}">
    <hr class="moto-widget-divider-line" style="width:10%">
</div><div class="moto-widget moto-widget-spacer moto-preset-default              moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="maaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div></div></div></div></div><div class="moto-widget moto-widget-row row-fixed row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div data-bgcolor-class="moto-bg-color2_4" class="moto-cell col-sm-6 undefined moto-bg-color2_4" data-container="container"><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1d599" class="moto-widget moto-widget-image moto-preset-3 moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/service1.jpg" class="moto-widget-image-picture lazyload" data-id="170" title=""  alt="" draggable="false">
            </div>
            </div></div><div class="moto-cell col-sm-6" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default              moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div><div data-spacing="msss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_8"><a class="moto-link" data-action="url" target="_self" data-cke-saved-href="#" href="#">SIGN UP FOR TRIAL</a></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_normal">PRICE: $0.00</p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_9">One Week Free Trial - Email info@equineintel.com to Sign Up!<br></p></div></div><div data-widget-id="wid__social_links__59a5189c1d737" class="moto-widget moto-widget-social-links moto-preset-2 moto-align-left moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small " data-widget="social_links" data-preset="2">
        <ul class="moto-widget-social-links-list">
                                                        <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter" target="_blank"></a>
                    </li>
                                                                                                                                                </ul>
    </div></div></div></div></div></div><div data-bgcolor-class="moto-bg-color3_3" class="moto-cell col-sm-6 moto-bg-color3_3" data-container="container"><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1d90e" class="moto-widget moto-widget-image moto-preset-3 moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img src="../../../mt-demo/59100/59143/mt-content/uploads/2016/08/service2.jpg" class="moto-widget-image-picture lazyload" data-id="171" title=""  alt="" draggable="false">
            </div>
            </div></div><div class="moto-cell col-sm-6" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default    moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div><div data-spacing="msss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_8"><a class="moto-link" data-action="url" target="_self" href="#">DAILY PASS PLAN</a><br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_normal">PRICE: $11.99<br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_9">Pay for a day and access almost every track in the U.S. When you love it, your customized settings will be there when you come back!<br></p></div></div><div data-widget-id="wid__social_links__59a5189c1da9c" class="moto-widget moto-widget-social-links moto-preset-2 moto-align-left moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small " data-widget="social_links" data-preset="2">
        <ul class="moto-widget-social-links-list">
                                                        <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter" target="_blank"></a>
                    </li>
                                                                                                                                                </ul>
    </div></div></div></div></div></div></div></div></div><div class="moto-widget moto-widget-row row-fixed row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div data-bgcolor-class="moto-bg-color3_3" class="moto-cell col-sm-6 undefined moto-bg-color3_3" data-container="container"><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1dc45" class="moto-widget moto-widget-image moto-preset-3 moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img src="../../../mt-demo/59100/59143/mt-content/uploads/2016/08/service3.jpg" class="moto-widget-image-picture lazyload" data-id="172" title=""  alt="" draggable="false">
            </div>
            </div></div><div class="moto-cell col-sm-6" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default    moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div><div data-spacing="msss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_8"><a class="moto-link" data-action="url" target="_self" href="#">WEEKEND PLAN</a><br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_normal">PRICE: $14.99<br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_9">Purchase access for a Weekend for every track offered in the U.S. (International tracks coming soon!!)<br></p></div></div><div data-widget-id="wid__social_links__59a5189c1de16" class="moto-widget moto-widget-social-links moto-preset-2 moto-align-left moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small " data-widget="social_links" data-preset="2">
        <ul class="moto-widget-social-links-list">
                                                        <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter" target="_blank"></a>
                    </li>
                                                                                                                                                </ul>
    </div></div></div></div></div></div><div data-bgcolor-class="moto-bg-color2_4" class="moto-cell col-sm-6 moto-bg-color2_4" data-container="container"><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1dfc4" class="moto-widget moto-widget-image moto-preset-3 moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img src="../../../mt-demo/59100/59143/mt-content/uploads/2016/08/service4.jpg" class="moto-widget-image-picture lazyload" data-id="173" title=""  alt="" draggable="false">
            </div>
            </div></div><div class="moto-cell col-sm-6" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default    moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div><div data-spacing="msss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_8"><a class="moto-link" data-action="url" target="_self" href="#">MONTHLY PLAN</a><br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_normal">PRICE: $49.99<br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_9">Access all races at all tracks available in the United States and Canada for one month. Benefits - Custom factor creation; Team collaboration - Share picks and handicap as a team;</p></div></div><div data-widget-id="wid__social_links__59a5189c1e138" class="moto-widget moto-widget-social-links moto-preset-2 moto-align-left moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small " data-widget="social_links" data-preset="2">
        <ul class="moto-widget-social-links-list">
                                                        <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus" target="_blank"></a>
                    </li>
                                                                                    <li class="moto-widget-social-links-item">
                        <a href="http://demolink.motocms.com/" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter" target="_blank"></a>
                    </li>
                                                                                                                                                </ul>
    </div></div></div></div></div></div></div></div></div><div class="moto-widget moto-widget-spacer moto-preset-default           moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div></div>        
<!--
<div class="moto-widget moto-widget-row row-fixed" id ="service" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;">Services</p></div></div><div class="moto-widget moto-widget-divider moto-preset-default moto-align-center               moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="divider_horizontal" data-divider-type="horizontal" data-preset="default" data-width="9" data-animation="" data-spacing="aala" data-align="{&quot;desktop&quot;:&quot;center&quot;,&quot;tablet&quot;:&quot;&quot;,&quot;mobile-v&quot;:&quot;&quot;,&quot;mobile-h&quot;:&quot;&quot;}">
    <hr class="moto-widget-divider-line" style="width:9%">
</div></div></div></div></div><div class="moto-widget moto-widget-row row-fixed row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-css-name="moto-container_content_57b6d7664" class="moto-widget moto-widget-container moto-container_content_57b6d7664" data-widget="container" data-container="container"><div data-spacing="mala" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_5" style="text-align: center;">FREE TRIAL</p><p class="moto-text_system_5" style="text-align: center;">SIGN UP</p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default           moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:310px"></div>
</div><div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="/test"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Subscribe Now</span></a>
            
    </div></div></div><div class="moto-cell col-sm-3" data-container="container"><div data-css-name="moto-container_content_57b6d9c15" class="moto-widget moto-widget-container moto-container_content_57b6d9c15" data-widget="container" data-container="container"><div data-spacing="mala" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_5" style="text-align: center;">DAILY PASS<br>PLAN<br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default           moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:310px"></div>
</div>
<div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="/test"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Subscribe Now</span></a>
            
    </div>


    <div data-widget-id="wid__button__59a5189c1d175" class="moto-widget moto-widget-button moto-preset-2 moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto " data-widget="button">
            <a href="programs/index.html"   data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">PROGRAM DETAILS</span></a>

    </div>

    </div></div><div class="moto-cell col-sm-3" data-container="container"><div data-css-name="moto-container_content_57b6d9fb6" class="moto-widget moto-widget-container moto-container_content_57b6d9fb6" data-widget="container" data-container="container"><div data-spacing="mala" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_5" style="text-align: center;">WEEKEND<br>PASS<br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default           moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:310px"></div>
</div><div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="/test"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Subscribe Now</span></a>
            
    </div></div></div><div class="moto-cell col-sm-3" data-container="container"><div data-css-name="moto-container_content_57b6da327" class="moto-widget moto-widget-container moto-container_content_57b6da327" data-widget="container" data-container="container"><div data-spacing="mala" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_5" style="text-align: center;">MONTHLY<br>PLAN<br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default           moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:310px"></div>
</div><div data-widget-id="wid__button__59a5189c1c92d" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="/test"   data-action="url" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Subscribe Now</span></a>
            
    </div></div></div></div></div></div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default              moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="mama" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div></div></div></div></div>
!-->
<div data-css-name="moto-container_content_57b6e4dd14" class="moto-widget moto-widget-container moto-container_content_57b6e4dd14" data-widget="container" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default         moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div><div class="moto-widget moto-widget-row row-fixed row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div data-css-name="moto-container_content_57b6e50015" class="moto-widget moto-widget-container moto-container_content_57b6e50015" data-widget="container" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default          moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="maaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:5px"></div>
</div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-6 undefined" data-container="container"></div><div class="moto-cell col-sm-6" data-container="container"><div data-spacing="laaa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13" style="font-family:'Lobster',cursive!important;"><span class="moto-color1_3">EQUINE</span>INTEL<br></p></div></div><div data-spacing="aama" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><!-- <p class="moto-text_system_7">PLEASE SIGN UP<br></p> --></div></div><div data-draggable-disabled="" data-spacing="sasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7">WELCOME!<br></p></div></div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-9 undefined" data-container="container"><div data-spacing="aala" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_9">"I used EquineIntel and on my third race a $50 exacta netted me $4,000!" - C.T....<br></p><p class="moto-text_system_9"><br></p><p class="moto-text_system_9">That is very different to big chain gyms with classes of tens... Our comradeship vibe is what makes training with us even more efficient!</p></div></div></div><div class="moto-cell col-sm-3" data-container="container"></div></div></div></div></div></div></div></div><div class="moto-widget moto-widget-spacer moto-preset-default         moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="lasa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div></div></div></div></div></div><div class="moto-widget moto-widget-spacer moto-preset-default         moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div></div>        <div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;">HOW IT WORKS</p></div></div><div class="moto-widget moto-widget-divider moto-preset-default moto-align-center        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="divider_horizontal" data-divider-type="horizontal" data-preset="default" data-width="10" data-animation="" data-spacing="aama" data-align="{&quot;desktop&quot;:&quot;center&quot;,&quot;tablet&quot;:&quot;&quot;,&quot;mobile-v&quot;:&quot;&quot;,&quot;mobile-h&quot;:&quot;&quot;}">
    <hr class="moto-widget-divider-line" style="width:10%">
</div><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="maaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div></div></div></div></div><div class="moto-widget moto-widget-row row-gutter-0 row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-4 undefined" data-container="container"><div data-css-name="moto-container_content_57b6f1f216" class="moto-widget moto-widget-container moto-container_content_57b6f1f216" data-widget="container" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_14" style="text-align: center;">29/08/2017<br></p></div></div><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;"><a class="moto-link" data-action="url" target="_self" href="#">You can do it with mobile. Only need mobile.</a><br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:5px"></div>
</div><div data-widget-id="wid__button__59a5189c1e2c3" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="more/index.html"   data-action="page" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">READ MORE</span></a>
    </div></div></div><div class="moto-cell col-sm-4" data-container="container"><div data-css-name="moto-container_content_57b6f3b917" class="moto-widget moto-widget-container moto-container_content_57b6f3b917" data-widget="container" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_14" style="text-align: center;">29/08/2017<br></p></div></div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-1 undefined" data-container="container"></div><div class="moto-cell col-sm-10" data-container="container"><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;"><a class="moto-link" data-action="url" target="_self" href="#">Check Members.</a><br></p><p class="moto-text_system_7" style="text-align: center;"><br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:5px"></div>
</div></div><div class="moto-cell col-sm-1" data-container="container"></div></div></div></div><div data-widget-id="wid__button__59a5189c1e799" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="more/index.html"   data-action="page" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">READ MORE</span></a>
    </div></div></div><div class="moto-cell col-sm-4" data-container="container"><div data-css-name="moto-container_content_57b6f3e818" class="moto-widget moto-widget-container moto-container_content_57b6f3e818" data-widget="container" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_14" style="text-align: center;">29/08/2017<br></p></div></div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-1 undefined" data-container="container"></div><div class="moto-cell col-sm-10" data-container="container"><div data-spacing="asss" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;"><a class="moto-link" data-action="url" target="_self" href="#">Please do it.</a><br></p><p class="moto-text_system_7" style="text-align: center;"><br></p></div></div><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:5px"></div>
</div></div><div class="moto-cell col-sm-1" data-container="container"></div></div></div></div><div data-widget-id="wid__button__59a5189c1e92e" class="moto-widget moto-widget-button moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto " data-widget="button">
            <a href="more/index.html"   data-action="page" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">READ MORE</span></a>
    </div></div></div></div></div></div><div class="moto-widget moto-widget-row" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="mama" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:0px"></div>
</div></div></div></div></div><div data-css-name="moto-container_content_57b6f7ea22" class="moto-widget moto-widget-container moto-container_content_57b6f7ea22" data-widget="container" data-container="container"><div class="moto-widget moto-widget-row row-fixed" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-12" data-container="container"><div data-spacing="lasa" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default"><div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7" style="text-align: center;"><span class="moto-color_custom2">FOLLOW LINKS<br></span></p></div></div><div class="moto-widget moto-widget-divider moto-preset-3 moto-align-center        moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="divider_horizontal" data-divider-type="horizontal" data-preset="3" data-width="10" data-animation="" data-spacing="aama" data-align="{&quot;desktop&quot;:&quot;center&quot;,&quot;tablet&quot;:&quot;&quot;,&quot;mobile-v&quot;:&quot;&quot;,&quot;mobile-h&quot;:&quot;&quot;}">
    <hr class="moto-widget-divider-line" style="width:10%">
</div></div></div></div></div><div class="moto-widget moto-widget-row row-fixed row-gutter-0" data-widget="row"><div class="container-fluid"><div class="row"><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1ec2f" class="moto-widget moto-widget-image moto-preset-4 moto-align-center moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                                        <a class="moto-widget-image-link moto-link" href="http://demolink.motocms.com/" target="_blank"  data-action="url">
                    <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/link1.png" class="moto-widget-image-picture lazyload" data-id="175" title=""  alt="" draggable="false">
                </a>
                        </div></div><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1edfd" class="moto-widget moto-widget-image moto-preset-4 moto-align-center moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                                        <a class="moto-widget-image-link moto-link" href="http://demolink.motocms.com/" target="_blank"  data-action="url">
                    <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/link2.png" class="moto-widget-image-picture lazyload" data-id="176" title=""  alt="" draggable="false">
                </a>
                        </div></div><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1ef98" class="moto-widget moto-widget-image moto-preset-4 moto-align-center moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                                        <a class="moto-widget-image-link moto-link" href="http://demolink.motocms.com/" target="_blank"  data-action="url">
                    <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/link3.png" class="moto-widget-image-picture lazyload" data-id="177" title=""  alt="" draggable="false">
                </a>
                        </div></div><div class="moto-cell col-sm-3 undefined" data-container="container"><div data-widget-id="wid__image__59a5189c1f12c" class="moto-widget moto-widget-image moto-preset-4 moto-align-center moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                                        <a class="moto-widget-image-link moto-link" href="http://demolink.motocms.com/" target="_blank"  data-action="url">
                    <img data-src="../../mt-demo/59100/59143/mt-content/uploads/2016/08/link4.png" class="moto-widget-image-picture lazyload" data-id="178" title=""  alt="" draggable="false">
                </a>
                        </div></div></div></div></div><div class="moto-widget moto-widget-spacer moto-preset-default        moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div></div>                    </section>
    </div>
        @include('layouts.footer')
@endsection