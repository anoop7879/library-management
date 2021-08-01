<?php
$age=34;
$gender="";
if($age<10 && ($gender=="female"|| $gender=="male")){
echo "not allowed";
}
elseif(($age>10 && $age<=20 )&& $gender=="male"){
echo "male between 11 to 20";
}
elseif(($age>=15 && $age<=20 )&& $gender=="female"){
echo "female between 15 to 20";
}
elseif(($age>=21 && $age<=35 ) && ($gender=="female" || $gender =="male")){
echo "female or male between 21 to 35";
}
elseif(($age>=36 && $age<=60 )&& $gender=="male"){
echo "male between 36 to 60";
}
elseif(($age>=50 && $age<=70 )&& $gender=="female"){
echo "female between 50 to 70";
}
else{
echo"not allowed";
}
?>