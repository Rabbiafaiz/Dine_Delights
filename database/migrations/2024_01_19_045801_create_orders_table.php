<?php

use App\Models\Table;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'chef_id')->nullable()->constrained('users');
            $table->foreignIdFor(User::class, 'user_id')->constrained();
            $table->foreignIdFor(Table::class, 'table_id')->constrained();
            $table->decimal('price');
            $table->string('status');
            $table->string('payment_gateway');
            $table->string('payment_gateway_id');
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
        Schema::dropIfExists('orders');
    }
};
