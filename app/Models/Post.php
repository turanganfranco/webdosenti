<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('excerpt', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        //versi callback
        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     return $query->whereHas('category', function($query) use($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        //versi aerofunction function=fn and simpler syntax
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );
        
        $query->when($filters['author'] ?? false, fn($query, $author) => 
                $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //function user->author dan ditambahkan parameter 'user_id'
    //dalam blade post dan posts, user juga diganti di dalam {{...-> "user ke author" ->...}} 
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}