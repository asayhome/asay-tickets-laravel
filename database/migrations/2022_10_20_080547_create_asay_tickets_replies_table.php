<?php

use AsayHome\AsayTickets\Models\AsayTickets;
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
        Schema::create('asay_tickets_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AsayTickets::class, 'ticket_id');
            $table->unsignedBigInteger('created_by');
            $table->longText('message');
            $table->longText('attachments');
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
