<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('uri')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->integer('weight')->default(0)->index();
            $table->integer('type')->default(0)->index();
            $table->boolean('enabled')->default(true)->index();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("blog_categories");
        //
    }
};
