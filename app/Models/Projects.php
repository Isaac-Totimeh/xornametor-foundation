<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UuidTrait;
use Illuminate\Support\Str;

class Projects extends Model
{
    use HasFactory;
    use UuidTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'title',
        'description',
        'date',
        'content',
        'image',
    ];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($projects) {
            $projects->slug = Str::slug($projects->title);
        });

        static::updating(function ($projects) {
            if ($projects->isDirty('title')) {
                $projects->slug = Str::slug($projects->title);
            }
        });
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
