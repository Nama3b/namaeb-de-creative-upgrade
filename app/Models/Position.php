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
 * App\Models\Position
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|Position newModelQuery()
 * @method static Builder|Position newQuery()
 * @method static Builder|Position onlyTrashed()
 * @method static Builder|Position query()
 * @method static Builder|Position whereCreatedAt($value)
 * @method static Builder|Position whereDeletedAt($value)
 * @method static Builder|Position whereId($value)
 * @method static Builder|Position whereName($value)
 * @method static Builder|Position whereUpdatedAt($value)
 * @method static Builder|Position withTrashed()
 * @method static Builder|Position withoutTrashed()
 * @mixin Eloquent
 */
class Position extends Model
{
    use HasFactory, SoftDeletes;

}
