<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

#[Table('book_user', incrementing: true)]
#[Fillable(['book_id', 'user_id', 'status', 'rating', 'review', 'requested_at', 'borrowed_at', 'returned_at', 'return_requested_at'])]
class BookUser extends Pivot
{
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
