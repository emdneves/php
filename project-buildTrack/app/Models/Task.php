<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'article',
        'cost',
        'measure',
        'type',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'cost' => 'decimal:2',
    ];

    /**
     * Get the category associated with the task.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the users associated with the task.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get the budgets associated with the task.
     */
    public function budgets()
    {
        return $this->belongsToMany(Budget::class)->withPivot('quantity');
    }
}
