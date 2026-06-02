<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['name_pembeli', 'category_id'])]
class Brand extends Model
{
    // Mengaktifkan fitur factory untuk model ini
    use HasFactory; 

    /**
     * Hubungan Relasi: Brand milik sebuah Category
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}