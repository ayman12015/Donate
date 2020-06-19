@extends('includes.masterpage')

@section('content')


    
    <!-- Starting of faq area -->
    <div class="container" style="    width: 778px;">
            <div class="calculaton-holder">
                <div class="title-section">
                </div>
            </div>
            <div class="calculation-form" dir="rtl">
                <div class="form-elements">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="btn-group bootstrap-select">
                                <div class="dropdown-menu open" role="combobox">
                                    <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                        <li data-original-index="0" class="selected"><a tabindex="0" class=""
                                                data-tokens="null" role="option" aria-disabled="false"
                                                aria-selected="true"><span class="text"> اختر السن </span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                        <li data-original-index="1"><a tabindex="0" class="" data-tokens="null"
                                                role="option" aria-disabled="false" aria-selected="false"><span
                                                    class="text"> طريقة الدفع </span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                        <li data-original-index="2"><a tabindex="0" class="" data-tokens="null"
                                                role="option" aria-disabled="false" aria-selected="false"><span
                                                    class="text"> طريقة الدفع </span><span
                                                    class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div id="sspSingle-146">
                        <div id="product">
                            <div class="zakat-widget">
                                <div class="widget-head">
                                    <div class="header-item" style="    font-weight: bold;">بطاقة الإهداء</div>
                                </div>
                                <form id="gif-form">
                                    <div class="widget-body">
                                        <div class="content-item"><input required type="text" name="from-name"
                                                placeholder="اسم المهدي في البطاقة" value="" id="from-name"
                                                class="form-control" /> </div>
                                    </div><br>
                                    <div class="widget-body">
                                        <div class="content-item"><input required type="text" name="to-name"
                                                placeholder="اسم المهدى إليه" value="" id="to-name"
                                                class="form-control" /> </div>
                                    </div><br>
                                    <div class="widget-body">
                                        <div class="content-item"><input required type="number" name="to-phone"
                                                placeholder="رقم جوال المهدى إليه (9665XXXXXXXX) " value=""
                                                id="to-phone" class="form-control" />
                                            <p style="margin-bottom: -5px;  margin-top: 5px; font-weight: bold;">سيصل الإهداء إلى جوال المهدى له</p><br>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="content-item">
                                            <div class="form-group">
                                                <input required type="text"
                                                    data-price_field="orig_price_field-product_side" name="option[455]"
                                                    value="" placeholder="قيمة التبرع" id="inputName3"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="content-item">
                                            <select required name="gift-thame" id="gift-thame" class="form-control"
                                                name="gift-thame" onchange="mygift(event)">
                                                <option selected disabled value="">نموذج الإهداء</option>
                                                <option value="1">إلى والدي</option>';
                                                <option value="2">إلى أمي</option>';
                                                <option value="3">إلى أخي</option>';
                                                <option value="4">إلى أختي</option>';
                                                <option value="5">إلى صديقي</option>';
                                                <option value="6">إلى صديقتي</option>';
                                                <option value="7">عيادة مريض</option>';
                                                <option value="8">عيدية</option>';
                                                <option value="9">إلى زوجي</option>';
                                                <option value="10">إلى زوجتي</option>';
                                                <option value="11">تهنئة بمولود</option>';
                                                <option value="12">تهنئة بتخرج</option>';
                                                <option value="13">تهنئة بالنجاح</option>';
                                            </select></div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="content-item"><img id="giftc" src="" width="100%"></div>
                                    </div>
                            </div>
                            <div class="bt" "n-section">
                                <button type="submit" class="btn btn-secondary" style="background-color: #77bd57; color: #fff; width: 83px;" id="gift-button">
                                    إهداء</button>
                            </div>
                            <input name="product_id" value="146" type="hidden">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    <!-- Ending of faq area -->
@stop

@section('footer')

@stop