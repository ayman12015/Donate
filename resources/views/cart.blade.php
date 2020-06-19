@extends('includes.masterpage')

@section('content')
    <section class="shoping-cart-list relative">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="cart-donation-method">
                        <div class="methods-header primary-color">
                            <h5 style="color: #020202;text-align: center;width: 100%;">سلة التبرعات</h5>
    
                        </div>
    
    
                    </div>
                    <nav class="donation-listSection">
                        <ul class="cartList">
                            <li>
    
                                <div class="list-item-info">
                                    <div class="name">شراء الدواء للأطفال (<span>
                                            1 </span>)</div>
                                    <div class="type">المشاريع</div>
                                    <div class="country"></div>
                                </div>
                                <div class="reward-content">
                                    <select name="option['7352'][option_id][466]" onchange="donationUserInput(this.id)"
                                        class="selectpicker" id="7352">
                                        <option value="105" label="1" data-cart_id="7352">
                                            لصالحی </option>
                                    </select>
                                    <input type="text" style="display: none;" name="option['7352'][option_id][467]"
                                        value="اسم الشخص" id="text-donation-for-7352" class="form-control donation-for-user"
                                        placeholder="اسم الشخص" />
                                </div>
                                <div class="item-qty editable-price">
                                    <input type="text" class="form-control" name="option['7352'][option_id][465]"
                                        placeholder="SAR 200.00" value="200.00" />
                                    <span class="currency">
                                        SAR
                                    </span>
                                    <a onclick="" class="crossitem">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4">
                    <div class="shopingcart-widget relative">
                        <div class="widget-header">
                            <h5 style="font-size: 25px;"></h5>
                            <div class="currency-amount">
                                <span>الإجمالي 200 ريال</span>
                                <span style="color: #82b653;"></span>
                            </div>
                        </div>
                        <div style="display: none;" class="widget-content">
                            <div class="paymentMethod">
                                <table style="display: none;" class="table table-bordered">
                                    <tr>
                                        <td class="text-right"><strong>الاجمالي:</strong></td>
                                        <td class="text-right">SAR 200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>الاجمالي النهائي:</strong></td>
                                        <td class="text-right">SAR 200.00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="help-widget">
                            <div class="helpbtns">
                                <a href="javascript:updateCart()" class="btn btn-primary" tabindex="0"><i
                                        class="fa fa-heart"></i>
                                    إتمام التبرع
                                </a>
                            </div>
                        </div>
                        <div id="ajaxLoader">
                            <i class="fa fa-spin fa-spinner" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('footer')

@stop
