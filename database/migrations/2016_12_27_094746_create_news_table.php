<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('news', 
                function (Blueprint $table)
                {
                    $table->increments('id');
                    $table->string('slug', 255)->unique()->collate('latin1_swedish_ci');
                    $table->string('title', 512);
                    $table->longText('content')->nullable();
                    $table->string('author', 128)->nullable();
                    $table->string('image', 1024)->default('default.png');
                    $table->string('gallery', 1024)->nullable();
                    
                    $table->enum('language', 
                            [
                                    'all',
                                    'tr',
                                    'en'
                            ])->default('all');
                    $table->enum('status', 
                            [
                                    - 1,
                                    0,
                                    1
                            ])->default(1);
                    $table->dateTime('published_at')->default(
                            DB::raw('CURRENT_TIMESTAMP'));
                    $table->dateTime('unpublished_at')->nullable();
                    $table->timestamp('created_at')->default(
                            DB::raw('CURRENT_TIMESTAMP'));
                    $table->timestamp('updated_at')->default(
                            DB::raw(
                                    'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists('news');
    }
}
    
    