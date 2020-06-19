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
                    <h1 class="heading_title">  أضافه قسم جديد </h1>
                                     @if(Session::has('message'))
                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <div class="form">
                    <form method="POST" action="{!! action('CategoryController@store') !!}" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> أسم القسم*</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="category_display_name" placeholder="Enter Category Name" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="input1" class="col-sm-2 control-label bring_right left_text">اسم القسم بللغه العربيه *</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" id="category_slug" placeholder="Enter Category Slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label bring_right left_text">صوره القسم الحاليه</label>
                                <input type="file" name="image" id="setup_new_logo" accept="image/*" required>
                                </div>
                            </div>
                           
                        
                            
                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                <button name="addProduct_btn" type="submit" class="btn btn-danger">حفظ البيانات </button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @stop

@section('footer')

@stop