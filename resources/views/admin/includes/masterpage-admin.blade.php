<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$settings[0]->title}} - Admin Panel</title>
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/{{$settings[0]->favicon}}" />
   
    <link href="{{ URL::asset('temp/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('temp/css/icon.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('temp/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('temp/css/ar.cs')}}s" rel="stylesheet" class="lang_css arabic">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-tags.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-coloroicker.css')}}" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/css/admin-style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/admin-responsive.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
   
     .form-horizontal .control-label {
    
    margin-right: 122px;
}
    </style>
</head>
<body>
<div class="container-fluid" >
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="{{ URL::asset('assets/images/logo')}}/{{$settings[0]->logo}}" alt="Website logo" width="268px"></h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
           
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
           

            <div class="user_info inline-block">
                <img src="{{url('/')}}/assets/images/admin/{{Auth::user()->photo}}" alt="" class="img-circle">
                <span class="h4 nomargin user_name">{{ Auth::user()->name }}</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section" >

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left" >
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{url('/')}}/assets/images/admin/{{Auth::user()->photo}}">

                <h1 class="h3">  {{ ucfirst(Auth::user()->role) }}</h1>

                <p><a href="{!! url('admin/adminprofile') !!}"><i class="fa fa-fw fa-user" style="color:#fff;"></i> تحديث البروفايل</a></p>

                <p><a href="{!! url('admin/adminpassword') !!}"><span style="color:#fff;"class="glyphicon glyphicon-cog"></span> تغيير كلمة المرور</a></p>

                <p><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off" style="color:#fff;"></i> Logout
                                    </a>
                                
            </div>
            
        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right" >
            <div class="main_sidebar_wrapper">
                <form class="form-inline search_box text-center">
                <img src="{{url('/')}}/assets/images/admin/{{Auth::user()->photo}}" alt="" width="200px" style="border-radius:50%;"><br>
                <span style="color:#fff;">{{ ucfirst(Auth::user()->role) }}</span>
                </form>

                <ul>
                    <li><span class="glyphicon glyphicon-home"></span><a href="{!! url('/admin/dashboard') !!}">الصفحة الرئيسية</a></li>
                    <li><span class="glyphicon glyphicon-tint"></span><a href="">حملات التبرع</a>
                        <ul class="drop_main_menu">
                            <li><a href="{!! url('admin/campaign/create') !!}">إضافة حمله جديده</a></li>
                            <li><a href="{!! url('admin/campaign') !!}">عرض الحملات الموجوده</a></li>
                            <li><a href="{!! url('admin/campaign/titles') !!}">اضافه وصف لقسم الحملات</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-briefcase"></span><a href=""> أقسام التبرع</a>
                        <ul class="drop_main_menu">
                            <li><a href="{!! url('admin/category/create') !!}">إضافة قسم جديد</a></li>
                            <li><a href="{!! url('admin/category') !!}"> عرض كل الاقسام</a></li>
                            <li><a href="{!! url('admin/category/titles') !!}"> اضافه وصف </a></li>
                        </ul>
                    </li>
                    
                    <li><span class="glyphicon glyphicon-user"></span><a href="{!! url('admin/users') !!}"> إداره المستخدمين</a></li>
                    <li>
                    <span class="glyphicon glyphicon-usd"></span><a href="{!! url('admin/withdraws') !!}"> سحب الاموال</a>
                        </li>
                    <li><span class="glyphicon glyphicon-globe"></span><a href="{!! url('admin/language-settings') !!}">  إعدادات اللغه </a></li>
                    <li><span class="glyphicon glyphicon-cog"></span><a href=""> الإعدادات العامه</a>
                        <ul class="drop_main_menu">
                        <li><a href="{!! url('admin/settings/logo') !!}">اعداد لوغو الموقع</a></li>
                                    <li><a href="{!! url('admin/settings/favicon') !!}">اعداد لوغو اتايتل</a></li>
                                    <li><a href="{!! url('admin/settings/contents') !!}">اعدادات محتوي الموقع </a></li>
                                    <li><a href="{!! url('admin/settings/payment') !!}">اعدادات الدفع الالكتروني </a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-ruble"></span><a href="{!! url('admin/settings/payment') !!}">اعدادات الدفع الالكتروني </a></li>
                </ul>
            </div>
        </div>

    @yield('content')

     <!--/End body container section-->
     </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--  Include all compiled plugins (below), or include individual files as needed -->

<script>
    var baseUrl = '{!! url('/') !!}';
</script>
<!-- jQuery -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ URL::asset('temp/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('temp/js/js.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-tags.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/responsive.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.canvasjs.min.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{ URL::asset('assets/js/plugin/nicEdit.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-yaml/3.6.0/js-yaml.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/admin-main.js')}}"></script>
@yield('footer')
</body>
</body>

</html>