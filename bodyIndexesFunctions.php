// ALL OF BODY INDEXES FUNCTION
// if want to use any of body calculation just make this file
// require or include to your php file and call functions...


<php?
function bmiCal($a, $b){
    // a is lenght, b is kg c is age

    $bmi = $b / (($a/100) * ($a/100));
    return round($bmi, 1);
}


function manBmr($a, $b, $c){

    $bmrRes = 66.47 + (13.75 * $b) + (5.003 * $a) - (6.755 * $c);
    $retur  round($bmrRes, 1);

}

function femaleBmr($a, $b, $c){

    $bmrRes = 655.1 + (9.563 * $b) + (1.85 * $a) - (4.676 * $c);
    return round($bmrRes, 1);

}

//fasting insulin and fasting glucose values for HOMAIR
function homaIR($gVal, $iVal){
    $homaIR = $rapid * $long /405;
    return round($homaIR, 1);
}

//daily max RAPID INSULIN DOSES AND LONG TERM INSULIN DOSES (BOLUS AND BASAL)
function insulinDoses($b, $x=0.55){
    $bolusTotal = $b * $x;
    $basalTotal = $bolusTotal / 2;

    return $bolusTotal, $basalTotal;

}

//IDEAL BODY WEIGHT OVER IDEAL BMI VALUE
function ibw($b, $y=23.0){
    $ibw = $y * (($b/100) * ($b/100));
 
    return $ibw;

}




?>

//unalZeray//