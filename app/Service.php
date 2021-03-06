<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Service
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereUpdatedAt($value)
 */
class Service extends Model
{
    protected $fillable = ["name", "points"];
}
