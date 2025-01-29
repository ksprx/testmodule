<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\PropertyType;

class PropertyTypeController extends Controller
{
    public function all()
    {
        return PropertyType::all();
    }

    public function get($args)
    {
        return PropertyType::find($args["id"]);
    }

    public function create($args)
    {
        PropertyType::create($args);

        return [
            "status" => true,
            "message" => "نوع ویژگی جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            PropertyType::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "نوع ویژگی بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "نوع ویژگی پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            PropertyType::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "نوع ویژگی حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "نوع ویژگی پیدا نشد"
            ];
        }
    }
}