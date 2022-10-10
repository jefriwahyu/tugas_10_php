
<?php
$arr = array(1,3,8,2,5,7,4,0);
print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = tes($arr);
print("<br> Setelah Disorting (sorting) :<br>");
print_r($arr);

function tes($arr){

    for($i=0; $i<count($arr)-1; $i++)
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j] > $arr[$j+1]){
                $temp= $arr[$j+1];
                $arr[$j+1]= $arr[$j];
                $arr[$j]= $temp;
            }
        }

    }
    return $arr;
} 
    
?>