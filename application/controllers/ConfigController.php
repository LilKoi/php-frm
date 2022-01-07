<?php

namespace application\controllers;

use application\core\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Capsule\Manager;
class ConfigController extends Controller
{

    public function databaseAction()
    {
        Manager::schema()->create(
            'users', function ($table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string("name");
                $table->string("password");
                $table->timestamps();
                $table->softDeletes();
            }
        );
        Manager::schema()->create(
            "cards", function ($table) {
                $table->increments('id');
                $table->string("name"); 
                $table->integer("category_id");
                $table->string("brand");
                $table->string("compound"); //состав
                $table->string("density"); //плотность
                $table->string("quality"); //качество
                $table->string("manufacturer"); //производитель
                $table->string("design");
                $table->boolean("s")->default(0);
                $table->boolean("m")->default(0);
                $table->boolean("l")->default(0);
                $table->boolean("xl")->default(0);
                $table->text("description");
                $table->integer("price");
                $table->timestamps();
                $table->string("img");
                $table->softDeletes();
            }
        );
        Manager::schema()->create(
            "orders", function ($table) {
                $table->increments('id');
                $table->integer("sum");
                $table->string("name");
                $table->integer("coupon_id")->default(null)->nullable();
                $table->string("email");
                $table->integer("status");
                $table->string("address");
                $table->string("phone");
                $table->text("comment")->default(null)->nullable();
                $table->timestamps();
                $table->softDeletes();
            }
        );
        Manager::schema()->create(
            "items", function ($table) {
                $table->increments('id');
                $table->integer("cards_id");
                $table->integer("orders_id");
                $table->timestamps();
                $table->softDeletes();
            }
        );
        Manager::schema()->create(
            "coupons", function ($table) {
                $table->increments('id');
                $table->string("name");
                $table->timestamps();
                $table->softDeletes();
            }
        );
        Manager::schema()->create(
            "faqs", function($table) {
                $table->increments('id');
                $table->string("name");
                $table->string("email");
                $table->string("phone");
                $table->string("question");
                $table->text("answer")->default(null)->nullable();
                $table->timestamps();
                $table->softDeletes();
        });
        Manager::schema()->create(
            "categories", function($table) {
                $table->increments('id');
                $table->string("name");
                $table->string("img");
                $table->timestamps();
                $table->softDeletes();
        });
    }
}