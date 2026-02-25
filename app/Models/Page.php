<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use NodeTrait, HasTranslations;

    public array $translatable = [
        'title',
        'content',
        'content_header',
        'meta_title',
        'meta_description',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active',
        'parent_id',
        'title',
        'content',
        'content_header',
        'file_header',
        'meta_title',
        'meta_description',
        'meta_robots',
    ];
}
