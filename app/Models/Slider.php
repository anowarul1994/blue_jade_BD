<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $slider_data)
 * @method static latest()
 * @method static find(string $id)
 */
class Slider extends Model
{
    use HasFactory;
    protected $guarded=[];
}
