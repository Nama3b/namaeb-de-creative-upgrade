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
 * App\Models\Project
 *
 * @property-read Collection<int, Language> $languages
 * @property-read int|null $languages_count
 * @property-read Collection<int, Position> $positions
 * @property-read int|null $positions_count
 * @method static Builder|Project newModelQuery()
 * @method static Builder|Project newQuery()
 * @method static Builder|Project onlyTrashed()
 * @method static Builder|Project query()
 * @method static Builder|Project withTrashed()
 * @method static Builder|Project withoutTrashed()
 * @mixin Eloquent
 */
class Project extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return HasMany
     */
    public function positions(): HasMany
    {
        return $this->HasMany(Position::class);
    }

    public function languages(): HasMany
    {
        return $this->HasMany(Language::class);
    }
}
