<?php

namespace App\Modules\Product\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Product\Models\CategoryRelationship;

class CategoryRelationshipController extends Controller
{
    public function all()
    {
        return CategoryRelationship::all();
    }

    public function get($args)
    {
        return CategoryRelationship::find($args["id"]);
    }

    public function create($args)
    {
        CategoryRelationship::create($args);

        return [
            "status" => true,
            "message" => "رابطه جدید ایجاد شد"
        ];
    }

    public function update($args)
    {
        try {
            CategoryRelationship::findOrFail($args['id'])->update($args);
            return [
                "status" => true,
                "message" => "رابطه بروزرسانی شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "رابطه پیدا نشد"
            ];
        }
    }

    public function delete($args)
    {
        try {
            CategoryRelationship::findOrFail($args['id'])->delete();
            return [
                "status" => true,
                "message" => "رابطه حذف شد"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => "رابطه پیدا نشد"
            ];
        }
    }
}