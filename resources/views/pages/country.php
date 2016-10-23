
<?php



$con = mysqli_connect('localhost', 'root', '');
if ($con) {
    mysqli_select_db($con, 'db_hospital');
} else {
    die('Server Not Connected!') . mysqli_error($con);
}

$sql = "SELECT * FROM tbl_country";
$query_result = mysqli_query($con, $sql);
?>

<option>Select Country</option>
<?php 
while($row= mysqli_fetch_assoc($query_result))
{
?>
<option value="<?php echo $row['id']?>"><?php echo $row['country_name']?></option>

<?php } ?>