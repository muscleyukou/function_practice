
<?php 
if(isset($_GET['circle'])){
    $circle=$_GET['circle'];
}
$circle_num=3.14;
$circle_length=$circle*$circle*$circle_num;
?>


<?php echo "半径は";?>
<form action="function1.php" method="get">
<input type="text" name="circle" id="">
<input type="submit" value="計算する">
</form>
<?php echo "円周の長さは";?>
<p><?php echo $circle_length;?>cmです</p>


