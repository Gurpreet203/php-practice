<?php 

for($i=1;$i<=100;$i++)
{

    if($i%3==0 && $i%5==0)
    {
        echo "FizzBuzz".$i."<br>";
        continue;
    }
    if($i%3==0)
    {
        echo "Fizz".$i."<br>";
    }
    if($i%5==0)
    {
        echo "Buzz"."<br>";
    }
}








?>