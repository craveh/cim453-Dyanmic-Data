<?php
$name = "John Doe";
$age = 21;
$hourlyRate = 52.5;
$canSwim = true;
$names = ["Lisa", "Sam", "George"];
$oldAge = $age*3;
$profile = ['first_name'=> "John",
            'last_name'=>"Doe",
            'age'=> 31,
            'job'=>"student"];
echo "<h1>".$profile['age']."</h1>";
$profile['age'] = 32;
echo "<h1>".$profile['age']."</h1>";

$profile['favorite_color'] = "yellow";
//var_dump($name, $age); //good for debugging

//proper way to output: echo or print
// echo "<h1>{$name}</h1>";
// print "<h1>$name</h1>";

 ?>
<h1><?php echo $name ?></h1>
<h1><?php echo $oldAge ?></h1>
<h1><?php echo $names[0] ?></h1>
<h1><?php echo $profile['first_name']  ?></h1>
<h1><?php echo $profile['favorite_color']  ?></h1>

<?php
foreach ($names as $key => $value) {
  // code...
  echo $key .": ".$value."<br>";
}

foreach ($profile as $index => $name) {
  // code...
  echo $index .": ".$name."<br>";
}

if ($age== 21) {
  echo "<p>You are ".$age."</p>";
}

if ($age != 21) {
  echo "<p>You are not 21. You are ".$age."</p>";
}else {
  echo "<p>You are ".$age."</p>";

}
 ?>

<ul>


 <?php foreach ($profile as $index => $name): ?>
   <!-- echo $index .": ".$name."<br>"; -->
   <li><strong><?php echo $index ?>:</strong>
     <?php echo $name ?>
   </li>

 <?php endforeach;?>
</ul>
