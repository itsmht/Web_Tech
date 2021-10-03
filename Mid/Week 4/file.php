<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Info</title>
</head>
<body>

    
<?php
for($i=1;$i<=10;$i++)
{
    $a=$i+5;
?>
<a href="file2.php?id=<?php echo $a; ?>&name=talha"> Second page <?php echo $i; ?> </a><br/>
<?php
}
?>
    
</body>
</html>