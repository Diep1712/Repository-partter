<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function addProduct(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description'=>'required',
        ]);

        // Thêm sản phẩm vào cơ sở dữ liệu
        $product = $this->productRepository->create($validatedData);

        // Chuyển hướng đến trang danh sách sản phẩm và thông báo thành công
        return redirect()->route('products.store')->with('success', 'Product added successfully.');
    }

 
    public function edit(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description'=>'required',
        ]);

        // Chỉnh sửa thông tin sản phẩm
        $product = $this->productRepository->edit(array_merge(['id' => $id], $validatedData));

        // Chuyển hướng đến trang danh sách sản phẩm và thông báo chỉnh sửa thành công
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        // Xóa sản phẩm
        $this->productRepository->delete($id);

        // Chuyển hướng đến trang danh sách sản phẩm và thông báo xóa thành công
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ request
        $keyword = $request->input('keyword');

        // Tìm kiếm sản phẩm
        $products = $this->productRepository->search(['keyword' => $keyword]);

        // Hiển thị kết quả tìm kiếm
        return view('searchResults', compact('products'));
    }

    public function index()
    {
        // Lấy tất cả sản phẩm
        $products = $this->productRepository->all();

        // Hiển thị trang danh sách sản phẩm
        return view('productList', compact('products'));
    }
}
