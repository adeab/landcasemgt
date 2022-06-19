<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('land_cases', function (Blueprint $table) {
            //
            $table->integer('fiscal_year');
            $table->timestamp('next_date')->nullable();
            $table->integer('case_status_id');
            $table->integer('case_type_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('land_cases', function (Blueprint $table) {
            //
            $table->dropColumn('fiscal_year');
            $table->dropColumn('next_date');
            $table->dropColumn('case_status_id');
            $table->dropColumn('case_type_id');
        });
    }
}
