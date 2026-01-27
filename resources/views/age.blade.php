<h2>Kiểm tra tuổi</h2>

<form method="POST" action="/check-age">
    @csrf
    <input type="number" name="age" placeholder="Nhập tuổi">
    <button>Kiểm tra</button>
</form>
