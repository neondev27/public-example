<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $primaryKey = "proid";
    protected $fillable = [
        "id",
        "product"
    ];
    protected $guarded = "proid";
    public $timestamps = true;
    public function product_category()
    {

    return $this->belongsTo(product_category::class);

    }
}
