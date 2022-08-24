<?php

use App\Models\Image;
use App\Models\Portfolio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImagePortfolio extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('image_portfolio', function (Blueprint $table) {
         $table->foreignIdFor(Image::class);
         $table->foreignIdFor(Portfolio::class);
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('image_portfolio');
   }
}
