<?php
$emp_det = array ("Name" => "A",
                  "Age" => "2" ,
                  "Code" =>"8",
                  "Designation" => "Administrator");

foreach ($emp_det as $key=>$temp) {
   echo "$key = $temp","<br>";

}

echo "<br>";

$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($ages as $age => $age_value) {
    echo "Key=" . $age . ", Value=" . $age_value, "<br>" ;
    
}

echo "<br>";
$character = array ("Name"=>"Joe",
                    "Occupation"=>"Programmer",
                    "Age"=>30,
                    "Learned language "=>"PHP"
);
foreach ( $character as $key=>$val ){
    print "$key = $val<br>";
}
?>