<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Words
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $word
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Words whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Words whereWord($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Words whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Words whereUpdatedAt($value)
 */
class Words extends Model
{
    public $table = 'word';

    public $fillable = [
      'word'
    ];
}
