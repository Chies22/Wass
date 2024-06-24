<h1>arrays</h1>

<?php
//indexed or numeric arrays
$fnames = ["Alex","Peter","James"];
print_r($fnames);
echo '<br>';
//echo($fnames); it does not also work
//print($fnames); it does not work
echo '<br>';
$colors = array("Black","Green","White","red","Blue","Red","Blue");
?>
<pre>
    <?php print_r($colors);?>
</pre>
<?php
print $fnames[1];//outputs Peter I guess
echo '<br>';
foreach($fnames As $names){//this was not there but just to explore maybe more
    echo $names." ";
}
?>
<?php
// Associative array 
$user = [
    "fullname"=>"Alex Okama",
    "email" =>"AOkama@yahoo.com",
    "phone" =>"+2547855555"
];
?>
<pre>
    <?php print_r($user);
    print '<br>';
    print($user["email"]); //okay it does work the word to the left act like the indexes of what is on their left
    ?>
</pre>
<?php
//Multidimesional Arrays

$user_details = [
    "Director"=>array(
        "fullname"=>"Alex Okama",
        "email" =>"AOkama@yahoo.com",
        "address" =>"Mada",
        "phone" =>[
            "Mobile" => "+2547855555",
            "Work" => "+254715547156",
            "Cell" => "+254715549656"
        ]
        ),
    "Manager" => array(
        "fullname"=>"Peter Okama",
        "email" =>"POkama@yahoo.com",
        "address" => "Mada",
        "phone" =>[
            "Mobile"=> "+254715544456",
            "Work" =>"+254715547144",
            "Cell" =>"+254715549636"
        ]
        ),
        "Secretary"=>array(
            "Fullname"=>"Ann Okama",
            "Email" =>"Okama@yahoo.com",
            "Address" =>"Mada",
            "Phone" => [
                "Mobile" =>"+254715585456",
                "Work" =>"+254715545414",
                "Cell" =>"+254715549363"
            ]
        )
        ];
        print $user_details["Secretary"]["Phone"]["Work"];//again indexes
?>
        <pre>
<?php print_r($user_details)?>

       </pre>
       <?php
       $items= ["book","pen",456,35.5,"Files54"];
        ?>
        <pre>
        
        </pre>