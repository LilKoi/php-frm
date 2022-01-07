<?php 

namespace application\models;

use Illuminate\Database\Eloquent\Model;
use application\models\Category;
class Card extends Model
{
    protected $table = "cards";

    protected $with = ["category"];

    protected $fillable = [
        "name",
        "category_id",
        "brand",
        "compound",
        "density",
        "quality",
        "manufacturer",
        "design",
        'm',
        "s",
        "l",
        "xl",
        "description",
        "price",
        "img"
    ];

    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }
}