<?php
namespace App\Models;
<<<<<<< HEAD
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

=======

use Illuminate\Database\Eloquent\Model;

class Product extends Model  {

	protected $fillable = [
        'code',
        'name',
        'price',
        'model',
        'description',
        'photo',
        'quantity',
    ];
>>>>>>> 80ae6ee (after midterm disccusion)
}