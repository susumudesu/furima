@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="home__content">
    <nav class="home-header">
        <ul class="home-nav">
            <li class="home-nav__item">
                <a class="home-nav__link" href="/">おすすめ</a>
            </li>
            <li class="home-nav__item">
                <form class="home-nav__mylist"action="/">
                    @csrf
                    <a class="home-nav__mylist-link" href="/">マイリスト</a>
                </form>
            </li>
        </ul>
    </nav>
    <div class="product__card">
        @foreach($items as $item)
        <a class="card" href="{{ '/item/'.$item->id }}">
            <div class="card__img">
                <img src="{{ asset('storage/'.$item->image) }}" alt=""　width="290px" height="320px">
            </div>
            <div class="card__name">
                <p class="card__name">{{ $item->name }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection