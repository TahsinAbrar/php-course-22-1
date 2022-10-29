<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

//    protected $table = 'articles';

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'author_name'
    ];

//    protected $guarded = [
//        'id',
//        'created_at',
//        'updated_at',
//    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
