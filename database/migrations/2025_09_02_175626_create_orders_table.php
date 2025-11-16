<?php

use App\OrderStatusEnum;
use App\PaymentGatewayEnum;
use App\PaymentMethodEnum;
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
        Schema::create('orders', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', array_column(OrderStatusEnum::cases(), 'value'))
                ->default(OrderStatusEnum::Pending->value);
            $table->enum('payment_gateway', array_column(PaymentGatewayEnum::cases(), 'value'))
                ->default(PaymentGatewayEnum::Paystack->value);
            $table->enum('payment_method', array_column(PaymentMethodEnum::cases(), 'value'))
                ->default(PaymentMethodEnum::card->value);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
