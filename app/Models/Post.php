<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
    ];
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    // public function customer() {
    //     return $this->belongsTo(CustomerModel::class);
    // }
}
