<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;

class UserController extends Controller
{

    public function show()
    {
        return User::find(1);
    }

    public function update($args)
    {
        $userId = 1;
        try {
            $user = User::findOrFail($userId);
            $user->update($args["user"]);

            return ['status' => true, "message" => 'اطلاعات کاربری بروزرسانی شد'];
        } catch (\Exception $e) {
            return ['status' => false, "message" => "کاربر پیدا نشد !"];
        }

    }
}
