<?php

namespace App\Modules\Product\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Product;

class ProductController extends Controller
{
    public function all()
    {
        return Product::all();
    }

    public function get($args)
    {
        return Product::find($args["id"]);
    }

    public function create($args)
    {
        Product::create($args);

        return [
            "status" => true,
            "message" => "محصول جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Product::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "محصول بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "محصول پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Product::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "محصول حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "محصول پیدا نشد"
            ];
        }
    }
}
