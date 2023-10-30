<?php

function pr($s) {
    echo '<pre>';
    print_r($s);
    echo '</pre>';
}



function SetMonth($days, $dayName) {
    if ($days > 29) {

        $arrDays = array('Esmaspäev', 'Teisipäev', 'Kolmepäev', 'Neljapäev', 'Reede', 'Laupäev', 'Pühapäev');
        

        for ($j = 0; $j < count($arrDays); $j++) {
            if ($dayName == $arrDays[$j]) {
                $start = $j;
            }
        }


        if (isset($start)) {
            for ($i = $start; $i < $days + $start; $i++) {
                $day = $i % 7;
                $arMonth[] = $arrDays[$day];
            }

            return $arMonth;
        } else {
            $error = "vale päev";
            return $error;
        }
    } else {
        $error = "vale kuu number";
        return $error;
    }
}

$arResult = SetMonth(30, 'Reede');

pr ($arResult);
