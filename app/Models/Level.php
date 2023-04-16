<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Level
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Experience|null $Experiences
 * @method static Builder|Level newModelQuery()
 * @method static Builder|Level newQuery()
 * @method static Builder|Level onlyTrashed()
 * @method static Builder|Level query()
 * @method static Builder|Level whereCreatedAt($value)
 * @method static Builder|Level whereDeletedAt($value)
 * @method static Builder|Level whereId($value)
 * @method static Builder|Level whereName($value)
 * @method static Builder|Level whereUpdatedAt($value)
 * @method static Builder|Level withTrashed()
 * @method static Builder|Level withoutTrashed()
 * @mixin Eloquent
 */
class Level extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function Experiences(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }
}
