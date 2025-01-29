<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Property;

class PropertyController extends Controller
{
    public function all()
    {
        return Property::all();
    }

    public function get($args)
    {
        return Property::find($args["id"]);
    }

    public function create($args)
    {
        Property::create($args);

        return [
            "status" => true,
            "message" => "ویژگی جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Property::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "ویژگی بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "ویژگی پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Property::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "ویژگی حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "ویژگی پیدا نشد"
            ];
        }
    }
}