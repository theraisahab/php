<?php
for($i = 1; $i <= 10; $i++ ){
    if($i == 3){
        goto abc;
    }
}
abc :
echo "Hello";
?>