@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<div class="product">
    <div class="product__img">
        <img src="{{ asset('storage/'.$item->image) }}" alt="" width="600px" height="600px">
    </div>
    <div class="product__content">
        <h1 class="product__name">{{ $item->name }}</h1>
        <p class="product__price">¥<span class="product__price-font">{{ number_format($item->price) }}</span>(税込)</p>
        <a class="product__purchase" href="{{ '/purchase/'.$item->id }}">
            <button class="product__purchase-button">購入手続きへ</button>
        </a>
        <div class="product__description">
            <h2 class="product__description-title">商品説明</h2>
            <p class="product__description-color">カラー：{{ $item->color }}</p>
            <p class="product__description-state">{{ $item->description }}</p>
        </div>
        <div class="product__information">
            <h2 class="product__information-title">商品の情報</h2>
            <div class="product__information-category">
                <p class="product__information-category_title">カテゴリー</p>
                <p class="product__information-category_item"></p>
            </div>
            <div class="product__information-category">
                <p class="product__information-category_title">商品の状態</p>
                <p class="product__information-category_item">{{ $item->status }}</p>
            </div>
        </div>
        <div class=""product__comment>
                <h2 class="product__comment-title">コメント</h2>
                <form class="form" action="">
                    @csrf
                    <div class="form__comment">
                        <div class="form__comment-title">
                            <span class="form__label--item">商品へのコメント</span>
                        </div>
                        <textarea name="comment" class="form__comment-input"></textarea>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">コメントを送信する</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection