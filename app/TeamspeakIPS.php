<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamspeakIPS extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
    protected $table = 'teamspeakips';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ips',
    ];
}
