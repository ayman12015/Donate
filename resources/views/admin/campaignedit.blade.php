@extends('admin.includes.masterpage-admin')

@section('content')

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
                    <h1 class="heading_title">  تعديل بيانات الحمله جديده</h1>

                    <div class="form">
                    <form method="POST" action="{!! action('CampaignController@update',['id'=> $campaign->id]) !!}" id="add_form" class="form-horizontal"  enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">عنوان الحمله</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="update_campaign_name" value="{{$campaign->title}}"  placeholder=" ادخل عنوان الحمله " required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="input0" class="col-sm-2 control-label bring_right left_text"> قسم الحمله</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="update_select_campaign_category" id="update_select_campaign_category">
                                                    <option value="">اختار حمله </option>
                                                    @foreach($categories as $category)
                                                        @if($category->name == $campaign->category)
                                                            <option value="{{$category->name}}" selected>{{$category->name}}</option>
                                                        @else
                                                            <option value="{{$category->name}}">{{$category->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label bring_right left_text"> اختار صوره للحمله  *</label>
                                <div class="col-sm-8">
                                                <img src="{{url('/')}}/assets/images/campaign/{{$campaign->feature_image}}" style="max-width: 200px;" alt="No Photo Added" id="docphoto">
                                </div>
                                
                            </div>
                            <div class="form-group">
                            <label for="" class="col-sm-2 control-label bring_right left_text">  صور الحمله  *</label>
                                            <div class="col-sm-8">
                                                <input type="file" accept="image/*" name="photo" class="hidden" onchange="readURL(this)" id="uploadFile"/>
                                                <div id="uploadTrigger" class="btn btn-default form-control">
                                                    <i class="fa fa-upload"></i> <span>أضف صوره  </span>
                                                </div>
                                                <p>مقاس  : (16:9)</p>
                                            </div>
                                        </div>
                                       
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label bring_right left_text">وصف الحمله</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="update_campaign_description" rows="5" placeholder="ادخل وصف للحمله " style="resize: vertical;"  >{{$campaign->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> رابط فيديو تعريفي للحمله  </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="video_link" id="update_campaign_video_link" value="{{$campaign->video_link}}"placeholder="Campaign Video Link">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="input0" class="col-sm-2 control-label bring_right left_text"> تاريخ انتهاءالحمله  </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control datepick" name="end_date"  value="{{$campaign->end_date}}"id="update_campaign_end_date" placeholder="Enter End Date" required>
                                            </div>
                                        </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> المبلغ* <span> </label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" name="goal"  value="{{$campaign->goal}}" id="update_campaign_goal" placeholder="ادخل امبلغ " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> حدد اقل مبلغ للنبرع* <span></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="preloaded_amount" value="{{$campaign->preloaded_amount}}" id="update_campaign_preloaded_amount" placeholder=" اقل مبلغ للنبرع">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text"> اغلاق الحمله بعد  *</label>
                                <div class="col-sm-10">
                                <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    @if($campaign->end_after == "goal")
                                                        <input type="radio" name="end_after" value="goal" required checked>
                                                    @else
                                                        <input type="radio" name="end_after" value="goal" required>
                                                    @endif
                                                    اكتمال المبلغ
                                                </label>
                                                <label class="radio-inline">
                                                    @if($campaign->end_after == "date")
                                                        <input type="radio" name="end_after" value="date" required checked>
                                                    @else
                                                        <input type="radio" name="end_after" value="date" required>
                                                    @endif
                                                    انتهاء التاريخ 
                                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                            <label class="control-label col-sm-3"></label>
                                            <div class="col-sm-8" data-toggle="buttons">
                                            <label class="control-label col-sm-3"></label>
                                            <div class="col-sm-8" data-toggle="buttons">
                                                @if($campaign->featured == 1)
                                                    <label class="btn btn-default active">
                                                    أضافه الحمله في مقدمه الحملات
                                                        <input type="checkbox" name="featured" value="1" autocomplete="off" checked>
                                                        <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>
                                                       
                                                    </label>
                                                @else
                                                    <label class="btn btn-default">أ
                                                    ضافه الحمله في مقدمه الحملات

                                                        <input type="checkbox" name="featured" value="1" autocomplete="off">
                                                        <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>
                                                       
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                <button name="addProduct_btn" type="submit" class="btn btn-danger"> حفظ التعديلات </button>
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
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('update_campaign_description');
        });
    </script>
@stop