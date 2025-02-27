<?php

function CheckPassword($password)
{
 $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
 if(strlen($password)<8){
    echo "";
 }
   
}
echo CheckPassword('hello123');
