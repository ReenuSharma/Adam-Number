<html>
    <body style="background-color: rgb(133, 376, 490);">
    <?php

    $choi= $_GET['choice'];
    
    
$random_num=rand(4,5);

if($choi>$random_num ){
    echo "The entered number is Greater than mynumber, ";
    echo "<br>The correct number is $random_num";
    
}else if($choi<$random_num){
    echo "The entered number is smaller than my number, ";
    echo "the correct number is $random_num";

}
else{
    echo "You Entered the right number.<br> The End!";
}

?> 
    </body>
</html>