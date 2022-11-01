<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    /**
     * Delete post image from storage
     *
     * @return void
     */
    public function deleteImage()
    {

        Storage::delete($this->image);

    }


    public function articleCategory()
    {

        return $this->belongsTo(ArticleCategory::class);
    }

    public function articleTags(): BelongsToMany
    {

        return $this->belongsToMany(ArticleTag::class);
    }


    /**
     * check if post has a tag
     *
     *
     * @param $tagId
     * @return bool
     */
    public function hasTag($tagId)
    {

        return in_array($tagId, $this->articleTags->pluck('id')->toArray());
    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }


    public function scopeSearched($query)
    {

        $search = request()->query('search');



        return $query->where('title', 'LIKE', "%{$search}%");
    }
}
