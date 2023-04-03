<?php

use Illuminate\Support\Facades\DB;
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
        if(!Schema::hasTable('data_example')) {
            Schema::create('data_example', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });

            $quote = array(
                "I wish I had",
                "Why Can't I have",
                "Can I have",
                "Did you have",
                "Will you get",
                "When will I get"
            );

            $items = array(
                "Money",
                "Time",
                "Sex",
                "Coffee",
                "A Better Job",
                "A Life",
                "Better Programming Skills",
                "Internet that was mine",
                "More Beer",
                "More Donuts",
                "Candy",
                "My Daughter",
                "Cable",
                "A Dining Room Table",
                "Better Couches",
                "A PS4",
                "A New Laptop",
                "A New Phone",
                "Water",
                "Rum",
                "Movies",
                "A Desktop Computer",
                "A Fish Tank",
                "My Socks",
                "My Jacket",
                "More Coffee",
                "More Koolaid",
                "More Power",
                "A Truck",
                "Toolbox",
                "More fish for Fish Tank",
                "A Screwdriver",
                "A Projector",
                "More Pants"
            );
            for($i = 1; $i < 1000; $i++){
                $rand_quote = array_rand($quote,1);
                $rand_keys = array_rand($items,1);
                $stmt = $quote[$rand_quote] ." ". $items[$rand_keys];
                DB::insert('insert into data_example (`name`,`description`) values (?, ?)', array($stmt, $stmt . ' ' . $stmt . ' '. $stmt . "\n" . $stmt . ' ' . $stmt . ' '. $stmt));
            }
            $data = [
                ['name'=>'blog list', 'guard_name'=> 'web'],
                ['name'=>'blog create', 'guard_name'=> 'web'],
                ['name'=>'blog edit', 'guard_name'=> 'web'],
                ['name'=>'blog delete', 'guard_name'=> 'web'],
                ['name'=>'blog manage', 'guard_name'=> 'web'],
            ];
            \App\Models\Permission::insert($data);
        }

        //
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
