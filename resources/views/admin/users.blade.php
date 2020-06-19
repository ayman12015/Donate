@extends('admin.includes.masterpage-admin')

@section('content')

<div class="main_container col-lg-9 col-md-8 col-sm-9 col-xs- pull-left">
<br><br><br>
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
                            <div class="panel-heading text-right h4">عusershر</div>
                            @if(Session::has('message'))
                                                <div class="alert alert-success alert-dismissable">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif
                            <table class="table">
                            <th>الاسم الكامل</th>
                            <th>البريد الالكتروني</th>
                            <th>الجوال</th>
                            <th>البلد</th>
                            <th> حملات تبرع</th>
                            <th>حاله المستخدم</th>
                            <th>الاجراءات</th>
                                </tr>
                               
                                            @foreach($customers as $customer)
                                            <tr class="text-center">
                                                    <td>{{$customer->name}}</td>
                                                    <td>{{$customer->email}}</td>
                                                    <td>{{$customer->phone}}</td>
                                                    <td>{{$customer->country}}</td>
                                                    <td>{{\App\Campaign::where('createdby',$customer->id)->count()}}</td>
                                                    <td>
                                                        @if($customer->status != 0)
                                                            Active
                                                        @else
                                                            Banned
                                                        @endif
                                                    </td>

                                                    <td>

                                                        <a href="users/{{$customer->id}}" class="btn btn-primary product-btn"><i class="fa fa-check"></i> عرض تفاصيل </a>
                                                        @if($customer->status != 0)
                                                            <a href="users/status/{{$customer->id}}/0" class="btn btn-danger product-btn"><i class="fa fa-toggle-off"></i> حجب المستخدم</a>
                                                        @else
                                                            <a href="users/status/{{$customer->id}}/1" class="btn btn-success product-btn"><i class="fa fa-toggle-on"></i> تفعيل</a>
                                                        @endif

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

@section('footer')

@stop