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
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Project|null $projects
 * @method static Builder|Language newModelQuery()
 * @method static Builder|Language newQuery()
 * @method static Builder|Language onlyTrashed()
 * @method static Builder|Language query()
 * @method static Builder|Language whereCreatedAt($value)
 * @method static Builder|Language whereDeletedAt($value)
 * @method static Builder|Language whereId($value)
 * @method static Builder|Language whereName($value)
 * @method static Builder|Language whereUpdatedAt($value)
 * @method static Builder|Language withTrashed()
 * @method static Builder|Language withoutTrashed()
 * @mixin Eloquent
 */
class Language extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function projects(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
