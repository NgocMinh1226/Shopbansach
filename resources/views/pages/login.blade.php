@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<div style="margin-top: 150px;"></div>
  <!-- MAIN CONTENT -->
  <main class="authen-section">
    <div class="authen-container">
      <div class="authen-nav margin-bottom-lg">
        <ul class="authen-nav__list">
          <li class="authen-nav__item open">
            <a class="authen-nav__link login" href="{{URL::to('/dangnhap')}}">Đăng nhập</a>
          </li>
          <li class="authen-nav__item">
            <a class="authen-nav__link register" href="{{URL::to('/dangky')}}">Đăng ký</a>
          </li>
        </ul>
      </div>

      <div class="authen-body__login show">
        <h3 class="heading-tertiary login-heading">Truy cập tài khoản</h3>
        <form class="authen-form" action="#" method="POST">
          <div class="form-control">
            <label class="margin-bottom-sm">Email đăng nhập</label>
            <input type="email" name="username" placeholder="HongBeBong" />
          </div>

          <div class="form-control">
            <label class="margin-bottom-sm">Mật khẩu</label>
            <input type="password" name="password" />
          </div>

          <button class="btn btn--radius center">Đăng nhập</button>
          <a href="#" class="forget-password center">Quên mật khẩu ?</a>
        </form>

        <div class="oauth">
          <h4 class="sign-in-with__text heading-4">Đăng nhập với...</h4>

          <div class="oauth-logos">
            <img class="oauth-logo__img" src="{{asset('public/frontend/imgs/oauth-logos/google.jpeg')}}" alt="google logo" />

            <img class="oauth-logo__img" src="{{asset('public/frontend/imgs/oauth-logos/facebook.jpeg')}}" alt="facebook logo" />

            <img class="oauth-logo__img" src="{{asset('public/frontend/imgs/oauth-logos/twitter.jpeg')}}" alt="twitter logo" />
          </div>
        </div>
      </div>
    </div>
  </main>


@endsection

