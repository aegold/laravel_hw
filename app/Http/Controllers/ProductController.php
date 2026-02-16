<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Hiển thị form thêm mới sản phẩm
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Lưu sản phẩm mới vào database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    /**
     * Hiển thị chi tiết sản phẩm
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Hiển thị form chỉnh sửa sản phẩm
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', ['product' => $product]);
    }

    /**
     * Cập nhật sản phẩm trong database
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    /**
     * Xóa sản phẩm khỏi database
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }

    /**
     * Alias method cho create (giữ lại để tương thích với route cũ)
     */
    public function add()
    {
        return $this->create();
    }
}
