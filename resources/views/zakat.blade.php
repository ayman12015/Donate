@extends('includes.masterpage')

@section('content')


<section class="zakat-calculation">
<div class="container">
<div class="calculaton-holder">
<div class="title-section"> 
</div>

</div>
<div class="content-info">
<p style="
    text-align: center;
    font-size: 14px;
    line-height: 1.6;
    color: #000;
">يمكنك الآن دفع الزكاة عبر فلذات ليعود نفعها على الأطفال المرضى الفقراء بمنطقة مكة المكرمة</p>
</div>
<div class="calculation-form">
<div class="form-elements">
<div class="row">
<div class="col-sm-12">
<div class="btn-group bootstrap-select">
<div class="dropdown-menu open" role="combobox">
<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
<li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text"> اختر السن </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
<li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text"> طريقة الدفع </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
<li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text"> طريقة الدفع </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
</ul>
</div>
</div>
</div>


</div>
<div id="sspSingle-80">
<div id="product">
<div class="zakat-widget">
<div class="widget-head">
<div class="header-item">احسب زكاتك</div>
<div class="header-item">الزكاة</div>
</div>
<div class="widget-body">
<div class="content-item">
<div class="form-group">
<input class="form-control" id="inputName2" placeholder="المبلغ" type="text" required>
</div>
</div>
<div class="content-item">
<div class="form-group">
<input type="text" data-price_field="orig_price_field-product_side" name="option[259]" value="" placeholder="قيمة الزكاة" id="inputName3" class="form-control" />
 </div>
</div>
</div>

</div>
<div class="btn-section">

<button class="btn btn-secondary" style="color: #fff;
    background-color: #74de44;" id="zakah-button">
ادفع زكاتك</button>
</div>
<input name="product_id" value="80" type="hidden">
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
