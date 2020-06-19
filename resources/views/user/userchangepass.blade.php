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
                    <h1 class="heading_title">  تعديل كلمه المرور   </h1>
                                     @if(Session::has('message'))
                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <div class="form">
                    <form method="POST" action="{!! action('UserProfileController@changepass',['id' => $user->id]) !!}" class="form-horizontal">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  كلمه المرور الحاليه*</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="cpass" id="admin_current_password" placeholder="Current Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  كلمه المرور الجديده*</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="newpass" id="admin_new_password" placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">  تأكيد كلمه المرور الجديده*</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="renewpass" id="admin_retype_password" placeholder="Re-Type New Password" required>
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

@stop