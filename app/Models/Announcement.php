<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Announcement extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'title',
        'price',
        'description',
        'user_id',
        'category_id',
    ];


    public function toSearchableArray()
    {
        $category = $this->category;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }

    public function images()
    {
        return $this->hasMany(AnnouncementImage::class);
    }
}
