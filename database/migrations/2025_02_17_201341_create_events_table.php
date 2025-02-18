<?php

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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // events table need to have the event name and description and destination and total number of people attending and event happening date from to ending date, total days of event, and event organizer foreign of users
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('destination');
            $table->integer('total_people');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('total_days')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
