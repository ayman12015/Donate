@extends('admin.includes.masterpage-admin')

@section('content')


     <!--Start Admin Panal MAin Content Right Block-->
     <div class="main_container col-lg-9 col-md-8 col-sm-9 col-xs- pull-left">
                <div class="row main_container_head">
                    <a href="{{url('admin/campaign/create')}}" class="btn btn-default "style="border-radius: 19%;
}"><h4><span class="glyphicon glyphicon-plus"></span> أضافه حمله جديده </h4></a>
                </div>

                <div class="row control_panal_body">
                    <!--Start Admin Panal Section Description-->
                   
                    <!--End Admin Panal Section Description-->

                    <div class="admin_index">
                        <!--Start Site Main Options and Data-->
                        <div class="panel panel-default view_photo">
                            <div class="panel-heading text-right h4">  حملات الموقع</div>
                            @if(Session::has('message'))
                                                <div class="alert alert-success alert-dismissable">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif
                            <table class="table">
                                <tr class="h4 text-center">
                                <th>اسم الحمله</th>
                                                <th>التاريخ</th>
                                                <th>المبلغ المطلوب</th>
                                                <th>تم جمع مبلغ</th>
                                                <th>المبلغ المتوفر</th>
                                                <th>الحاله</th>
                                                <th>تنفيذ إجراء</th>
                                </tr>
                                @foreach($campaigns as $campaign)
                                <tr class="text-center">
                                
                                                <td>{{$campaign->title}}</td>
                                                    <td>{{date('d M',strtotime($campaign->created_at))}} - {{date('d M',strtotime($campaign->end_date))}}</td>
                                                    <td>ريال - {{$campaign->goal}}</td>
                                                    <td>ريال - {{\App\Donation::getFund($campaign->id)}}</td>
                                                    <td>ريال - {{$campaign->available_fund}}</td>
                                                    <td>{{ucfirst($campaign->status)}}</td>
                                                    <td>
                                                        <a href="campaign/{{$campaign->id}}" class="btn btn-success product-btn"><i class="fa fa-eye"></i> View </a>
                                                        <a href="campaign/{{$campaign->id}}/edit" class="btn btn-primary product-btn"><i class="fa fa-edit"></i> Edit </a>
                                                        @if($campaign->status != "closed")
                                                            <a href="campaign/{{$campaign->id}}/close" class="btn btn-warning product-btn"><i class="fa fa-toggle-on"></i> Close </a>
                                                        @else
                                                            <a href="campaign/{{$campaign->id}}/open" class="btn btn-danger product-btn"><i class="fa fa-toggle-off"></i> Open </a>
                                                        @endif
                                                        <a href="javascript:;" data-href="{{url('/')}}/admin/campaign/{{$campaign->id}}/delete" data-toggle="modal" data-target="#confirm-delete"class="btn btn-danger product-btn"><i class="fa fa-trash"></i></a>
                                                    </td>
                                </tr>
                                @endforeach
                                
                               

                            </table>


                            <nav class="english text-center ltr">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <!--End Site Main Options and Data-->
                    </div>
                </div>
            </div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-danger">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-circle fa-fw"></i> Confirm Delete</h3>
                </div>
                <div class="modal-body">
                    <p>You are about to delete this Campaign, All Donations will be deleted under this Campaign.</p>
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
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