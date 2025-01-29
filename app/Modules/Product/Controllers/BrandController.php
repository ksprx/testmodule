<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Brand;


class BrandController extends Controller
{
    public function all()
    {
        return Brand::all();
    }

    public function get($args)
    {
        return Brand::find($args["id"]);
    }

    public function create($args)
    {

        Brand::create($args);

        return [
            "status" => true,
            "message" => "برند جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Brand::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "برند بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => true,
                "message" => "برند پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Brand::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "برند حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => true,
                "message" => "برند پیدا نشد"
            ];
        }
    }
}