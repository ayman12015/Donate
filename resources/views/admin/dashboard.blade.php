@extends('admin.includes.masterpage-admin')

@section('content')
   <!--Start Main content container-->
   <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <div class="page_content">
                      
                        <div class="home_statics text-center">
                            <h1 class="heading_title">احصائيات عامة للموقع</h1>

                            <div style="background-color: #9b59b6">
                                <span class="bring_right glyphicon glyphicon-leaf"></span>

                                <h3> كل الحملات</h3>

                                <p class="h4">{{\App\Campaign::count()}}</p>
                            </div>

                            <div style="background-color: #34495e">
                                <span class="bring_right  glyphicon glyphicon-globe"></span>

                                <h3>المتصلين الان</h3>

                                <p class="h4">55</p>
                            </div>
                            <div style="background-color: #00adbc">
                                <span class="bring_right glyphicon glyphicon-usd"></span>

                                <h3>  المبالغ المسحوبه</h3>

                                <p class="h4">{{\App\Withdraw::count()}}</p>
                            </div>
                            <div style="background-color: #f39c12">
                                <span class="bring_right glyphicon glyphicon-user"></span>

                                <h3>عدد المستخدمين</h3>

                                <p class="h4">{{\App\UserProfile::count()}}</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--/End Main content container--> 
   
    @stop
