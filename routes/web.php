<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return 'Laravel OK';
});

Route::prefix('product')->group(function () {
    Route::get('/',function(){
        $products = [
            ['id' => 1, 'name' => 'Product A'],
            ['id' => 2, 'name' => 'Product B'],
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })->where('id', '.*');
});

Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'NguyenThanhTrung',
    $mssv = '0073667'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});
