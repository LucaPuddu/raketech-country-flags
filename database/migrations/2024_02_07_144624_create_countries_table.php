<?php

use App\Services\Country\StaticCountryProvider;
use App\Services\CountryService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('flag_url')->nullable();
            $table->text('flag_alt')->nullable();
            $table->timestamps();
        });

        // First, seed the DB & Cache with static values
        app(CountryService::class)
            ->replaceAll(
                app(StaticCountryProvider::class)->fetch()
            );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
