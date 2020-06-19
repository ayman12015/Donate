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
                    <h1 class="heading_title">   معلومات عن الحمله </h1>

                    <div class="form">
                    <div class="campaign-tab">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#campaignDetails">تفاصيل الحمله </a></li>
                                            <li><a data-toggle="tab" href="#donations">Donations</a></li>
                                            <li><a data-toggle="tab" href="#withdraws">Withdraws</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="campaignDetails" class="tab-pane fade in active">
                                                <h3>{{$campaign->title}}</h3>

                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover products dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <tbody>
                                                        <tr>
                                                            <td width="30%"><strong> رقم#</strong></td>
                                                            <td>{{$campaign->id}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>حاله الحمله :</strong></td>
                                                            <td>{{ucfirst($campaign->status)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>تاريخ الانشاء :</strong></td>
                                                            <td>{{date('Y-m-d h:i:sa',strtotime($campaign->created_at))}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>تم انشاء الحمله بواسطه :</strong></td>
                                                            <td>{{$campaign->createdby->name}},{{$campaign->createdby->country}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>عنوان الحمله :</strong></td>
                                                            <td>{{$campaign->title}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>قسم الحمله :</strong></td>
                                                            <td>{{$campaign->category}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>صوره الحمله :</strong></td>
                                                            <td><img src="{{url('assets/images/campaign')}}/{{$campaign->feature_image}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>فيديو تعريفي :</strong></td>
                                                            <td>{!! \App\Campaign::getVideo($campaign->id) !!}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>وصف الحمله :</strong></td>
                                                            <td>{!! $campaign->description !!}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>المبلغ المطلوب :</strong></td>
                                                            <td>{{$settings[0]->currency_sign}}{{$campaign->goal}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>تاريخ الانتهاء  :</strong></td>
                                                            <td>{{$campaign->end_date}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="donations" class="tab-pane fade">
                                                <h3>Total Fund Received: {{$settings[0]->currency_sign}}{{\App\Donation::getFund($campaign->id)}}</h3>
                                                <h3>Total Donations: {{\App\Donation::getDonations($campaign->id)}}</h3>

                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover products dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Donation Amount</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @forelse(\App\Campaign::campDonations($campaign->id) as $donation)
                                                            <tr>
                                                                @if($donation->anonymous != "yes")
                                                                    <td>{{$donation->donator_name}}</td>
                                                                    <td>{{$donation->donator_email}}</td>
                                                                @else
                                                                    <td colspan="2" style="color: darkred">Anonymous Donation</td>
                                                                @endif
                                                                <td>{{$settings[0]->currency_sign}}{{$donation->amount}}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="3">No Donations Yet.</td>
                                                            </tr>
                                                        @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="withdraws" class="tab-pane fade">
                                                <h3>Total Withdrawals Made: {{$settings[0]->currency_sign}}{{\App\Withdraw::campWithdraw($campaign->id)}}</h3>
                                                @if(\App\Withdraw::pendWithdraw($campaign->id) > 0)
                                                    <h4>Withdraw Pending: {{$settings[0]->currency_sign}}{{\App\Withdraw::pendWithdraw($campaign->id)}}</h4>
                                                @endif
                                                <h3>Available Fund: ${{$campaign->available_fund}}</h3>

                                                <p><a href="{{url('admin/campaign/'.$campaign->id.'/withdraw')}}" class="btn btn-primary">Withdraw Now</a></p>

                                                <div class="table-responsive">
                                                    <table id="product-table_wrapper" class="table table-striped table-hover products dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Withdraw Method</th>
                                                            <th>Account</th>
                                                            <th>Withdraw Amount</th>
                                                            <th>Charge</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @forelse(\App\Campaign::campWithdraws($campaign->id) as $withdraw)
                                                            <tr>
                                                                <td>{{$withdraw->created_at}}</td>
                                                                <td>{{$withdraw->method}}</td>
                                                                @if($withdraw->method != "Bank")
                                                                    <td>{{$withdraw->acc_email}}</td>
                                                                @else
                                                                    <td>{{$withdraw->iban}}</td>
                                                                @endif
                                                                <td>{{$settings[0]->currency_sign}}{{$withdraw->amount}}</td>
                                                                <td>{{$settings[0]->currency_sign}}{{$withdraw->fee}}</td>
                                                                <td><label class="label label-default">{{ucfirst($withdraw->status)}}</label></td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="6">No Withdrawals Made.</td>
                                                            </tr>
                                                        @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('footer')

@stop