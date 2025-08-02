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
        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign(['user_id']);
            $table->renameColumn('user_id', 'customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending')->change();

            $table->foreignId('address_id')->nullable()->after('status')->constrained('addresses')->onDelete('set null');
            $table->enum('payment_method', ['COD', 'QR', 'VISA'])->default('COD')->after('address_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->renameColumn('customer_id', 'user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('status')->default('1')->change();

            $table->dropForeign(['address_id']);
            $table->dropColumn('address_id');

            $table->dropColumn('payment_method');
        });
    }
};
