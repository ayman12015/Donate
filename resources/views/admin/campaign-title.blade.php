@extends('admin.includes.masterpage-admin')

@section('content')

   <!--Start Main content container-->
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
                    <h1 class="heading_title">  بينات قسم الحملات في الموقع</h1>
                        @if(Session::has('message'))
                            <div class="alert alert-success alert-dismissable">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('message') }}
                                </div>
                         @endif
                    <div class="form">
                    <form method="POST" action="titles" class="form-horizontal">
                                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> أضافه عنوان لقسم الحلات المقدمه    *</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="pricing_title" value="{{$languages->pricing_title}}" id="featured_campaign_secttion_title" placeholder="Enter Featured Section Title" required>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label bring_right left_text">وصف قسم الحملات *</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="pricing_text" id="featured_campaign_section_text" placeholder="Enter Featured Section Text" rows="5" style="resize: vertical;">{{$languages->pricing_text}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> Latest Campaign Section Title *</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="newcamp_title" value="{{$languages->newcamp_title}}" id="latest_campaign_secttion_title" placeholder="Enter Latest Section Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text "> Latest Campaign Section Text *</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="newcamp_text" id="latest_campaign_section_text" placeholder="Enter Campaign Section Tex" rows="5" style="resize: vertical;">{{$languages->newcamp_text}}</textarea>
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
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
@stop