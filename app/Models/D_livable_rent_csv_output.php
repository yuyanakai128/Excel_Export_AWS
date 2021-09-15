<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D_livable_rent_csv_output extends Model
{
    use HasFactory;
    protected $fillable = [
        'cond_date',
        'ml_send_date',
        'ml_from',
        'ml_subject',
        'rec_date',
        'uid',
        'dm_cd',
        'com_cd',
        'com_name',
        'ofc_cd',
        'ofc_name',
        'ref_no',
        'obj_no',
        'obj_cd',
        'obj_name',
        'rm_no',
        'rm_v_no',
        'cl_name',
        'cl_name_k',
        'cl_sex',
        'cl_age',
        'cl_post',
        'cl_adr',
        'cl_ml_adr',
        'cl_tel',
        'cl_fax',
        'cl_cnt',
        'cl_cnt_time',
        'cl_budget',
        'cl_mv_in',
        'cl_inquiry',
        'cl_fav_obj',
        'inquiry_kind',
        'cookeid',
        'output',
        'work1',
        'work2',
        'work3',
        'work4',
        'work5',
        'work6',
        'work7',
        'work8',
        'work9',
        'work10',
        'work11',
        'work12',
        'work13',
        'work14',
        'work15',
        'work16',
        'work17',
        'work18',
        'work19',
        'work20'
    ];
}
