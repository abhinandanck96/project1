

<?php
$txt = "Hello world!";
$x = 5;
//$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
//echo $y;

      $num1=20;
      $num2=15;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }

$var =array("tony","hemu","chiru");
echo $var3=6;


for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?>
<body>
	<h1> hi this is abhi</h1>
	  <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_POST['error'])) { ?>

            <p class="error"><?php echo $_POST['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>
</body>
