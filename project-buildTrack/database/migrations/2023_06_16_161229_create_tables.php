<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->integer('utilizador_id')->nullable();
            $table->integer('tarefa_id')->nullable();
            $table->decimal('quantidade', 10, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('article')->nullable();
            $table->string('measure')->nullable();
            $table->string('type')->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->timestamps();
        });

        // Insert data into the categories table
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'estrutura metálica'],
            ['id' => 2, 'name' => 'alvenaria'],
            ['id' => 3, 'name' => 'reboco'],
            ['id' => 4, 'name' => 'pintura'],
            ['id' => 5, 'name' => 'instalação elétrica'],
            ['id' => 6, 'name' => 'hidráulica'],
            ['id' => 7, 'name' => 'pavimento'],
            ['id' => 8, 'name' => 'cobertura'],
            ['id' => 9, 'name' => 'impermeabilização'],
            ['id' => 10, 'name' => 'isolamento'],
            ['id' => 11, 'name' => 'vidro'],
            ['id' => 12, 'name' => 'carpintaria'],
            ['id' => 13, 'name' => 'serralharia'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tasks');
    }
};
