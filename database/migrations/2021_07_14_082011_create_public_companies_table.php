<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_companies', function (Blueprint $table) {
            $table->id();
            $table->integer('release_date')->nullable()->comment('日期');
            $table->string('code', 6)->nullable()->comment('公司代號');
            $table->string('name', 16)->nullable()->comment('公司名稱');
            $table->string('abbreviation', 7)->nullable()->comment('公司簡稱');
            $table->string('registered_foreign_country', 59)->nullable()->comment('外國企業註冊地國');
            $table->string('industry_code', 2)->nullable()->comment('產業別');
            $table->string('address_in_chinese', 50)->nullable()->comment('住址');
            $table->string('unified_business_no', 8)->nullable()->comment('營利事業統一編號');
            $table->string('chairman', 18)->nullable()->comment('董事長');
            $table->string('general_manager', 13)->nullable()->comment('總經理');
            $table->string('spokesman', 7)->nullable()->comment('發言人');
            $table->string('spokesman_title', 10)->nullable()->comment('發言人職稱');
            $table->string('deputy_spokesperson', 8)->nullable()->comment('代理發言人');
            $table->string('telephone', 13)->nullable()->comment('總機電話');
            $table->date('incorporation_date')->nullable()->comment('成立日期');
            $table->date('listing_date')->nullable()->comment('上市日期');
            $table->string('common_stock_par_value', 28)->nullable()->comment('普通股每股面額');
            $table->bigInteger('contributed_capital')->nullable()->comment('實收資本額');
            $table->bigInteger('private_stock_shares')->nullable()->comment('私募股數');
            $table->integer('preferred_stock_shares')->nullable()->comment('特別股');
            $table->string('financial_statements_type', 1)->nullable()->comment('編制財務報表類型');
            $table->string('stock_transfer_agent', 16)->nullable()->comment('股票過戶機構');
            $table->string('stock_transfer_agent_telephone', 13)->nullable()->comment('過戶電話');
            $table->string('stock_transfer_agent_address', 29)->nullable()->comment('過戶地址');
            $table->string('accounting_firm', 13)->nullable()->comment('簽證會計師事務所');
            $table->string('certified_public_accountant_1', 10)->nullable()->comment('簽證會計師1');
            $table->string('certified_public_accountant_2', 7)->nullable()->comment('簽證會計師2');
            $table->string('symbol', 15)->nullable()->comment('英文簡稱');
            $table->string('address_in_english', 111)->nullable()->comment('英文通訊地址');
            $table->string('fax', 13)->nullable()->comment('傳真機號碼');
            $table->string('email', 46)->nullable()->comment('電子郵件信箱');
            $table->string('website_address', 46)->nullable()->comment('網址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_companies');
    }
};
