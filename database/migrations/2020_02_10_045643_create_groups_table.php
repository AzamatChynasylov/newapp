<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
						$table->bigIncrements('id');
						$table->string('title')->unique();
						$table->integer('parent_id')->nullable();
						$table->tinyInteger('published')->nullable();
						$table->tinyInteger('level')->nullable();
						$table->integer('created_by')->nullable();
						$table->integer('modified_by')->nullable();
						$table->date('last_date')->nullable();
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
        Schema::dropIfExists('groups');
    }
}
