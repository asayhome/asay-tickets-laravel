<?php

use AsayHome\AsayTickets\Models\AsayTicketsSections;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asay_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AsayTicketsSections::class, 'section_id');
            $table->string('model');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('created_by');
            $table->string('subject');
            $table->longText('body');
            $table->integer('status');
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asay_tickets');
    }
};
