<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_id',
        'name',
        'designation',
        'image',
        'company',
        'email',
        'phone_1',
        'phone_2',
        'website_link',
        'google_map_link',
        'address',
        'is_redirect',
        'qr',
    ];
}
