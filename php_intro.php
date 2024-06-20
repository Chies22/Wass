<?php
date_default_timezone_set("Africa/Nairobi");
print("This is the first php lesson");
//displaying a sentence or a string
print("<br>");
echo'Today is <span style="color: #FF0040;">Thursday</span>';//applying css in php
print('<br>');
print 1586;//this is integer
print '4564';//this is a string
print('<br>');
print 15+45;//this will display the result of the operation and this : print "15+45"; will not as it is a string
//I do not know this but just to have it php will help display dynamic content
print('<br>');
print date('1');//display the current day of the week
print('<br>');
print date('1',strtotime("tomorrow"));//display the week day of tomorrow
print('<br>');
print date('m1,js F Y H:i:s');
print('<br>');//using this to break a line
print 100+45;//this will display the result of the operation and this : print "15+45"; will not as it is a string
print'<br>';
print date('m1,js F Y H:i:s');//061,2013 June 2024 14:42:13 that is whatever it does
$fname="Alex Okama";//declaration of a variable or string [or a (group of) word]

$yob=2006;//creating (declaring)  a php variable (integer)
$user_dob=$yob."-05-21";
print $fname;
print '<br>';

print '<br>';

$age=date('Y')-$yob;
$birthdate = new DateTime($user_dob);
$today=new DateTime('today');

$interval= $birthdate->diff($today);

/**
 * echo '<pre>';
 * print_r($interval);
 * echo '</pre>'
 */

 print $fname."was born on ". date('1,F jS Y',strtotime($user_dob));
 print '<br>';//using HTML to break a line
 print $fname." is ".$interval->y ." years, ". $interval->m . " moths, and ". $interval->d . " days old. ";
 $adult_age = 18;
 if($interval->y>=$adult_age){
    print $fname." is an adult";//happens when the event in block is true 
 }
 else{
    print $fname." is NOT an adult";//happens when the event in block is true 
 }
 print '<br>';

 //variable characteristics
 $lname = 'Okama';
 print "His last name is $lname"; //concanation is not a must
 print '<br>';
 print 'His last name is '. $lname;//concanation is amust while using single qoutes I guess
 print '<br>';
$pers['lname'] = "Okama";//looks like arrays
print $pers['lname'];
print '<br>';
define('lname','Okama');
print lname;
?>