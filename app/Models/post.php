<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  protected $fillable = ['title', 'content', 'status'];

  public const PAGINATE = 10;
}
