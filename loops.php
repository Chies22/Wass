<h1>Loops</h1>
<h4>While loop</h4>
<?php
//while loop
$init = 0;
while($init<7){
    print $init . "<br>";
    $init++;//0 to 6
}
?>
<h4>do-while loop</h4>
<?php
//do-while loop
$i = 11;
do{
    print $i . "<br>";
    $i++;
}while($i< 16);//11 to 16
?>
<h4>for each loop</h4>
<?php
$months = ["January","February","March","May","June","July","August","september","October","November","December"];


?>
<form action="">
    <select name="" id="">
        <option value="">--Months--</option>
        <?php
        foreach($months As $month){
            echo "<option value=''>$month</option>";
        }
        ?>
    </select>
    <select name="" id="">
        <option value="">--Years--</option>
        <?php
        $y = 2015;
        while($y<2030){
                print "<option value=''>$y</option>";
                $y++;
        }
        ?>
    </select>
</form>