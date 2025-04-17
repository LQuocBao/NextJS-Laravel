<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // @foreach ($reviews as $index => $review)
    //                                 <div class="review">
    //                                     <p><strong>User:</strong> {{ $reviewNames[$index] ?? 'Anonymous' }}</p>
    //                                     <p><strong>Comment:</strong> {{ $review->comment }}</p>
    //                                     <p><strong>Rating:</strong> {{ $review->rating }}</p>
    //                                 </div>
    //                             @endforeach
}
