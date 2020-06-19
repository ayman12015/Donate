@extends('includes.masterpage')

@section('content')

    <section class="login-area" style="">
    <div class="container">
        <ul class="breadcrumb">

        </ul>
        <div class="row">
            <div id="content" class="col-sm-12" dir="rtl">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>تسجيل جديد</h2>
                            <p><strong style="font-size: 15px;">تسجيل حساب جديد</strong></p>
                            <p style="font-size: 15px;">لكي تقوم بإنهاء الطلب قم بإنشاء حساب جديد معنا، فهو يُمكنك من
                                الشراء بصورة أسرع و متابعة
                                طلبيات الشراء التي تقدمت بها, و مراجعة سجل الطلبيات القديمة واسعتراض الفواتير وغير ذلك
                                الكثير...</p>
                            <a href="{{route('user.reg')}}" class="btn btn-primary">متابعة</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well"> 
                            <h2> {{$language->log_in}}</h2>
                            <p style="font-size: 15px;"><strong>إذا كنت تملك حساب مسبق في الموقع، فتفضل بتسجيل
                                    دخولك...</strong></p>
                            <form action="{{ route('user.login.submit') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label" for="input-email">البريد الإلكتروني:</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Type Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">كلمة المرور:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Type Password" required>
                                    <a href="{{route('user.forgotpass')}}">نسيت كلمة
                                        المرور؟</a></div>
                                        <div id="resp">
                                @if ($errors->has('password'))

                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                            </div>
                                <button type="submit" class="btn login-btn" name="button">{{$language->log_in}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


@stop

@section('footer')

@stop