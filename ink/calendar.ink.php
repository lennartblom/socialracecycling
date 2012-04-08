<?php


function monthBack( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp)-1,date("d",$timestamp),date("Y",$timestamp) );
}
function yearBack( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp),date("d",$timestamp),date("Y",$timestamp)-1 );
}
function monthForward( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp)+1,date("d",$timestamp),date("Y",$timestamp) );
}
function yearForward( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp),date("d",$timestamp),date("Y",$timestamp)+1 );
}

function getCalender($date,$headline = array('Mo','Di','Mi','Do','Fr','Sa','So')) {
    $sum_days = date('t',$date);
    $LastMonthSum = date('t',mktime(0,0,0,(date('m',$date)-1),0,date('Y',$date)));
    
    foreach( $headline as $key => $value ) {
        echo "<div class=\"day headline\">".$value."</div>\n";
    }
    
    for( $i = 1; $i <= $sum_days; $i++ ) {
        $day_name = date('D',mktime(0,0,0,date('m',$date),$i,date('Y',$date)));
        $day_number = date('w',mktime(0,0,0,date('m',$date),$i,date('Y',$date)));
        
        if( $i == 1) {
            $s = array_search($day_name,array('Mon','Tue','Wed','Thu','Fri','Sat','Sun'));
            for( $b = $s; $b > 0; $b-- ) {
                $x = $LastMonthSum-$b;
                echo "<div class=\"day before\"><p class=\"text\">".sprintf("%02d",$x).".</p></div>\n";
            }
        } 
        
        if( $i == date('d',$date)) {
            echo	"<div class=\"day current\"><p class=\"text\">".sprintf("%02d",$i).".</p>\n";
			echo 	"<ul class=\"event\">\n";
			echo	"".ShowTour("".date('Y',$date)."-".date('m',$date)."-$i")."\n";	
			echo	"</ul>\n";
			echo	"</div>\n";
        } else {
            echo "<div class=\"day normal\"><p class=\"text\">".sprintf("%02d",$i).".</p>\n";
			echo 	"<ul class=\"event\">\n";
			echo	"".ShowTour("".date('Y',$date)."-".date('m',$date)."-$i")."\n";	
			echo	"</ul>\n";
			echo	"</div>\n";
        }
        
        if( $i == $sum_days) {
            $next_sum = (6 - array_search($day_name,array('Mon','Tue','Wed','Thu','Fri','Sat','Sun')));
            for( $c = 1; $c <=$next_sum; $c++) {
                echo "<div class=\"day after\"><p class=\"text\">".sprintf("%02d",$c).".</p></div>\n"; 
            }
        }
    }
}


?>