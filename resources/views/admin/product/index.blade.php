@extends('layout.admin')
@section('content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Danh sách sản phẩm</h1>
        <a href="{{ route('product.create') }}" class="btn btn-success" style="padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;">
            + Thêm sản phẩm mới
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success" style="padding: 15px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá (VNĐ)</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-info" style="padding: 5px 10px; background: #17a2b8; color: white; text-decoration: none; border-radius: 3px; margin-right: 5px;">
                            Xem
                        </a>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning" style="padding: 5px 10px; background: #ffc107; color: #212529; text-decoration: none; border-radius: 3px; margin-right: 5px;">
                            Sửa
                        </a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="padding: 5px 10px; background: #dc3545; color: white; border: none; border-radius: 3px; cursor: pointer;">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">
                        Chưa có sản phẩm nào. <a href="{{ route('product.create') }}">Thêm sản phẩm mới</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection