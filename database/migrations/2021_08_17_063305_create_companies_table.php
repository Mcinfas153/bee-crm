<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',50);
            $table->string('phone',20);
            $table->string('fax',20)->nullable();
            $table->string('street')->nullable();
            $table->string('city',50)->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->string('employee_count')->nullable();
            $table->string('webiste')->nullable();
            $table->unsignedInteger('company_catogory_id')->nullable();
            $table->unsignedInteger('created_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
