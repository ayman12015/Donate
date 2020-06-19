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
                                
                                <th>Category Name</th>
                                   <th>Category Slug</th>
                                <th>Actions</th>
                                </tr>
                                @foreach($categories as $category)
                                <tr class="text-center">
                                
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->slug}}</td>
                                                    <td>
                                                        <form method="POST" action="{!! action('CategoryController@destroy',['id' => $category->id]) !!}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <a href="category/{{$category->id}}/edit" class="btn btn-primary product-btn"><i class="fa fa-edit"></i> Edit </a>
                                                            <button type="submit" class="btn btn-danger product-btn"><i class="fa fa-trash"></i> Remove </button>
                                                        </form>
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