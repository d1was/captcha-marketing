<?php

namespace Captchamarketing\Testimonials\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('captchamarketing_testimonials_testimonials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('position');
            $table->string('mainText');
            $table->longText('paragraph');
            $table->integer('order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("captchamarketing_testimonials_testimonials");
    }
}
