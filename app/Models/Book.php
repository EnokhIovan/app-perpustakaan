<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'stok',
        'category_id',
        'sampul',
    ];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function loanItems(): HasMany
    {
        return $this->hasMany(loanItems::class);
    }
}
