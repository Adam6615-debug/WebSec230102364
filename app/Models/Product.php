<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $table = "products";
 protected $fillable = [
 'code',
 'name',
 'price',
 'model',
 'description',
 'photo'
 ];

}