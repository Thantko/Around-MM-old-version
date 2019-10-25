<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/5/18
 * Time: 9:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $fillable = ['id', 'name'];

}