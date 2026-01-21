<h2>Danh sách sản phẩm</h2>

<ul>
@foreach ($products as $p)
    <li>{{ $p['name'] }}</li>
@endforeach
</ul>

<a href="{{ route('product.add') }}">Thêm sản phẩm</a>
