<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fedora extends Model
{
    //Create a table model for Post
    public $table = 'users';

    //Refer primary key
    public $primarykey = 'id';

    //Set the timestamps
    public $timestamps = false;

    //Set the timestamps for the UNI

    protected $dateFormat = 'U' ;
  //开启白名单，否则数据修改无法写入

    protected $fillable = ['name', 'password','email','id'];

}
