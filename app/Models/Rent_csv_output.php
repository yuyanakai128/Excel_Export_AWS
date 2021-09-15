<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent_csv_output extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'WORK20',
    ];
}
