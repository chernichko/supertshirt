<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    public function author()
    {
        return $this->belongsTo(UserModel::class);
    }
}
