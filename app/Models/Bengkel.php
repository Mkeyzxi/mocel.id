<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bengkel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter(Builder $query): void
    {
        // $query->where('workshop_name', 'like', '%' . request('bengkelSearch') . '%'); // sukses dibilang error panmmtek
        
        if (request('bengkelSearch')) {
            $query->where('workshop_name', 'like', '%' . request('bengkelSearch') . '%');
        }
        if (request('city')) {
            $query->where('city', request('city'));
        }

        if (request('workshop_category')) {
            $query->where('workshop_category', request('workshop_category'));
        }
    }
}
