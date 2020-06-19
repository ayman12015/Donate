@extends('includes.masterpage')

@section('content')


    <section class="login-area">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://falathat.org/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
            <li><a href="https://falathat.org/index.php?route=account/account">الحساب</a></li>
            <li><a href="https://falathat.org/index.php?route=account/register">تسجيل</a></li>
        </ul>
        <div class="row" direction="rtl">
            <div id="content" class="col-sm-12" dir="rtl">
                <h1>  {{$language->sign_up}}</h1>
                <p>إذا كان لديك حساب معنا ، الرجاء الدخول إلى <a
                        href="{{url('user/login')}}"">صفحة تسجيل الدخول</a>.</p>
                <form action="{{route('user.reg.submit')}}" method="post"
                    enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                            <div class="form-gro
                    <fieldset id="account">
                        <legend>معلوماتك الشخصية</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">مجموعة العميل</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked" />
                                        الإفتراضي</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname"> الاسم الكامل</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="الاسم الكامل" required> 
                            </div>
                        </div>
                     
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">رقم الهاتف أو الجوال</label>
                            <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف أو الجوال">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">البريد الالكتروني</label>
                            <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="الايميل" required>
                            </div>
                        </div>
                        

                    </fieldset>
                    <fieldset>
                        <legend>كلمة المرور الخاصة بك</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">كلمة المرور</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="كلمه المرور" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">تأكيد كلمة المرور</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمه المرور " required>
                            </div>
                        </div>
                    </fieldset>
                    <div id="resp">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>* {{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>* {{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>* {{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                    
                    <div class="buttons">
                        <div class="pull-right">
                            &nbsp;
                            <button type="submit" class="btn login-btn" name="button">{{$language->sign_up}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>


@stop

@section('footer')

@stop