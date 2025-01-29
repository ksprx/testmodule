<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Category;

class CategoryController extends Controller
{
    public function all()
    {
        return Category::all();
    }

    public function get($args)
    {
        return Category::find($args["id"]);
    }

    public function create($args)
    {
        Category::create($args);

        return [
            "status" => true,
            "message" => "دسته‌بندی جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Category::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "دسته‌بندی بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "دسته‌بندی پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Category::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "دسته‌بندی حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "دسته‌بندی پیدا نشد"
            ];
        }
    }
}