@extends('user.includes.masterpage-user')

@section('content')


     <!--Start Main content container-->
     <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">تعديل بيانات الموقع</a></li>
                        <li class="bring_left"><a href="{!! url('admin/campaign') !!}" class="btn btn-default">  go back</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">  أضافه حمله جديده</h1>
                      
                    <div class="form">
                    <form method="POST" action="{!! action('UserCampaignController@store') !!}" id="add_form" class="form-horizontal"  enctype="multipart/form-data">
                                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">عنوان الحمله</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="update_campaign_name" placeholder=" ادخل عنوان الحمله " required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="input0" class="col-sm-2 control-label bring_right left_text"> قسم الحمله</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="update_select_campaign_category" id="update_select_campaign_category">
                                                    <option value="">اختار حمله </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="input1" class="col-sm-2 control-label bring_right left_text">صوره الحمله</label>
                                            <div class="col-sm-8">
                                                <img src="" style="max-width: 200px;" alt="No Photo Added" id="docphoto">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="input1" class="col-sm-2 control-label bring_right left_text">الصوره المرفوعه</label>
                                            <div class="col-sm-8">
                                                <input type="file" accept="image/*" name="photo" class="hidden" onchange="readURL(this)" id="uploadFile"/>
                                                <div id="uploadTrigger" class="btn btn-default form-control">
                                                    <i class="fa fa-upload"></i> <span>أضف صوره </span>
                                                </div>
                                                <p>Prefered Image Ratio: (16:9)</p>
                                            </div>
                                        </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label bring_right left_text">وصف الحمله</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="update_campaign_description" rows="5" placeholder="ادخل وصف للحمله " style="resize: vertical;"  ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> رابط فيديو تعريفي للحمله  </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="video_link" id="update_campaign_video_link" placeholder="Campaign Video Link">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="input0" class="col-sm-2 control-label bring_right left_text"> تاريخ انتهاءالحمله  </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control datepick" name="end_date" id="update_campaign_end_date" placeholder="Enter End Date" required>
                                            </div>
                                        </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> المبلغ* <span> </label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" name="goal" id="update_campaign_goal" placeholder="ادخل امبلغ " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> حدد اقل مبلغ للنبرع* <span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="preloaded_amount" id="update_campaign_preloaded_amount" placeholder=" اقل مبلغ للنبرع">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> اغلاق الحمله بعد  *</label>
                                <div class="col-sm-10">
                                 <label class="radio-inline">
                                                    <input type="radio" name="end_after" value="goal" required>
                                                    اكتمال المبلغ
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="end_after" value="date" required>
                                                    انتهاء تاريخ الحمله 
                                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                            <label class="control-label col-sm-3"></label>
                                            <div class="col-sm-8" data-toggle="buttons">
                                                <label class="btn btn-default" > 
                                                    <input type="checkbox" name="featured" value="1" autocomplete="off" checked>
                                                    <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>
                                                   اضافه الحمله في مقدمه الحملات
                                                </label>
                                            </div>
                                        </div>
                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                <button name="addProduct_btn" type="submit" class="btn btn-danger">أضافه الحمله </button>
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

        $(".datepick").datepicker({
            minDate: new Date(),
            dateFormat: 'yy-mm-dd'
        });

        $("#uploadTrigger").click(function(){
            $("#uploadFile").click();
            $("#uploadFile").change(function(event) {
                $("#uploadTrigger").html($("#uploadFile").val());
            });
        });
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#docphoto').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('update_campaign_description');
        });
    </script>
@stop