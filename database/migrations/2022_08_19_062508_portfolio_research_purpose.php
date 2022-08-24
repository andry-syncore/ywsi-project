<?php

use App\Models\Portfolio;
use App\Models\ResearchPurpose;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PortfolioResearchPurpose extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
      Schema::create('portfolio_research_purpose', function (Blueprint $table) {
         $table->foreignIdFor(Portfolio::class);
         $table->foreignIdFor(ResearchPurpose::class);
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('portfolio_research_purpose');
   }
}
