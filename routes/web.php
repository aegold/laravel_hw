<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/product/add', function () {
        return view('product.add');
    });
});

Route::get('/age', function () {
    return view('age');
});

Route::post('/check-age', function () {
    return 'ĐỦ TUỔI';
})->middleware('check.age');
