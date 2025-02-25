<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACH TECH~furima~</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          COACH TECH
        </a>
        <nav>
          <ul class="header-nav">
            <li class="header-nav__item">
              <form class="search-form" action="/" method="get">
              @csrf
                <input class="search-form__input" type="search" name="keyword" placeholder="なにをお探しですか？" value="{{ old('keyword') }}"/>
                <input class="search-form__input--submit" type="submit">
              </form>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">マイページ</a>
            </li>
            <li class="header-nav__item">
              @if (Auth::check())
              <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
              @else
              <li class="header-nav__item">
                <a class="header-nav__button" href="/login">ログイン</a>
                @endif
            <li class="header-nav__item">
              <a class="header-nav__sell" href="/product/register">出品</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
