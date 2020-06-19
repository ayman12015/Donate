@extends('admin.includes.masterpage-admin')

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
                    <form method="POST" action="{!! action('AdminProfileController@update',['id' => $admin->id]) !!}" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="PATCH">
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> الصوره الحاليه*</label>
                                            
                                            <div class="col-sm-3">
                                                <img id="adminimg" src="{{url('/')}}/assets/images/admin/{{$admin->photo}}" alt="">
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="" onchange="readURL(this)" id="uploadFile" name="photo" type="file">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> اسم المستخدم*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name" value="{{$admin->name}}" id="admin_name" placeholder="Admin Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  البريد الالكتروني*</label>
                                            <div class="col-sm-8">
                                                @if($admin->role == "administrator")
                                                    <input type="email" class="form-control" name="email" value="{{$admin->email}}" id="admin_email_address" placeholder="Email Address" required>
                                                @else
                                                    <input type="email" class="form-control" name="email" value="{{$admin->email}}" id="admin_email_address" placeholder="Email Address" required disabled>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  رقم الجوال*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="phone" value="{{$admin->phone}}" id="admin_phone_number" placeholder="Phone Number" required>
                                            </div>
                                         </div>
                                        <hr/>
                                        <div class="add-product-footer">
                                            <button name="addProduct_btn" type="submit" class="btn btn-success add-product_btn"> تحديث البروفايل</button>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>

@stop

@section('footer')
    <script>
        function uploadclick(){
            $("#uploadFile").click();
            $("#uploadFile").change(function(event) {
                $("#uploadTrigger").html($("#uploadFile").val());
            });
        }

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#adminimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop