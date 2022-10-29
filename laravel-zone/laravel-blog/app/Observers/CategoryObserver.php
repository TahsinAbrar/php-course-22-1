<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    # Model Observer: creating, created, updating, updated, deleting, deleted
    public function creating(Category $category)
    {
        $category->slug = Str::slug($category->name);
    }
}
