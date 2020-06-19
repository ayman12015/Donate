@extends('admin.includes.masterpage-admin')

@section('content')

    
<div class="main_container col-lg-9 col-md-8 col-sm-9 col-xs- pull-left">
                <div class="row main_container_head">
                    <h4><span class="glyphicon glyphicon-picture"></span>عرض الصور </h4>
                </div>

                <div class="row control_panal_body">
                    <!--Start Admin Panal Section Description-->
                    <p class="page_desc">يمكنك عرض صور موقعك والتحكم فيهم من الحقول ادناه</p>
                    <!--End Admin Panal Section Description-->

                    <div class="admin_index">
                        <!--Start Site Main Options and Data-->
                        <div class="panel panel-default view_photo">
                            <div class="panel-heading text-right h4">عرض كل الصور</div>
                            @if(Session::has('message'))
                                                <div class="alert alert-success alert-dismissable">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif
                            <table class="table">
                                <tr class="h4 text-center">
                                
                                <th>Campaign Name</th>
                                                <th width="10%">Owner Email</th>
                                                <th>Withdraw Amount</th>
                                                <th width="10%">Method</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                </tr>
                            
                                
                                @foreach($withdraws as $withdraw)
                                <tr class="text-center">
                                                    <td>{{$withdraw->campid->title}}</td>
                                                    <td>{{$withdraw->campid->createdby->email}}</td>
                                                    <td>${{$withdraw->amount}}</td>
                                                    <td>{{$withdraw->method}}</td>
                                                    <td>{{$withdraw->created_at}}</td>
                                                    <td>
                                                        <a href="withdraws/{{$withdraw->id}}" class="btn btn-primary product-btn"><i class="fa fa-check"></i> View Details </a>

                                                        <a href="withdraws/accept/{{$withdraw->id}}" class="btn btn-success product-btn"><i class="fa fa-check-circle"></i> Accept</a>

                                                        <a href="withdraws/reject/{{$withdraw->id}}" class="btn btn-danger product-btn"><i class="fa fa-times-circle"></i> Reject</a>

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


@stop

@section('footer')

@stop