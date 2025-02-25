@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase">
    <form class="form" action="/purchase/{itemId}" method="post">
        @csrf
        <div class="purchase__content">
            <div class="purchase__content--product">
                <div class="purchase__content--product_img">
                    <img src="{{ asset('storage/'.$item->image) }}" alt="" width="178px" height="178px">
                </div>
                <div class="purchase__content--product_detail">
                    <div class="purchase__content--product_name">{{ $item->name }}</div>
                    <div class="purchase__content--product_price">¥{{ number_format($item->price) }}</div>
                </div>
            </div>
            <div class="purchase__content--payment">
                <div class="purchase__content--payment_title">支払い方法</div>
                <select class="form__payment--select" name="$payment" >
                    <option class="form__payment--select_tag" value="">選択してください</option>
                    <option value="コンビニ支払い">コンビニ支払い</option>
                    <option value="カード支払い">カード支払い</option>
                </select>
            </div>
            <div class="purchase__content--address">
                <div class="purchase__content--address_menu">
                    <div class="purchase__content--address_title">配送先</div>
                    <div class="purchase__content--address_edit">
                        <a class="purchase__content--address_edit-link" href="{{ '/purchase/address/'.$item->id }}">変更する</a>
                    </div>
                </div>
                <div class="purchase__content--address-home">
                    〒 {{ Auth::user()->postcode }}
                </div>
                <div class="purchase__content--address-home">
                    {{ Auth::user()->address }}
                </div>
                <div class="purchase__content--address-home">
                    {{ Auth::user()->building }}
                </div>
            </div>
        </div>
        <div class="purchase__confirmation">
            <table class="purchase__confirmation--table">
                <tr class="purchase__confirmation--table_content">
                    <th class="purchase__confirmation--table_content-title">商品代金</th>
                    <th class="purchase__confirmation--table_content-detail">¥{{ number_format($item->price) }}</th>
                </tr>
                <tr class="purchase__confirmation--table_content">
                    <th class="purchase__confirmation--table_content-title">支払い方法</th>
                    <th class="purchase__confirmation--table_content-detail">コンビニ支払い</th>
                </tr>
            </table>
            <button class="form__button--submit" type="submit">購入する</button>
        </div>
    </form>
</div>
@endsection