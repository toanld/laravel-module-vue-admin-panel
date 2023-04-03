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
        $data = [
            ['name'=>'blog list', 'guard_name'=> 'web'],
            ['name'=>'blog create', 'guard_name'=> 'web'],
            ['name'=>'blog edit', 'guard_name'=> 'web'],
            ['name'=>'blog delete', 'guard_name'=> 'web'],
            ['name'=>'blog manage', 'guard_name'=> 'web'],
        ];
        \App\Models\Permission::insertOrIgnore($data);

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
