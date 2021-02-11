<?php

function redirect($url, $statusCode = 303){
    header('Location: ' . $url, true, $statusCode);
    die();
}

function dateDifference($date_1 , $date_2 , $differenceFormat = '%y Year %m Month %d Day %h Hours %i Minute %s Seconds' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);
    return $interval;

}

function time_difference($time){
    $date_stat = dateDifference(date('Y-m-d H:i:s'),$time);
    if($date_stat->y >0){
        return "Yaklaşık $date_stat->y yıl önce";
    }elseif($date_stat->m>0){
        return  "Yaklaşık $date_stat->m ay önce";
    }elseif($date_stat->d>0){
        return  "$date_stat->d gün önce";
    }elseif($date_stat->h>0){
        return  "$date_stat->h saat önce";
    }elseif($date_stat->i>0){
        return  "$date_stat->i dakika önce";
    }elseif($date_stat->s>0){
        return  "$date_stat->s saniye önce";
    }else{
        return  "1 saniye önce";
    }
}

function json_ajax_success($message){
    $res = [
        'status'=>1,
        'message'=> $message
    ];
    echo json_encode($res);
}

function json_ajax_error($message){
    $res = [
        'status'=>0,
        'message'=> $message
    ];
    echo json_encode($res);
}

function json_ajax_sys_error(){
    $res = [
        'status'=>0,
        'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
    ];
    echo json_encode($res);
}