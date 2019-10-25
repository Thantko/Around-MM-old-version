<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/10/18
 * Time: 11:48 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table= 'request';
    protected $fillable = ['id', 'name', 'phno', 'address', 'type', 'description'];

}