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
      'expect_locations' => 'array',
      'expect_positions' => 'array',
      'skills' => 'array'
  ];
}
