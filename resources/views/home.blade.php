@if(Auth::check())
    <p>Xin chào {{ Auth::user()->name }}</p>

    <form method="POST" action="/auth/logout">
        @csrf
        <button>Đăng xuất</button>
    </form>
@else
    <a href="/auth/login">Đăng nhập</a>
    <a href="/auth/register">Đăng ký</a>
@endif