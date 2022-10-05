<?php
    class Calculator {
        function calc($op=NULL, $num1=NULL, $num2=NULL){
            $out = "";
            if(!is_string($op) || !is_int($num1) || !is_int($num2)){
                $out .= "Error: Enter a string and two numbers";
            }else if($op === '+'){
                $out .= $num1 + $num2;
            }else if($op === '-'){
                $out .= $num1 - $num2;
            }else if($op === '*'){
                $out .= $num1 * $num2;
            }else if($op === '/'){
                if($num2 === 0){
                    $out .= "Error: Cannot divide by 0";
                }else{
                    $out .= $num1 / $num2;
                }
            }else{
                $out .= "Error: Not a valid operator";
            }
            return $out."</br>";
        }
    }
?>