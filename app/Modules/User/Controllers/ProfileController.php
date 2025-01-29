<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Models\UserProfile;

class ProfileController extends Controller
{


    public function show()
    {
        return UserProfile::find(1);
    }

    public function update($args)
    {
        $userId = 1;
        try {
            $user = UserProfile::findOrFail($userId);
            $user->update($args);

            return ['status' => true, "message" => 'پروفایل بروزرسانی شد'];
        } catch (\Exception $e) {
            return ['status' => false, "message" => "کاربر پیدا نشد !"];
        }

    }
}
