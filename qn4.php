<?php
function covertfeetininches($inches){
    $feet = intdiv($inches, 12);
    $remainingInches = $inches % 12;
    return "$feet feet $remainingInches inches";
}
$inches = 20;
echo covertfeetininches($inches);
?>
