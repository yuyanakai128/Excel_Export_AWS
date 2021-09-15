<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDLivableSalesCsvOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_livable_sales_csv_outputs', function (Blueprint $table) {
            $table->Integer('id');
            $table->string('sme_hjn_me_knj', 32)->nullable();
            $table->string('sme_hjn_me_kn', 32)->nullable();
            $table->string('sebt_flg', 32)->nullable();
            $table->string('sngp', 32)->nullable();
            $table->string('ybnbng', 32)->nullable();
            $table->string('jsh_shzic', 128)->nullable();
            $table->string('tel_no1', 32)->nullable();
            $table->string('tel_no2', 32)->nullable();
            $table->string('mail_adr', 32)->nullable();
            $table->string('fax_no', 32)->nullable();
            $table->string('kzk_su', 32)->nullable();
            $table->string('bkkn_no', 32)->nullable();
            $table->string('ankn_kbn', 32)->nullable();
            $table->string('kikae_umu', 32)->nullable();
            $table->string('nyky_kbo_jiki', 32)->nullable();
            $table->string('bkkn_shbt1', 32)->nullable();
            $table->string('ysn_frm1', 32)->nullable();
            $table->string('ensn1', 32)->nullable();
            $table->string('ekikn_frm1', 32)->nullable();
            $table->string('ekikn_to1', 32)->nullable();
            $table->string('jshcd1', 128)->nullable();
            $table->string('tci_frm1', 32)->nullable();
            $table->string('ttmn_frm1', 32)->nullable();
            $table->string('snyu_frm1', 32)->nullable();
            $table->string('mdr_su1', 32)->nullable();
            $table->string('bkkn_shbt2', 32)->nullable();
            $table->string('ysn_frm2', 32)->nullable();
            $table->string('ekikn_frm2', 32)->nullable();
            $table->string('ekikn_to2', 32)->nullable();
            $table->string('jshcd2', 32)->nullable();
            $table->string('ttmn_frm2', 32)->nullable();
            $table->string('mdr_su2', 32)->nullable();
            $table->string('bkkn_shbt3', 32)->nullable();
            $table->string('ysn_frm3', 32)->nullable();
            $table->string('jshcd3', 128)->nullable();
            $table->string('ttmn_frm3', 32)->nullable();
            $table->string('mdr_su3', 32)->nullable();
            $table->string('bkyk_niy_biko_rn', 128)->nullable();
            $table->string('uktk_ymd', 32)->nullable();
            $table->string('egssskcd', 32)->nullable();
            $table->string('other1', 128)->nullable();
            $table->string('other2', 128)->nullable();
            $table->string('other3', 128)->nullable();
            $table->string('other4', 128)->nullable();
            $table->string('other5', 128)->nullable();
            $table->string('other6', 128)->nullable();
            $table->string('other7', 128)->nullable();
            $table->string('other8', 128)->nullable();
            $table->string('other9', 128)->nullable();
            $table->string('other10', 128)->nullable();
            $table->string('other11', 128)->nullable();
            $table->string('other12', 128)->nullable();
            $table->string('other13', 128)->nullable();
            $table->string('other14', 128)->nullable();
            $table->string('other15', 128)->nullable();
            $table->string('other16', 128)->nullable();
            $table->string('other17', 128)->nullable();
            $table->string('other18', 128)->nullable();
            $table->string('other19', 128)->nullable();
            $table->string('other20', 128)->nullable();
            $table->string('other21', 128)->nullable();
            $table->string('other22', 128)->nullable();
            $table->string('other23', 128)->nullable();
            $table->string('other24', 128)->nullable();
            $table->string('other25', 128)->nullable();
            $table->string('other26', 128)->nullable();
            $table->string('other27', 128)->nullable();
            $table->string('other28', 128)->nullable();
            $table->string('other29', 128)->nullable();
            $table->string('other30', 128)->nullable();
            $table->dateTime('regist_date')->nullable();
            $table->string('output', 128)->nullable();
            $table->string('target_name', 128)->nullable();
            $table->string('target_name_sub', 128)->nullable();
            $table->string('subject', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_livable_sales_csv_outputs');
    }
}
