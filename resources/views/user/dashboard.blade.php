@extends('user.includes.masterpage-user')

@section('content')

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

                                <h3> عدد الحملات</h3>

                                <p class="h4">{{ \App\Campaign::where('createdby',$user->id)->count() }}</p>
                            </div>

                            
                            
                           
                            
                        </div>
                    </div>
                </div>
            </div>


@stop

@section('footer')

@stop