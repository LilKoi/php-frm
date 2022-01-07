<?php

namespace application\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'name',
        'img'
    ];

    public function Cards()
    {
        return $this->belongsTo(Card::class);
    }
}