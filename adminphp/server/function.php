<?php 
/**
 * AppzStory Admin PHP
 *
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */

/** Clean Data */
function cleanData($input){
    /** เปลี่ยน predefined characters เป็น HTML entities ด้วยฟังก์ชัน htmlspecialchars() */
    $data = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $data;
}

/** Method สำหรับการเช็ครูปภาพ Mime Image */
function isMimeValid($tmp_name){
    $finfo = finfo_open( FILEINFO_MIME_TYPE );
    $mtype = finfo_file( $finfo, $tmp_name );
    if(strpos($mtype, 'image/') !== false){
        return true;
    }
    finfo_close( $finfo );
    return false;
}

/** เปลี่ยนวันที่เป็นภาษาไทย */
function DateThai($strDate){
    $strYear= date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    $strYearCut = substr($strYear,2,2);
    return "$strDay $strMonthThai $strYearCut";
}

?>