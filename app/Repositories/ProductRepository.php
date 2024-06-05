<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements RepositoryInterface
{
    public function create(array $data)
    {
        return Product::create($data);
    }

    public function edit(array $data)
    {
        $product = Product::findOrFail($data['id']);
        unset($data['id']); // Xóa id vì không cần thiết cho việc chỉnh sửa
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return true;
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function search(array $criteria)
    {
        // Thực hiện tìm kiếm dựa trên tiêu chí (criteria) và trả về các bản ghi phù hợp
        // Ví dụ:
        return Product::where('name', 'like', '%' . $criteria['keyword'] . '%')->get();
    }

    public function all()
    {
        return Product::all();
    }
}
