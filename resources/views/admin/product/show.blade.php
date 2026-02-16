<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .product-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .info-item {
            margin: 15px 0;
            font-size: 18px;
        }
        .info-label {
            font-weight: bold;
            color: #007bff;
        }
        .nav-link {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-link:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chi tiết sản phẩm</h1>
        
        <div class="product-info">
            <div class="info-item">
                <span class="info-label">Mã sản phẩm (ID):</span> {{ $product->id }}
            </div>
            <div class="info-item">
                <span class="info-label">Tên sản phẩm:</span> {{ $product->name }}
            </div>
            <div class="info-item">
                <span class="info-label">Giá (VNĐ):</span> {{ number_format($product->price, 0, ',', '.') }}
            </div>
            <div class="info-item">
                <span class="info-label">Số lượng:</span> {{ $product->stock }}
            </div>
            <div class="info-item">
                <span class="info-label">Ngày tạo:</span> {{ $product->created_at->format('d/m/Y H:i:s') }}
            </div>
            <div class="info-item">
                <span class="info-label">Ngày cập nhật:</span> {{ $product->updated_at->format('d/m/Y H:i:s') }}
            </div>
        </div>
        
        <div style="margin-top: 20px;">
            <a href="{{ route('product.edit', $product->id) }}" class="nav-link" style="background: #ffc107; color: #212529; margin-right: 10px;">
                ✏️ Chỉnh sửa
            </a>
            <a href="{{ route('product.index') }}" class="nav-link">← Về danh sách sản phẩm</a>
        </div>
    </div>
</body>
</html>

