<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Box\Models\Box;

class BoxController extends Controller
{
    public function all()
    {
        return Box::all();
    }

    public function get($args)
    {
        return Box::find($args["id"]);
    }

    public function create($args)
    {
        Box::create($args);

        return [
            "status" => true,
            "message" => "جعبه جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            Box::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "جعبه بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "جعبه پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            Box::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "جعبه حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "جعبه پیدا نشد"
            ];
        }
    }
}