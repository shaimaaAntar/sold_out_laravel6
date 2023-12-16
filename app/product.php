<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    //
    protected $fillable =['product_name', 'price','img', 'cat_id','desc'];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
