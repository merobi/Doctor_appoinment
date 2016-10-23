<?php

$con = mysqli_connect('localhost', 'root', '');
if ($con) {
    mysqli_select_db($con, 'db_hospital');
} else {
    die('Server Not Connected!') . mysqli_error($con);
}


if(isset($_GET['country_id']))
{
    $country_id=$_GET['country_id'];
    if($country_id !='')
{

    $sql = "SELECT * FROM tbl_city WHERE country_id=$country_id ";
    $city_info = mysqli_query($con, $sql);
    

while ($row = mysqli_fetch_assoc($city_info)) {
   
   
    ?>

<option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
<?php 

} 
}
}


if(isset($_GET['city_id']))
{
  $city_id=$_GET['city_id'];

  if($city_id)
{

    $sql = "SELECT * FROM institute_info WHERE city_id=$city_id";
    $hospital_info = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($hospital_info)) {
?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
<?php 


}
}
}

if(isset($_GET['id']))
{
  $hospital_id=$_GET['id'];

  if($hospital_id)
{

    $sql = "SELECT * FROM doctors_speciality WHERE id=$hospital_id";
    $specialist_info = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($specialist_info)) {
?>
    <option value="<?php echo $row['id']?>"><?php echo $row['speciality']?></option>
<?php 


}
}
}



