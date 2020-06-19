@extends('includes.masterpage')
@section('content')

@if($pagesettings[0]->slider_status) 
<section class="go-slider">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line"
            data-ride="carousel" data-pause="hover" data-interval="5000">

            <!-- Indicators -->
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="assets/images/sliders/hart.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <div id="widget_ssp-1459413918"
                            class="helpSection helpSectionw banner-widget  fadeInRight wow directdonation-widget widc"
                            style="visibility: visible; animation-name: fadeInRight; opacity: 1; transition: all 1.2s ease 0s;">
                            <h5> القلب ..
                                <span> المفتوح</span>
                            </h5>
                            <p style="font-size: 12px;font-weight: bold;">مشروع واحد يخدم خمسة مشاريع رئيسية
                                (القلب،الكلى، الدم، السكري، السرطان)
                            </p>
                            <div class="textbox-field flex-wrapper">
                                <div id="mfi_0_a_i" onclick="" class="1589303451 priceBox col-md-4">
                                    <input readonly="readonly" class="custom " placeholder="100" value="100" type="text"
                                        tabindex="-1">
                                </div>
                                <div id="mfi_1_a_i" onclick="selectSimWidgetPrice('300', '1589273784')"
                                    class="1589273784 priceBox col-md-4">
                                    <input readonly="readonly" class="custom " placeholder="300" value="300" type="text"
                                        tabindex="-1">
                                </div>
                                <div id="mfi_2_a_i" onclick="selectSimWidgetPrice('500', '1589418710')"
                                    class="1589418710 priceBox col-md-4 selected">
                                    <input class="custom other" placeholder="أخرى" value="" type="text" tabindex="-1">
                                </div>
                                <div class="clearfix clear"></div>
                            </div>
                            <div class="textbox-field">
                                <div style="display: none;">
                                    <input type="text" data-price_field="orig_price_field-smp" name="option[442]"
                                        id="input-option442" value="" placeholder="سعر مخصص**"
                                        class="form-control input-number" readonly="" tabindex="-1">
                                </div>
                            </div>
                            <div style="margin-top: 20px;" class="textbox-field">
                            </div>
                            <div class="help-widget">
                                <div class="hepbtns">
                                    <a id="sdd" style="color: #fff; background-color: #3339e8;" href="{{url('/cart')}}"
                                        class="btn btn-secondary " tabindex="-1"> أضف <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a>
                                    <a href="{{url('/cart')}}"
                                        class="btn btn-primary btnAddGoToCart" tabindex="-1">تبرع الان
                                    </a>
                                </div>
                                <a href="" class="detailbtn" tabindex="-1">تفاصيل
                                    الحملة</a>
                            </div>
                            <input name="product_id" value="136" type="hidden" tabindex="-1">
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->



                <!-- End of Slide -->
                <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="assets/images/sliders/hart2.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <div id="widget_ssp-1459413918"
                            class="helpSection helpSectionw banner-widget  fadeInRight wow directdonation-widget widc"
                            style="visibility: visible; animation-name: fadeInRight; opacity: 1; transition: all 1.2s ease 0s;">
                            <h5> ومن ..
                                <span> أحياها</span>
                            </h5>
                            <p style="font-size: 12px; font-weight: bold;">مشروع واحد يخدم خمسة مشاريع رئيسية
                                (القلب،الكلى، الدم، السكري، السرطان)
                            </p>
                            <div class="textbox-field flex-wrapper">
                                <div id="mfi_0_a_i" onclick="" class="1589303451 priceBox col-md-4">
                                    <input readonly="readonly" class="custom " placeholder="100" value="100" type="text"
                                        tabindex="-1">
                                </div>
                                <div id="mfi_1_a_i" onclick="selectSimWidgetPrice('300', '1589273784')"
                                    class="1589273784 priceBox col-md-4">
                                    <input readonly="readonly" class="custom " placeholder="300" value="300" type="text"
                                        tabindex="-1">
                                </div>
                                <div id="mfi_2_a_i" onclick="selectSimWidgetPrice('500', '1589418710')"
                                    class="1589418710 priceBox col-md-4 selected">
                                    <input class="custom other" placeholder="أخرى" value="" type="text" tabindex="-1">
                                </div>
                                <div class="clearfix clear"></div>
                            </div>
                            <div class="textbox-field">
                                <div style="display: none;">
                                    <input type="text" data-price_field="orig_price_field-smp" name="option[442]"
                                        id="input-option442" value="" placeholder="سعر مخصص**"
                                        class="form-control input-number" readonly="" tabindex="-1">
                                </div>
                            </div>
                            <div style="margin-top: 20px;" class="textbox-field">
                            </div>
                            <div class="help-widget">
                                <div class="hepbtns">
                                    <button id="sdd" style="color: #fff; background-color: #3339e8;"
                                        onclick="addToCartSimWidget('136', undefined, 1459413918)"
                                        class="btn btn-secondary btnAddtoCart" tabindex="-1"> أضف <i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                    <button onclick="addToCartSimWidget('136', true, 1459413918)"
                                        class="btn btn-primary btnAddGoToCart" tabindex="-1">تبرع الان
                                    </button>
                                </div>
                                <a href="https://falathat.org/ومن-أحياها" class="detailbtn" tabindex="-1">تفاصيل
                                    الحملة</a>
                            </div>
                            <input name="product_id" value="136" type="hidden" tabindex="-1">
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
            </div><!-- End of Wrapper For Slides -->


        </div>
        </div>
    </section>
    @endif
    <br><br>
    <!-- Starting of achievement area -->
    <div class="campaign-categories-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2 style="font-style: normal;;"> طموحنا</h2>
                        <hr style="border-top: 1px solid #230505; margin-right: 147px;
                        margin-left: 169px;">
                        <!-- <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="">
                        <i style="font-size: 77px; color: #bb1010;" class="fa fa-heart"></i><br><br>
                        <p style="font-size: 33px; margin-left: 14px; color: #bb1010;"> 233</p>
                        <h3 style="font-style: normal;">عملية قلب مفتوح</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="">
                        <i style="font-size: 77px; color: #d8913a;" class="fa fa-support"></i><br><br>
                        <p style="font-size: 33px; margin-left: 14px; color: #d8913a;"> 270</p>
                        <h3 style="font-style: normal;">يشمله التأمين الطبي</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="">
                        <i style="font-size: 77px; color: #4a3eb5;" class="fa fa-street-view"></i><br><br>
                        <p style="font-size: 33px; margin-left: 14px; color: #4a3eb5;"> 1000</p>
                        <h3 style="font-style: normal;">عملية قلب مفتوح</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="">
                        <i style="font-size: 77px; color: #22b37d;" class="fa fa-calculator"></i><br><br>
                        <p style="font-size: 33px; margin-left: 14px; color: #22b37d;"> 120</p>
                        <h3 style="font-style: normal;">عملية غسيل كلى</h3>

                    </div>
                </div>






            </div>
        </div>
    </div>
    <br><br>
    @if($pagesettings[0]->category_status)
    <!-- Starting of Campaign Categories area -->
    <div class="campaign-categories-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2>{{$languages->category_title}}</h2>
                        <hr style="border-top: 1px solid #230505; margin-right: 147px;
                        margin-left: 169px;">
                        <p>{{$languages->category_text}}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-campaignCategories-area">
                        <img src="{{url('/assets/images/category')}}/{{$category->image}}" alt="" >
                        <a href="category/{{$category->slug}}" class="single-campaignCategories-header">
                            <h3>{{$category->name}}</h3>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Ending of Campaign Categories area -->
    @endif
