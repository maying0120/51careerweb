<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
      'expected_countries' => 'array',
      'expected_states' => 'array',
      'expected_cities' => 'array',
      'skills' => 'array'
  ];
}
