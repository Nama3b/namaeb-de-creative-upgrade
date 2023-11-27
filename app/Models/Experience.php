<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Experience
 *
 * @property int $id
 * @property string $introduce
 * @property string $title
 * @property string $content
 * @property int $position_id
 * @property int $level_id
 * @property string|null $technology_using
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection<int, Level> $levels
 * @property-read int|null $levels_count
 * @property-read Collection<int, Position> $positions
 * @property-read int|null $positions_count
 * @method static Builder|Experience newModelQuery()
 * @method static Builder|Experience newQuery()
 * @method static Builder|Experience onlyTrashed()
 * @method static Builder|Experience query()
 * @method static Builder|Experience whereContent($value)
 * @method static Builder|Experience whereCreatedAt($value)
 * @method static Builder|Experience whereDeletedAt($value)
 * @method static Builder|Experience whereId($value)
 * @method static Builder|Experience whereIntroduce($value)
 * @method static Builder|Experience whereLevelId($value)
 * @method static Builder|Experience wherePositionId($value)
 * @method static Builder|Experience whereTechnologyUsing($value)
 * @method static Builder|Experience whereTitle($value)
 * @method static Builder|Experience whereUpdatedAt($value)
 * @method static Builder|Experience withTrashed()
 * @method static Builder|Experience withoutTrashed()
 * @mixin Eloquent
 */
class Experience extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function positions(): BelongsTo
    {
        return $this->BelongsTo(Position::class);
    }

    /**
     * @return BelongsTo
     */
    public function levels(): BelongsTo
    {
        return $this->BelongsTo(Level::class);
    }
}