<br><br>
    @if($pagesettings[0]->latest_status)
    <!-- Starting of Latest Campaigns area -->
    <div class="section-padding latest featured-auction-wrapper wow fadeInUp"
        style="background: linear-gradient( 135deg, #abdcff1c 10%, #0396ff87 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2 style="font-style: normal;"> من مشاريع الجمعية</h2>
                        <hr style="border-top: 1px solid #230505; margin-right: 147px;
                        margin-left: 169px;">
                        <!-- <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel featured-list">
                    @foreach($newcampaigns as $campaign)
                        
                            <div class="single-featured-item">
                                <div class="featured-img">
                                    <img class="featured-img" src="{{url('/assets/images/campaign')}}/{{$campaign->feature_image}}" width="200px" hight="150px" alt="">
                                </div>

                                <div class="featured-text">
                                    <h3 dir="rtl">  {{$campaign->title}}</h3>
                                    <div class="featured-meta">
                                        <span style="color: #00a1ff;">
                                            SAR - {{$campaign->goal}}
                                            <span class="pull-left">
                                            المبلغ المطلوب</span>
                                        </span><br>
                                        <span dir="">
                                        @if (((strtotime($campaign->end_date)-time())/86400) < 0)
                                            <span >{{0}}</span>
                                        @else
                                            <span style="color: #00a1ff;">{{ceil((strtotime($campaign->end_date)-time())/86400)}}</span>
                                        @endif
                                            {{$language->days_left}}
                                    </span>
                                        <span class="pull-left"><span>جدة</span> <i
                                                class="fa fa-map-marker"></i></span><br>
                                        <span class="pull-left"><span>SAR - {{\App\Donation::getFund($campaign->id)}}</span> : إجمالي التبرعات</span><br>
                                        
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="28"
                                            aria-valuemin="0" aria-valuemax="100" style="width:{{round(\App\Donation::getPercent($campaign->id))}}%">
                                            {{round(\App\Donation::getPercent($campaign->id))}}%
                                        </div>
                                    </div>
                                    <div onclick="changeProductPrice('price-option-148','300','1589613489')"
                                        class="1589613489 selected-w-price priceBox col-md-4 col-xs-12">
                                        <input readonly="readonly" class="custom " placeholder="300" value="300"
                                            type="text">
                                    </div>
                                    <div onclick="changeProductPrice('price-option-148','600','1588918167')"
                                        class="1588918167 selected-w-price priceBox col-md-4 col-xs-12">
                                        <input readonly="readonly" class="custom " placeholder="600" value="600"
                                            type="text">
                                    </div>
                                    <div onclick="" class="1589735898 selected-w-price priceBox col-md-4 col-xs-12">
                                        <input class="custom other" placeholder="أخرى" value="" type="text">
                                    </div><br><br>
                                    <div class="featured-meta-bottom">
                                        <button class="featured-right">تبرع الان</button>
                                        <button class="pull-left" style="background-color: #3339e8; color: #fff;height: 42px;">أضف <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                       
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ending of Latest Campaigns area -->
    @endif
    <br><br>
    <!-- Starting of team area -->
    <div class="our-team-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2>شركائنا</h2>
                        <hr style="border-top: 1px solid #230505; margin-right: 147px;
                        margin-left: 169px;">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-area">
                        <img src="assets/images/volunteer/part.jpg" alt="Team member image" height="33px">
                        <div class="team-area-hover">
                            <div class="member-details">
                                <h4>Badruddoza Chowdhur</h4>
                                <em>Web Designer</em>
                            </div>
                            <div class="member-social-icon">
                                <ul>
                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-area">
                        <img src="assets/images/volunteer/part2.jpg" alt="Team member image" height="33px">
                        <div class="team-area-hover">
                            <div class="member-details">
                                <h4>Chowdhury</h4>
                                <em>Office Manager</em>
                            </div>
                            <div class="member-social-icon">
                                <ul>
                                    <li><a href="facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="facebook.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="facebook.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="facebook.com"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-area">
                        <img src="assets/images/volunteer/part3.jpg" alt="Team member image" height="33px">
                        <div class="team-area-hover">
                            <div class="member-details">
                                <h4>Badruddoza</h4>
                                <em>Owner</em>
                            </div>
                            <div class="member-social-icon">
                                <ul>
                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-area">
                        <img src="assets/images/volunteer/part4.jpg" alt="Team member image" height="33px">
                        <div class="team-area-hover">
                            <div class="member-details">
                                <h4>Chowdhury</h4>
                                <em>Designer</em>
                            </div>
                            <div class="member-social-icon">
                                <ul>
                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ending of team area -->
    <br><br>
    <!-- Starting of blog area -->
    <div class="section-padding blog-area-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2>جديدنا</h2>
                        <hr style="border-top: 1px solid #230505; margin-right: 147px;
                        margin-left: 169px;">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area-slider">
                        <a href="" class="single-blog-box">
                            <div class="blog-thumb-wrapper">
                                <img src="assets/images/blog/ee.jpg" alt="Blog Image">
                            </div>
                            <div class="blog-text">
                                <p class="blog-meta" style="color: blue;">28 Nov 2017</p>
                                <h4>أول مشروع من نوعه للتأمين الطبي </h4>
                                <p style=" font-weight: 600;display: -webkit-box;-webkit-box-orient: vertical;">أول
                                    مشروع من نوعه للتأمين الطبي, الذي يهدف إلى توفير تأمين طبي للمرضي من الأطفال
                                    المحتاجين والأيتام ، تحت شعار كن بلسما لقلوبهم</p>


                            </div>
                        </a>
                        <a href="" class="single-blog-box">
                            <div class="blog-thumb-wrapper">
                                <img src="assets/images/blog/eee.jpg" alt="Blog Image">
                            </div>
                            <div class="blog-text pull-right">
                                <p class="blog-meta" style="color: blue;">28 Nov 2017</p>
                                <h4>اجتماع الجمعية العمومية لفلذات</h4>
                                <p style=" font-weight: 600;display: -webkit-box;-webkit-box-orient: vertical;">صدر قرار
                                    الموافقة على انشاء مركز فلذات للتميز في طوارئ الاطفال من مكتب مدير جامعة
                                    الملك عبدالعزيز بجدة يوم ٢٩ شعبان ١٤٤١ ولذلك لزيادة الطاقة الاستيعابية لوحدة طوارئ
                                    الأطفال .</p>

                            </div>
                        </a>
                        <a href="" class="single-blog-box">
                            <div class="blog-thumb-wrapper">
                                <img src="assets/images/blog/eeee.jpg" alt="Blog Image">
                            </div>
                            <div class="blog-text">
                                <p class="blog-meta" style="color: blue;">28 Nov 2017</p>
                                <h4>الأطفال هبة الله</h4>
                                <p style=" font-weight: 600;display: -webkit-box;-webkit-box-orient: vertical;">يفرح
                                    الآباء فرحا لا يوصف بمجرد سماعهم خبر حصول الحمل، كيف لا يزيد فرحهم وهم يعلمون أن
                                    ما بشروا به إنما هو هبة من الله سبحانه وتعالى، قال تعالى: (يهب لمن يشاء إناثا ويهب
                                    لمن يشاء الذكور).</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ending of blog area -->





<script>

</script>
@stop