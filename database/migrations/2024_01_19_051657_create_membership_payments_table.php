<?php

use App\Models\User;
use App\Models\Membership;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Membership::class,'membership_id')->constrained();
            $table->foreignIdFor(User::class,'user_id')->constrained();
            $table->string('payment_status');
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
        Schema::dropIfExists('membership_payments');
    }
};
