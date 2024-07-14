<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Query\Builder;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikels';
    protected $fillable = ['title','writer','paragraph','category','image'];

    // public function writer() : BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function scopeFilter(Builder $query): void
    {
        $query->where('title', 'like', '%' . request('artikelSearch') . '%'); // sukses dibilang error panmmtek
    } 
}
