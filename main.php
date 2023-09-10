<?php
function myClaculetor()
{
    if (isset($_REQUEST['fristNumber'])) {
        $firstNumber = $_REQUEST['fristNumber'];
        if (isset($_REQUEST['secondNumber'])) {
            $secondNumber = $_REQUEST['secondNumber'];
        }
    }

       if(isset($_REQUEST['options']) && $_REQUEST['options'] == 'Addition'){
        return $firstNumber + $secondNumber;
       }elseif(isset($_REQUEST['options']) && $_REQUEST['options'] == 'Mainaus'){
        return $firstNumber - $secondNumber;
       }elseif(isset($_REQUEST['options']) && $_REQUEST['options'] == 'Divide'){
        return $firstNumber / $secondNumber;
       }elseif(isset($_REQUEST['options']) && $_REQUEST['options'] == 'Modulas'){
        return $firstNumber % $secondNumber;
       }elseif(isset($_REQUEST['options']) && $_REQUEST['options'] == 'stou'){
        return $firstNumber * $secondNumber;
       }
}
