<?php 

namespace application\models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = "faqs";

    protected $fillable = [
        'question',
        'answer',
        "name",
        "email",
        "phone"
    ];
}