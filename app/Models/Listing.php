<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'imade_id',
        'brand',
        'model',
        'color',
        'production_year',
        'mileage',
        'fuel_type',
        'transmission',
        'type',
        'image',
        'description',
        'price',
        'views',
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('brand', 'like', '%' . request('search') . '%')
                ->orWhere('model', 'like', '%' . request('search') . '%')
                ->orWhere('color', 'like', '%' . request('search') . '%')
                ->orWhereHas('user', function ($query) use ($filters) {
                    $query->where('name', 'like', '%' . $filters['search'] . '%');
                });
        }
    }
}
