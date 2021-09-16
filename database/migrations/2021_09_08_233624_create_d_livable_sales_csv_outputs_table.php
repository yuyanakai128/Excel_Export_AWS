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
            $table->bigIncrements('id');
            $table->string('sme_hjn_me_knj', 64)->nullable();
            $table->string('sme_hjn_me_kn', 64)->nullable();
            $table->string('sebt_flg', 64)->nullable();
            $table->string('sngp', 64)->nullable();
            $table->string('ybnbng', 64)->nullable();
            $table->string('jsh_shzic', 128)->nullable();
            $table->string('tel_no1', 64)->nullable();
            $table->string('tel_no2', 64)->nullable();
            $table->string('mail_adr', 64)->nullable();
            $table->string('fax_no', 64)->nullable();
            $table->string('kzk_su', 64)->nullable();
            $table->string('bkkn_no', 64)->nullable();
            $table->string('ankn_kbn', 64)->nullable();
            $table->string('kikae_umu', 64)->nullable();
            $table->string('nyky_kbo_jiki', 64)->nullable();
            $table->string('bkkn_shbt1', 64)->nullable();
            $table->string('ysn_frm1', 64)->nullable();
            $table->string('ensn1', 64)->nullable();
            $table->string('ekikn_frm1', 64)->nullable();
            $table->string('ekikn_to1', 64)->nullable();
            $table->string('jshcd1', 128)->nullable();
            $table->string('tci_frm1', 64)->nullable();
            $table->string('ttmn_frm1', 64)->nullable();
            $table->string('snyu_frm1', 64)->nullable();
            $table->string('mdr_su1', 64)->nullable();
            $table->string('bkkn_shbt2', 64)->nullable();
            $table->string('ysn_frm2', 64)->nullable();
            $table->string('ekikn_frm2', 64)->nullable();
            $table->string('ekikn_to2', 64)->nullable();
            $table->string('jshcd2', 128)->nullable();
            $table->string('ttmn_frm2', 64)->nullable();
            $table->string('mdr_su2', 64)->nullable();
            $table->string('bkkn_shbt3', 64)->nullable();
            $table->string('ysn_frm3', 64)->nullable();
            $table->string('jshcd3', 128)->nullable();
            $table->string('ttmn_frm3', 64)->nullable();
            $table->string('mdr_su3', 64)->nullable();
            $table->string('bkyk_niy_biko_rn', 128)->nullable();
            $table->string('uktk_ymd', 64)->nullable();
            $table->string('egssskcd', 64)->nullable();
            $table->string('skbt_cd', 128)->nullable();
            $table->string('skbt_knbn_otr', 64)->nullable();
            $table->string('skbt_otr', 64)->nullable();
            $table->text('other1')->nullable();
            $table->text('other2')->nullable();
            $table->text('other3')->nullable();
            $table->text('other4')->nullable();
            $table->text('other5')->nullable();
            $table->text('other6')->nullable();
            $table->text('other7')->nullable();
            $table->text('other8')->nullable();
            $table->text('other9')->nullable();
            $table->text('other10')->nullable();
            $table->text('other11')->nullable();
            $table->text('other12')->nullable();
            $table->text('other13')->nullable();
            $table->text('other14')->nullable();
            $table->text('other15')->nullable();
            $table->text('other16')->nullable();
            $table->text('other17')->nullable();
            $table->text('other18')->nullable();
            $table->text('other19')->nullable();
            $table->text('other20')->nullable();
            $table->text('other21')->nullable();
            $table->text('other22')->nullable();
            $table->text('other23')->nullable();
            $table->text('other24')->nullable();
            $table->text('other25')->nullable();
            $table->text('other26')->nullable();
            $table->text('other27')->nullable();
            $table->text('other28')->nullable();
            $table->text('other29')->nullable();
            $table->text('other30')->nullable();
            $table->string('regist_date',64);
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
