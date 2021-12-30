<?php

namespace application\controllers;

use application\core\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;
use application\lib\Db;
class ConfigController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = new Db();
    }
    public function databaseAction()
    {
        $this->db->connection()->schema()->create(
            'users', function ($table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string("name");
                $table->string("password");
                $table->timestamps();
                $table->softDeletes();
            }
        );
        $this->db->connection()->schema()->create(
            "cards", function ($table) {
                $table->increments('id');
                $table->integer("category_id");
                $table->string("brand");
                $table->string("compound"); //состав
                $table->string("density"); //плотность
                $table->string("quality"); //качество
                $table->string("manufacturer"); //производитель
                $table->string("design");
                $table->boolean("s");
                $table->boolean("m");
                $table->boolean("l");
                $table->boolean("xl");
                $table->text("description");
                $table->integer("price");
                $table->timestamps();
                $table->string("img");
                $table->softDeletes();
            }
        );
        $this->db->connection()->schema()->create(
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
        $this->db->connection()->schema()->create(
            "items", function ($table) {
                $table->increments('id');
                $table->integer("cards_id");
                $table->integer("orders_id");
                $table->timestamps();
                $table->softDeletes();
            }
        );
        $this->db->connection()->schema()->create(
            "coupons", function ($table) {
                $table->increments('id');
                $table->string("name");
                $table->timestamps();
                $table->softDeletes();
            }
        );
    }
}