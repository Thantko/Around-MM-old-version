<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/9/18
 * Time: 8:15 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $incrementing = false;
    protected $table = 'booking';
    protected $fillable = ['id', 'name', 'phno', 'address', 'package_id'];

    public function package()
    {
        return $this->belongsTo('App\Models\Package','package_id');
    }
}