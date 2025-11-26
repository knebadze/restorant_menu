<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'name_uk',
        'slug',
        'description',
        'description_uk',
        'icon',
        'display_order',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'display_order' => 'integer',
    ];

    /**
     * Get the menu items for this category.
     */
    public function items(): HasMany
    {
        return $this->hasMany(Menu::class, 'category_id')
                    ->where('is_active', true)
                    ->orderBy('display_order');
    }

    /**
     * Get all items including inactive ones.
     */
    public function allItems(): HasMany
    {
        return $this->hasMany(Menu::class, 'category_id')
                    ->orderBy('display_order');
    }

    /**
     * Get the localized name based on current locale.
     */
    public function getLocalizedNameAttribute(): string
    {
        return app()->getLocale() === 'uk' ? $this->name_uk : $this->name;
    }

    /**
     * Get the localized description based on current locale.
     */
    public function getLocalizedDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'uk' ? $this->description_uk : $this->description;
    }

    /**
     * Scope a query to only include active categories.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order categories by display order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order');
    }
}
