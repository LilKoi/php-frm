<?php 

namespace application\models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "cards";

    protected $fillable = [
        "category_id",
        "brand",
        "compound",
        "density",
        "quality",
        "manufacturer",
        "design",
        "s",
        "l",
        "xl",
        "description",
        "price"
    ];
}