<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Models\Color;

class ColorController extends Controller
{
    public function all()
    {
        return Color::all();
    }

    public function get($args)
    {
        return Color::find($args["id"]);
    }

    public function create($args)
    {
        Color::create($args);

        return [
            "status" => true,
            "message" => "رنگ جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Color::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "رنگ بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "رنگ پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Color::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "رنگ حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "رنگ پیدا نشد"
            ];
        }
    }
}