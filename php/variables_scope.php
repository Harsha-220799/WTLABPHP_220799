<?php

echo "<h2>PHP variables and scope</h2>";
    $name="harsha";
    $age=18;
    $height=5.6;
    $isstudent=true;
    $subjects=array("WT","DSP","COA");

    echo "Name:$name <br>";
    echo "Age:$age <br>";
    echo "Height:$height <br>";
    echo "Is Student:$isstudent <br>";
    echo "Subjects:".implode(",",$subjects)."<br>";

function localscope(){
    $localvar="I am local variable";
    echo "$localvar from localsvope() <br>";
}
localscope();
echo "$localvar<br>"; //error

$globalvar="I am global variable";
echo $globalvar."<br>";
function globalscope(){
    global $globalvar;
    echo "$globalvar from globalscope()!<br>";
}
globalscope();

function staticscope(){
    static $count=0;
    $count++;
    echo "Static count is : $count <br>";
}

staticscope();
staticscope();
staticscope();

?>