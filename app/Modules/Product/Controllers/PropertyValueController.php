<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\PropertyValue;

class PropertyValueController extends Controller
{
    public function all()
    {
        return PropertyValue::all();
    }

    public function get($args)
    {
        return PropertyValue::find($args["id"]);
    }

    public function create($args)
    {
        PropertyValue::create($args);

        return [
            "status" => true,
            "message" => "مقدار ویژگی جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            PropertyValue::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "مقدار ویژگی بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "مقدار ویژگی پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            PropertyValue::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "مقدار ویژگی حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "مقدار ویژگی پیدا نشد"
            ];
        }
    }
}