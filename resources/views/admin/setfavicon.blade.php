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
                    <h1 class="heading_title">  Add New Category</h1>
                                     @if(Session::has('message'))
                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <div class="form">
                    <form method="POST" action="favicon" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text"> Current Favicon*</label>
                                            
                                            <div class="col-sm-8">
                                                <img src="{{url('assets/images')}}/{{$setting[0]->favicon}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input0" class="col-sm-2 control-label bring_right left_text">    Setup New Favicon *</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="favicon" id="setup_new_logo" accept="image/*" required>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="add-product-footer">
                                            <button name="addProduct_btn" type="submit" class="btn btn-danger pull-right">update setting</button>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>

        
@stop

@section('footer')

@stop