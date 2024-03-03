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
          <li class="authen-nav__item">
            <a class="authen-nav__link login" href="login.html">Đăng nhập</a>
          </li>
          <li class="authen-nav__item open">
            <a class="authen-nav__link register" href="register.html">Đăng ký</a>
          </li>
        </ul>
      </div>
      <div class="authen-body__register">
        <h3 class="heading-tertiary login-heading">Đăng ký tài khoản</h3>

        <!-- FORM REGISTER-->
        <form class="authen-form" action="#" method="POST">
          <div class="error-msg-box">
            <p class="error-msg">Bi ngu roi</p>
          </div>
          <div class="form-control">
            <label class="margin-bottom-sm" for="fullName">Họ và tên</label>
            <input type="text" name="fullName" id="fullName" th:field="*{fullName}" placeholder="Bui Thanh Duy" />
          </div>

          <div class="form-control">
            <label class="margin-bottom-sm" for="email">Email đăng nhập</label>
            <input type="email" name="email" id="email" placeholder="dtb174@gmail.com" />
          </div>

          <div class="form-control">
            <label class="margin-bottom-sm" for="password">Mật khẩu mới</label>
            <input type="password" name="password" id="password" />
          </div>

          <div class="form-control">
            <label class="margin-bottom-sm" for="confirm-password">Nhập lại mật khẩu</label>
            <input type="password" name="confirm-password" id="confirm-password" />
          </div>

          <button type="submit" class="btn btn--radius center">
            Đăng ký
          </button>
        </form>
      </div>
    </div>
  </main>

@endsection
