<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Experience
 *
 * @property-read Collection<int, Level> $levels
 * @property-read int|null $levels_count
 * @property-read Collection<int, Position> $positions
 * @property-read int|null $positions_count
 * @method static Builder|Experience newModelQuery()
 * @method static Builder|Experience newQuery()
 * @method static Builder|Experience onlyTrashed()
 * @method static Builder|Experience query()
 * @method static Builder|Experience withTrashed()
 * @method static Builder|Experience withoutTrashed()
 * @mixin Eloquent
 */
class Experience extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return HasMany
     */
    public function positions(): HasMany
    {
        return $this->hasMany(Position::class);
    }

    /**
     * @return HasMany
     */
    public function levels(): HasMany
    {
        return $this->hasMany(Level::class);
    }
}
