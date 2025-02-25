@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell">
    <div class="sell__content">
        <form class="form" action="/product/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="sell__title">
            <h2>商品の出品</h2>
            </div>
            <div class="form__image">
                <span class="form__image--label">商品画像</span>
                <div class="form__image--frame">
                    <label for="item-image" class="form__image--file">画像を選択する</label>
                    <input class="form__image--file_input" id="item-image" type="file" name="image">
                </div>
            </div>
            <div class="form__status">
                <div class="form__status-title">
                    商品の詳細
                </div>
                <div class="form__status--category">
                    <div class="form__status--category_title">
                        カテゴリー
                    </div>
                    <div class="form__status--category_tag">
                        @foreach($categories as $category)
                        <div class="form__status--category_item">
                            <label class="form__status--category_tag" for="{{ $category->name }}"><input class="form__status--category_tag-input" type="checkbox" id="{{ $category->name }}" name="category_ids[]" value="{{ $category->id }}">
                                <span class="form__status--category_tag-label">{{ $category->name }}</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form__status--state">
                <div class="form__status--state_title">
                    商品の状態
                </div>
                <select class="form__status--state_select" name="status" >
                    <option class="form__status--state_select-tag" value="">選択してください</option>
                    <option value="良好">良好</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="状態が悪い">状態が悪い</option>
                </select>
            </div>
            <div class="form__item--description">
                <div class="form__item--description_title">
                    商品名と説明
                </div>
                <div class="form__item--description_name">
                    <span class="form__item--description_name-title">商品名</span>
                    <textarea class="form__item--description_name-input" name="name" ></textarea>
                </div>
                <div class="form__item--description_explain">
                    <span class="form__item--description_explain-title">商品の説明</span>
                    <textarea class="form__item--description_explain-input" name="description" ></textarea>
                </div>
                <div class="form__item--description_price">
                    <span class="form__item--description_price-title">販売価格</span>
                    <textarea class="form__item--description_price-input" name="price" placeholder="¥"></textarea>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">出品する</button>
            </div>
        </form>
    </div>
</div>
@endsection