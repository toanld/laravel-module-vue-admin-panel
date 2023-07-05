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
                    ['name'=>'erp list', 'guard_name'=> 'web'],
                    ['name'=>'erp create', 'guard_name'=> 'web'],
                    ['name'=>'erp edit', 'guard_name'=> 'web'],
                    ['name'=>'erp delete', 'guard_name'=> 'web'],
                    ['name'=>'erp manage', 'guard_name'=> 'web'],
                ];
        foreach ($data as $row){
            if(!\App\Models\Permission::where('name',$row["name"])->first()){
                \App\Models\Permission::create($row);
            }
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
