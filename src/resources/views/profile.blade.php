@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__content">
    <nav class="profile-header">
        <ul class="profile-nav">
            <li class="profile-nav__item">
                <a class="profile-nav__link" href="/">出品した商品</a>
            </li>
            <li class="profile-nav__item">
                <form class="profile-nav__mylist"action="/">
                    @csrf
                    <a class="profile-nav__mylist-link" href="/">購入した商品</a>
                </form>
            </li>
        </ul>
    </nav>
    
</div>
@endsection