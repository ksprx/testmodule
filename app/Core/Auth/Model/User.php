<?php

namespace App\Core\Auth\Model;

use App\Core\Traits\AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use AuthenticatableTrait;
}