<?php

namespace App\Models;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'content',
        'since',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'video_1',
        'video_2',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
