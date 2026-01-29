<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'approved_at', 'expires_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}