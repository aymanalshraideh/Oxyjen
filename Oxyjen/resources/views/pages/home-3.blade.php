@extends('pages.layout.main')
@section('title','Home')
@section('home','active')

@section('content')


        <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
            <rs-module id="rev_slider_1_1" style="" data-version="6.0.1" class="rev_slider_1_1_height">
                <!-- rs-slides -->
                <rs-slides>

                    <!-- rs-slide -->
                    <rs-slide data-key="rs-1" data-title="Slide" data-thumb="images/slides/slider-mainbg-001.jpg" data-anim="  ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                        <img src="image/slider/{{$slider->coverImage1}}" title="home-mainslider-bg001" width="1920" height="850" class="rev-slidebg" data-no-retina>
                        <rs-layer
                            id="slider-1-slide-1-layer-0"
                            class="ttm-bgcolor-skincolor"
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="xo:54px,54px,-100px,-96px;yo:327px,197px,105px,64px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:55px,55px,34px,20px;h:4px,4px,2px,1px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;"
                            data-frame_1="e:Power0.easeIn;st:190;sR:190;"
                            data-frame_999="o:0;st:w;sR:8510;"
                            >
                        </rs-layer>
                        <a
                            id="slider-1-slide-1-layer-1"
                            class="rs-layer ttm-btn-bgcolor-skincolor ttm-btn ttm-btn-size-md"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:54px,54px,40px,0;yo:573px,443px,290px,193px;"
                            data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:15,15,10,6;l:35,35,22,14;"
                            data-frame_0="y:100%;"
                            data-frame_1="st:940;sp:500;sR:940;"
                            data-frame_999="o:0;st:w;sR:7560;"
                            >{{$slider->link1}}
                        </a>
                        <rs-layer
                            id="slider-1-slide-1-layer-2"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:342px,212px,111px,84px;"
                            data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:250;sp:800;sR:250;"
                            data-frame_999="o:0;st:w;sR:7950;"
                            >{{$slider->title1}}
                        </rs-layer>
                        {{-- <rs-layer
                            id="slider-1-slide-1-layer-3"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:409px,279px,163px,129px;"
                            data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:450;sp:800;sR:450;"
                            data-frame_999="o:0;st:w;sR:7750;"
                            >Your Business
                        </rs-layer> --}}
                        {{-- <a
                            id="slider-1-slide-1-layer-4"
                            class="rs-layer"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:340px,340px,245px,0;yo:587px,457px,304px,239px;"
                            data-text="s:15,15,12,13;l:25,25,15,25;fw:700;"
                            data-frame_0="y:100%;"
                            data-frame_1="st:1050;sp:500;sR:1050;"
                            data-frame_999="o:0;st:w;sR:7450;"
                            data-frame_hover="c:#2d4a8a;"
                            >Get A Quote
                        </a> --}}
                        <rs-layer
                            id="slider-1-slide-1-layer-5"
                            data-type="text"
                            data-color="#3b404c"
                            data-rsp_ch="on"
                            data-xy="xo:50px,50px,40px,-444px;yo:488px,358px,220px,113px;"
                            data-text="s:16,16,14,8;l:27,27,23,14;"
                            data-vbility="t,t,t,f"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:860;sp:500;sR:860;"
                            data-frame_999="o:0;st:w;sR:7640;"

                            >{{$slider->description1}}
                        </rs-layer>
                        {{-- <a
                            id="slider-1-slide-1-layer-6"
                            class="rs-layer"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="xo:308px,308px,222px,-134px;yo:587px,457px,304px,192px;"
                            data-text="s:23,23,15,9;l:25,25,15,9;fw:800;"
                            data-vbility="t,t,t,f"
                            data-frame_0="y:100%;"
                            data-frame_1="st:1050;sp:500;sR:1050;"
                            data-frame_999="o:0;st:w;sR:7450;"
                            data-frame_hover="c:#2d4a8a;"
                            > <i class="ti ti-arrow-circle-right"></i>
                        </a> --}}
                    </rs-slide>
                    <!-- rs-slide -->

                    <!-- rs-slide -->
                    <rs-slide data-key="rs-2" data-title="Slide" data-thumb="images/slides/slider-mainbg-002.jpg"
                        data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">

                        <img src="image/slider/{{$slider->coverImage2}}" title="home-mainslider-bg002" width="1920" height="850" class="rev-slidebg" data-no-retina>

                        <rs-layer
                            id="slider-1-slide-2-layer-0"
                            class="ttm-bgcolor-skincolor"
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:666px,666px,-100px,-96px;yo:327px,197px,105px,64px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:55px,55px,34px,20px;h:4px,4px,2px,1px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;"
                            data-frame_1="e:Power0.easeIn;st:190;sR:190;"
                            data-frame_999="o:0;st:w;sR:8510;"
                        >
                        </rs-layer>
                        <a
                            id="slider-1-slide-2-layer-1"
                            class="rs-layer ttm-btn-bgcolor-darkgrey ttm-btn ttm-btn-size-md"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:r,r,r,c;xo:400px,400px,359px,0;yo:574px,444px,290px,227px;"
                            data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:12,12,10,6;l:35,35,22,14;"
                            data-border="bos:solid;boc:#1e2637;bow:1px,1px,1px,1px;"
                            data-frame_0="y:100%;"
                            data-frame_1="st:1080;sp:500;sR:1080;"
                            data-frame_999="o:0;st:w;sR:7420;"
                        >Get Altech
                        </a>

                        <rs-layer
                            id="slider-1-slide-2-layer-2"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="x:r,r,r,c;xo:50px,50px,50px,0;yo:342px,212px,111px,73px;"
                            data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:250;sp:800;sR:250;"
                            data-frame_999="o:0;st:w;sR:7950;"
                        >{{$slider->title2}}
                        </rs-layer>
                        {{-- <rs-layer
                            id="slider-1-slide-2-layer-3"
                            data-type="text"
                            data-color="#1e2637"
                            data-rsp_ch="on"
                            data-xy="x:r,r,r,c;xo:164px,164px,145px,0;yo:409px,279px,163px,120px;"
                            data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:450;sp:800;sR:450;"
                            data-frame_999="o:0;st:w;sR:7750;"
                            >Your <strong class="ttm-textcolor-skincolor">Infrstracture</strong>
                        </rs-layer> --}}
                        <rs-layer
                            id="slider-1-slide-2-layer-4"
                            data-type="text"
                            data-color="#3b404c"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:95px,95px,40px,-444px;yo:488px,358px,220px,113px;"
                            data-text="s:16,16,14,8;l:27,27,23,14;"
                            data-dim="w:auto,auto,552px,340px;"
                            data-vbility="t,t,t,f"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:860;sp:500;sR:860;"
                            data-frame_999="o:0;st:w;sR:7640;"
                            >{{$slider->description2}}
                        </rs-layer>
                        <a
                            id="slider-1-slide-2-layer-5"
                            class="rs-layer ttm-btn-bgcolor-skincolor ttm-btn ttm-btn-size-md"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:r,r,r,c;xo:575px,575px,487px,0;yo:573px,443px,291px,180px;"
                            data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:15,15,10,6;l:35,35,22,14;"
                            data-frame_0="y:100%;"
                            data-frame_1="st:940;sp:500;sR:940;"
                            data-frame_999="o:0;st:w;sR:7560;"
                            >{{$slider->link2}}
                        </a>
                    </rs-slide>
                    <!-- rs-slide -->
                </rs-slides>
            </rs-module><!-- rs-module -->
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->

        <!--site-main start-->
        <div class="site-main">

            <!-- service-section -->
            <section class="ttm-row service-section-style2 ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>We Make Connections</h5>
                                    <h2 class="title">We provide best <span>Services</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row no-gutters"><!-- row -->
                        <div class="col-md-6 col-lg-3">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box style6">
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5 class="mb-10">Experience Design</h5>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="mb-25">Our firm is an expert to creates an efficient user interface that make user interaction.</p>
                                    </div>
                                </div>
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-system"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15" href="#">Read More </a>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box style6">
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5 class="mb-10">IT Consultancy</h5>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="mb-25">We provide an IT management services is for according to an organization???s needs.</p>
                                    </div>
                                </div>
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-computer"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15" href="#">Read More </a>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box style6">
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5 class="mb-10">Cyber Security</h5>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="mb-25">Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                                    </div>
                                </div>
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-chart"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15" href="#">Read More </a>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box style6">
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5 class="mb-10">Digital Services</h5>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="mb-25">We develop, migrate & work on applications to ensure that run capably on cloud.</p>
                                    </div>
                                </div>
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-data"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15" href="#">Read More </a>
                            </div><!--  featured-icon-box END -->
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </section>
            <!-- service-section end -->

            <!-- progress-bar-section -->
            <section class="ttm-row zero-padding-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="ttm-bgcolor-white ttm-bg ttm-col-bgcolor-yes ttm-left-span spacing-7 position-relative z-1">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- ttm_single_image-wrapper -->
                                            <div class="ttm_single_image-wrapper">
                                                <img class="img-fluid" src="images/single-img-five.jpg" title="single-img-five" alt="single-img-five">
                                            </div><!-- ttm_single_image-wrapper end -->
                                            <div class="about-overlay-02">
                                                <h3>15 Years of</h3>
                                                <p>IT Business Experience</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="res-991-mt-30">
                                                <!-- section title -->
                                                <div class="section-title with-desc clearfix">
                                                    <div class="title-header">
                                                        <h5>About Altech</h5>
                                                        <h2 class="title">We deal with the aspects of professional <span>IT Services</span></h2>
                                                    </div>
                                                    <div class="title-desc">
                                                        <p>We listen. We advise. We design, together. Happy customers and ongoing relationships are what we strive for. Success is measured by results, the most important being how our clients feel about their experience with us.</p>
                                                    </div>
                                                </div><!-- section title end -->
                                                <div class="mt-30">
                                                    <!-- progress-bar -->
                                                    <div class="ttm-progress-bar" data-percent="90%">
                                                        <div class="progress-bar-title">UI/UX Design</div><!-- progress-bar-title -->
                                                        <div class="progress-bar-inner">
                                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                        </div>
                                                        <div class="progress-bar-percent" data-percentage="90">90%</div><!-- progress-bar-percent -->
                                                    </div>
                                                    <!-- progress-bar END -->
                                                    <!-- progress-bar -->
                                                    <div class="ttm-progress-bar" data-percent="80%">
                                                        <div class="progress-bar-title">App Development</div><!-- progress-bar-TITLE -->
                                                        <div class="progress-bar-inner">
                                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                        </div>
                                                        <div class="progress-bar-percent" data-percentage="80">80%</div><!-- progress-bar-PERCENT -->
                                                    </div>
                                                    <!-- progress-bar END -->
                                                    <!-- progress-bar -->
                                                    <div class="ttm-progress-bar" data-percent="90%">
                                                        <div class="progress-bar-title">UI/UX Design</div><!-- progress-bar-title -->
                                                        <div class="progress-bar-inner">
                                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                        </div>
                                                        <div class="progress-bar-percent" data-percentage="90">90%</div><!-- progress-bar-percent -->
                                                    </div>
                                                    <!-- progress-bar END -->
                                                    <!-- progress-bar -->
                                                    <div class="ttm-progress-bar" data-percent="80%">
                                                        <div class="progress-bar-title">App Development</div><!-- progress-bar-TITLE -->
                                                        <div class="progress-bar-inner">
                                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                        </div>
                                                        <div class="progress-bar-percent" data-percentage="80">80%</div><!-- progress-bar-PERCENT -->
                                                    </div>
                                                    <!-- progress-bar END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- progress-bar-section -->

            <!-- fid-section -->
            <section class="ttm-row fid-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img10 mt_225 res-991-mt-0 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!--  ttm-icon -->
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper">
                                    <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-online-library"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="ttm-fid-contents"><!--  ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "0"
                                                data-to               = "458"
                                                data-interval         = "5"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            >458
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Completed Projects</h3><!--  ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--  ttm-icon -->
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper">
                                    <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-developer"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="ttm-fid-contents"><!--  ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "0"
                                                data-to               = "954"
                                                data-interval         = "5"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            >954
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Happy Clients</h3><!--  ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--  ttm-icon -->
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper">
                                    <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-24h"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="ttm-fid-contents"><!--  ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "0"
                                                data-to               = "897"
                                                data-interval         = "5"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            >897
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Services Provider</h3><!--  ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--  ttm-icon -->
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper">
                                    <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-report"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                                <div class="ttm-fid-contents"><!--  ttm-fid-contents -->
                                    <h4><span   data-appear-animation = "animateDigits"
                                                data-from             = "0"
                                                data-to               = "785"
                                                data-interval         = "5"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            >785
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Cloud Designs</h3><!--  ttm-fid-title -->
                                </div><!-- ttm-fid-contents end -->
                            </div>
                        </div>
                    </div>
                    <!-- row end-->
                </div>
            </section>
            <!-- fid-section end -->

            <!-- team-section -->
            <section class="ttm-row team-member-section clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-9 col-xl-10 col-md-9">
                            <!-- section-title -->
                            <div class="section-title style2 clearfix">
                                <div class="title-header">
                                    <h5>About us</h5>
                                    <h2 class="title">Meet our <span>Leadership</span></h2>
                                </div>
                                <div class="title-desc">The positive distinction within the World Inspiring of Success and Connections of People and Organizations.</div>
                            </div><!-- section-title end -->
                        </div>
                        <div class="col-lg-3 col-xl-2 col-md-3">
                            <div class="text-md-right">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-darkgrey mb-40" href="#" title=""> Read More </a>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        <div class="team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="team-details.html">Jennifer Garcia</a></h5>
                                    </div>
                                    <p class="category">IT Service Officer</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="team-details.html">Robert Liam</a></h5>
                                    </div>
                                    <p class="category">Web Designer</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="team-details.html">Jessica Ethan</a></h5>
                                    </div>
                                    <p class="category">Project Manager</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="team-details.html">Amanda Brown</a></h5>
                                    </div>
                                    <p class="category">Consultant Officer</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- team-section end -->

            <!-- testimonial-section end -->
            <section class="ttm-row only-testimonial-section bg-img11 clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>Recent Projects</h5>
                                    <h2 class="title">Check out our work <span>Process</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row"><!-- row -->
                        <div class="col-md-8 offset-md-2">
                            <div class="testimonial-slide style1 owl-carousel pt-0" data-item="1" data-nav="false" data-dots="false" data-auto="false">
                                <!-- testimonials -->
                                <div class="testimonials text-center">
                                    <div class="testimonial-content"><!-- testimonials-content -->
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img"><!-- testimonials-img -->
                                                <img class="img-center" src="images/testimonial/01.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                        <div class="ttm-ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-caption"><!-- testimonials-caption -->
                                            <h6>Victor Williamson</h6>
                                            <label>Web Devloper</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials END -->
                                <!-- testimonials -->
                                <div class="testimonials text-center">
                                    <div class="testimonial-content"><!-- testimonials-content -->
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img"><!-- testimonials-img -->
                                                <img class="img-center" src="images/testimonial/02.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                        <div class="ttm-ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-caption"><!-- testimonials-caption -->
                                            <h6>Victor Williamson</h6>
                                            <label>Web Devloper</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials END -->
                                <!-- testimonials -->
                                <div class="testimonials text-center">
                                    <div class="testimonial-content"><!-- testimonials-content -->
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img"><!-- testimonials-img -->
                                                <img class="img-center" src="images/testimonial/03.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                        <div class="ttm-ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-caption"><!-- testimonials-caption -->
                                            <h6>Victor Williamson</h6>
                                            <label>Web Devloper</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials END -->
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- testimonial-section end -->

            <!-- about-us-section -->
            <section class="ttm-row zero-padding-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="ttm-bgcolor-white ttm-bg ttm-col-bgcolor-yes ttm-right-span spacing-8 position-relative z-1">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <!-- section title -->
                                                <div class="section-title with-desc clearfix">
                                                    <div class="title-header">
                                                        <h5>Why Altech</h5>
                                                        <h2 class="title">We deal with the aspects of professional <span>IT Services</span></h2>
                                                    </div>
                                                    <div class="title-desc">
                                                        <p>Web designing in a powerful way of just not a profession, however, in a passion for our Company. We have a tendency to believe the idea that smart looking of any website is the first impression on visitors. And the smart design.</p>
                                                        <p>We have a special team for website style who has been involved in designing professional websites.</p>
                                                    </div>
                                                </div><!-- section title end -->
                                                <!-- row -->
                                                <div class="row no-gutters mt-35">
                                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                                        <ul class="ttm-list ttm-list-style-icon">
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Web And Mobile Application </span></li>
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">New Domain Registration</span></li>
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Data Text Synchronization</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                                        <ul class="ttm-list ttm-list-style-icon">
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Improving Our Website Design</span></li>
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Web &amp; Email Hosting Services </span></li>
                                                            <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Artificial Intelligence Web App</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- row END -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="res-991-mt-30">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper">
                                                    <img class="img-fluid" src="images/single-img-six.png" title="single-img-six" alt="single-img-six">
                                                </div><!-- ttm_single_image-wrapper end -->
                                                <div class="about-overlay-03">
                                                    <h3>25 Years Experience</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-us-section -->

            <!-- first-row-title-section -->
            <section class="ttm-row third-row-title-section ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img12 mt_230 res-991-mt-0 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-6 col-xl-7">
                            <div class="text-center">
                                <img src="images/map-png.png" alt="map-png">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="text-center">
                                <div class="mb-30">
                                    <img src="images/icon-image.png" alt="icon-image">
                                </div>
                                <div class="separator">
                                    <div class="sep-line mb-25 desc-line"></div>
                                </div>
                                <div class="">
                                    <p class="fs-20">Call Us Now!</p>
                                </div>
                                <!-- section-title -->
                                <div class="section-title row-title clearfix">
                                    <div class="title-header">
                                        <h2 class="title">+12 3456 78901</h2>
                                        <h2 class="title fs-38">For Expert Consultation</h2>
                                    </div>
                                </div><!-- section-title end -->
                                <div class="">
                                    <p class="fs-20 mb-0">Or Send Message</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- first-row-title-section END-->

            <!-- price-text-section end -->
            <section class="ttm-row price-text-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title text-center with-desc clearfix">
                                <div class="title-header">
                                    <h5>Our Pricing Plans</h5>
                                    <h2 class="title">A monthly project fee <span>Price Plans</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- price-text-section end -->
            <!-- price-section -->
            <section class="ttm-row topzero-padding-section  clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row no-gutters mt_100">
                        <div class="col-md-4">
                            <!--ttm-pricing-plan-->
                            <div class="ttm-pricing-plan box-shadow text-left clearfix">
                                <div class="ttm-ptablebox-title"><h3>Professional</h3></div><!--title-->
                                <div class="ttm-ptablebox-desc">Designed for businesses with standard health requirements</div>
                                <div class="ttm-ptablebox-content">
                                    <div class="ttm-ptablebox-price-w">
                                        <div class="ttm-ptablebox-cur-symbol-before">$</div>
                                        <div class="ttm-ptablebox-price">70.00</div><!--price-->
                                        <div class="ttm-ptablebox-frequency">per month</div>
                                    </div>
                                    <div class="ttm-ptablebox-features"><!--features-->
                                        <ul class="ttm-feature-lines">
                                            <li>24/7 Support</li>
                                            <li>Advanced Options</li>
                                            <li>16 GB Storage</li>
                                            <li>Unlimited Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_btn">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-grey mb-20 w-100" href="#">Get Started</a>
                                </div>
                            </div><!--ttm-pricing-plan-->
                        </div>
                        <div class="col-md-4">
                            <!--ttm-pricing-plan-->
                            <div class="ttm-pricing-plan ttm-pricing-plan-col box-shadow text-left clearfix">
                                <div class="ttm-featured-title"><i class="fa fa-star"></i>MOST POPULAR</div>
                                <div class="ttm-ptablebox-title"><h3>Standard</h3></div><!--title-->
                                <div class="ttm-ptablebox-desc">Designed for businesses with standard health requirements</div>
                                <div class="ttm-ptablebox-content">
                                    <div class="ttm-ptablebox-price-w">
                                        <div class="ttm-ptablebox-cur-symbol-before">$</div>
                                        <div class="ttm-ptablebox-price">90.00</div><!--price-->
                                        <div class="ttm-ptablebox-frequency">per month</div>
                                    </div>
                                    <div class="ttm-ptablebox-features"><!--features-->
                                        <ul class="ttm-feature-lines">
                                            <li>24/7 Support</li>
                                            <li>Advanced Options</li>
                                            <li>16 GB Storage</li>
                                            <li>Unlimited Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_btn">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mb-20 w-100" href="#">Get Started</a>
                                </div>
                            </div><!--ttm-pricing-plan-->
                        </div>
                        <div class="col-md-4">
                            <!--ttm-pricing-plan-->
                            <div class="ttm-pricing-plan box-shadow text-left clearfix">
                                <div class="ttm-ptablebox-title"><h3>Basic</h3></div><!--title-->
                                <div class="ttm-ptablebox-desc">Designed for businesses with standard health requirements</div>
                                <div class="ttm-ptablebox-content">
                                    <div class="ttm-ptablebox-price-w">
                                        <div class="ttm-ptablebox-cur-symbol-before">$</div>
                                        <div class="ttm-ptablebox-price">60.00</div><!--price-->
                                        <div class="ttm-ptablebox-frequency">per month</div>
                                    </div>
                                    <div class="ttm-ptablebox-features"><!--features-->
                                        <ul class="ttm-feature-lines">
                                            <li>24/7 Support</li>
                                            <li>Advanced Options</li>
                                            <li>16 GB Storage</li>
                                            <li>Unlimited Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_btn">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-grey mb-20 w-100" href="#">Get Started</a>
                                </div>
                            </div><!--ttm-pricing-plan-->
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- price-section end -->

        </div><!--site-main end-->


        @endsection
