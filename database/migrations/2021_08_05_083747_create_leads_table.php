<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('mobile',20);
            $table->text('inquiry');
            $table->string('project',50);
            $table->string('contact_time')->nullable();
            $table->string('country',50)->nullable();
            $table->unsignedSmallInteger('status')->default(1);
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('assign_to')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
