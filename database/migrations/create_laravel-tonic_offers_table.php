<?php

use Eele94\Tonic\Models\TonicVertical;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up()
    {
        Schema::create('tonic_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(TonicVertical::class, 'vertical_id')->nullable()->constrained('tonic_verticals', 'id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tonic_offers');
    }
};
