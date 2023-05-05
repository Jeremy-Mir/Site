<?php
        function dateFormat( $date)
        {
            list($day) = explode(' ', $date);
            switch( $day )
            {
            case date('Y-m-d'):
                          $result = 'Сегодня';
                           break;
            case date( 'Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")) ):
                         $result = 'Вчера';
                           break;
             default:
             {
                     list($y, $m, $d)  = explode('-', $day);
                $month_str = array(
                         'января', 'февраля', 'марта',
                         'апреля', 'мая', 'июня',
                         'июля', 'августа', 'сентября',
                         'октября', 'ноября', 'декабря'
                     );
                $month_int = array(
                         '01', '02', '03',
                         '04', '05', '06',
                         '07', '08', '09',
                         '10', '11', '12'
                     );
                         $m = str_replace($month_int, $month_str, $m);
                $result = $d.' '.$m.' '.$y;
            }
            }
            
             return $result;
        }
    $connect = mysqli_connect('localhost','cp75453_bd','33Rfrfle','cp75453_bd');
    if ($connect == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }

    mysqli_query($connect,"SET NAMES 'utf8'");




         ?>
