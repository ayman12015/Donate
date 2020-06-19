@extends('user.includes.masterpage-user')

@section('content')

<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">تعديل بيانات الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">  تحديث الملف الشخصي  </h1>
                                     @if(Session::has('message'))
                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <div class="form">
                    <form method="POST" action="{!! action('UserProfileController@update',['id' => $user->id]) !!}" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> اسم المستخدم*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name" value="{{$user->name}}" id="admin_name" placeholder="Admin Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> البريد الالكتروني*</label>
                                        
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" name="email" value="{{$user->email}}" id="admin_email_address" placeholder="Email Address" required disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> رقم الجوال*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}" id="admin_phone_number" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  اختر البلد*</label>
                                            <div class="col-sm-8">
                                                <select name="country" class="form-control selectpicker" id="user_country">
                                                    <option value=" " >اختر بلدك</option>
                                                    @foreach($countries as $country)
                                                        @if($country->nicename == $user->country)
                                                            <option value="{{$country->nicename}}" selected>{{$country->nicename}}</option>
                                                        @else
                                                            <option value="{{$country->nicename}}">{{$country->nicename}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="add-product-footer">
                                            <button name="addProduct_btn" type="submit" class="btn btn-success add-product_btn">حفظ البيانات </button>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('footer')
<script>

</script>
@stop