<?php

namespace App\Exports;

use App\Models\D_livable_rent_csv_output;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RentsExport implements FromCollection, WithHeadings
{

    private $headers = [
        'Content-Type' => 'text/csv',
    ];
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return  D_livable_rent_csv_output::select('cond_date',
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
            '処理日時',
            'メール送信日時',
            'メール送信者',
            'メール件名',
            '受信日時',
            'ユニークID',
            '媒体CD',
            '業者CD',
            '業者名',
            '支店CD',
            '支店名',
            '問合せ番号',
            '物件番号',
            '物件CD',
            '物件名',
            '部屋番号',
            '部屋表示番号',
            '氏名',
            '氏名カナ',
            '性別',
            '年齢',
            '郵便番号',
            '住所',
            'MAIL',
            'TEL',
            'FAX',
            '希望連絡方法',
            '希望連絡時間帯',
            '予算',
            '入居希望時期',
            'お問合せ内容',
            'お気に入り登録物件',
            '貸借区分',
            'cookieID',
            '出力状況',
            '作業用1',
            '作業用2',
            '作業用3',
            '作業用4',
            '作業用5',
            '作業用6',
            '作業用7',
            '作業用8',
            '作業用9',
            '作業用10',
            '作業用11',
            '作業用12',
            '作業用13',
            '作業用14',
            '作業用15',
            '作業用16',
            '作業用17',
            '作業用18',
            '作業用19',
            '作業用20'
        ];
    }


}
