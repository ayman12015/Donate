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
                    <h1 class="heading_title"> أضافه بيانات شاشه الاقسام</h1>
                    @if(Session::has('message'))
                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <div class="form">
                    <form method="POST" action="{{url('admin/category/titles')}}" class="form-horizontal">
                                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> عنوان القسم*</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="category_title" id="service_secttion_title" placeholder="Category Section Titles" value="{{$languages->category_title}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="input1" class="col-sm-2 control-label bring_right left_text">وصف القسم *</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="category_text" id="service_secttion_text" placeholder="Category Sections Text" style="resize: vertical;">{{$languages->category_text}}</textarea>
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