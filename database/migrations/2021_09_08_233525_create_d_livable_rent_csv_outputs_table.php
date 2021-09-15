<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDLivableRentCsvOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_livable_rent_csv_outputs', function (Blueprint $table) {
            $table->dateTime('cond_date')->nullable();
            $table->dateTime('ml_send_date')->nullable();
            $table->string('ml_from');
            $table->string('ml_subject');
            $table->string('rec_date');
            $table->bigIncrements('uid');
            $table->string('dm_cd');
            $table->string('com_cd');
            $table->string('com_name')->nullable();
            $table->string('ofc_cd');
            $table->string('ofc_name')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('obj_no');
            $table->string('obj_cd')->nullable();
            $table->string('obj_name')->nullable();
            $table->string('rm_no')->nullable();
            $table->string('rm_v_no')->nullable();
            $table->string('cl_name');
            $table->string('cl_name_k')->nullable();
            $table->string('cl_sex')->nullable();
            $table->string('cl_age')->nullable();
            $table->string('cl_post')->nullable();
            $table->string('cl_adr')->nullable();
            $table->string('cl_ml_adr')->nullable();
            $table->string('cl_tel')->nullable();
            $table->string('cl_fax')->nullable();
            $table->string('cl_cnt')->nullable();
            $table->string('cl_cnt_time')->nullable();
            $table->string('cl_budget')->nullable();
            $table->string('cl_mv_in')->nullable();
            $table->text('cl_inquiry')->nullable();
            $table->text('cl_fav_obj')->nullable();
            $table->string('inquiry_kind')->nullable();
            $table->string('cookeid')->nullable();
            $table->string('output')->nullable();
            $table->text('work1')->nullable();
            $table->text('work2')->nullable();
            $table->text('work3')->nullable();
            $table->text('work4')->nullable();
            $table->text('work5')->nullable();
            $table->text('work6')->nullable();
            $table->text('work7')->nullable();
            $table->text('work8')->nullable();
            $table->text('work9')->nullable();
            $table->text('work10')->nullable();
            $table->text('work11')->nullable();
            $table->text('work12')->nullable();
            $table->text('work13')->nullable();
            $table->text('work14')->nullable();
            $table->text('work15')->nullable();
            $table->text('work16')->nullable();
            $table->text('work17')->nullable();
            $table->text('work18')->nullable();
            $table->text('work19')->nullable();
            $table->text('work20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_livable_rent_csv_outputs');
    }
}
