<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    use HasFactory;
    protected $table = "product_category";
  protected $primarykey = "id";
  protected $fillable = ["category"];
  protected $guarded = ["id"];
  public $timestamps = true;

    public function products()
    {
    return $this->hasMany(products::class, 'id');
    }



}
