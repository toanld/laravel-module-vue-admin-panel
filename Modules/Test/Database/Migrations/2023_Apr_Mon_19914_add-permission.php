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
                    ['name'=>'test list', 'guard_name'=> 'web'],
                    ['name'=>'test create', 'guard_name'=> 'web'],
                    ['name'=>'test edit', 'guard_name'=> 'web'],
                    ['name'=>'test delete', 'guard_name'=> 'web'],
                    ['name'=>'test manage', 'guard_name'=> 'web'],
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
