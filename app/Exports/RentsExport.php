<?php

namespace App\Exports;

use App\Models\D_livable_rent_csv_output;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return D_livable_rent_csv_output::select('cond_date',
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
                                        'work20')->where('cond_date', '<=', date("Y-m-d H:i:s"))->where('output', '=', '0')->get();
    }

    public function headings(): array {
        return [
            'COND-DATE',
            'ML-SEND-DATE',
            'ML-FROM',
            'ML-SUBJECT',
            'REC-DATE',
            'UID',
            'DM-CD',
            'COM-CD',
            'COM-NAME',
            'OFC-CD',
            'OFC-NAME',
            'REF_NO',
            'OBJ-NO',
            'OBJ-CD',
            'OBJ-NAME',
            'RM-NO',
            'RM-V-NO',
            'CL-NAME',
            'CL-NAME-K',
            'CL-SEX',
            'CL-AGE',
            'CL-POST',
            'CL-ADR',
            'CL-ML-ADR',
            'CL-TEL',
            'CL-FAX',
            'CL-CNT',
            'CL-CNT-TIME',
            'CL-BUDGET',
            'CL-MV-IN',
            'CL-INQUIRY',
            'CL-FAV-OBJ',
            'INQUIRY-KIND',
            'COOKEID',
            'OUTPUT',
            'WORK1',
            'WORK2',
            'WORK3',
            'WORK4',
            'WORK5',
            'WORK6',
            'WORK7',
            'WORK8',
            'WORK9',
            'WORK10',
            'WORK11',
            'WORK12',
            'WORK13',
            'WORK14',
            'WORK15',
            'WORK16',
            'WORK17',
            'WORK18',
            'WORK19',
            'WORK20'
        ];
    }


}
