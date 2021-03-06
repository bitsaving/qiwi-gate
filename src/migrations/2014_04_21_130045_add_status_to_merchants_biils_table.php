<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToMerchantsBiilsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('ff-qiwi-gate')->table('merchants_bills', function (Blueprint $table) {
			$table->string('status', 50)->after('prv_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('ff-qiwi-gate')->table('merchants_bills', function (Blueprint $table) {
			$table->dropColumn('status');
		});
	}

}
