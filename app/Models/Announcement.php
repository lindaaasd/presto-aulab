<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'price',
        'description',
        'img',
        'user_id',
        'category_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount() {
        return Announcement::where('is_accepted', null)-> count();
        }
    
    
    
}
