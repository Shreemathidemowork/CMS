<?php
$org_name = $_POST['org_name'];
$dob = $_POST['dob'];
$number = $_POST['number'];
$email = $_POST['email'];
$state = $_POST['state'];
$city = $_POST['city'];
$con_category = $_POST['con_category'];
$con_theme = $_POST['con_theme'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
$con_name = $_POST['con_name'];
$organ_name = $_POST['organ_name']; 
$venue = $_POST['venue'];
$v_city = $_POST['v_city'];
$v_state = $_POST['v_state'];
$organizer = $_POST['organizer'];
$v_country = $_POST['v_country'];
$v_addr = $_POST['v_addr'];
$c_person = $_POST['c_person'];
$c_email = $_POST['c_email'];
$c_number = $_POST['c_number'];
$c_web = $_POST['c_web'];
$short_desc = $_POST['short_desc'];
$abs = $_POST['abs'];
$agreement = $_POST['agreement'];

//connection
$conn = new mysqli('localhost','root','','event_db');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into register_table(org_name,dob,number,email,state,city,con_category,con_theme,from_date,to_date,con_name,organ_name,venue,v_city,v_state,organizer,v_country,v_addr,c_person,c_email,c_number,c_web,short_desc,abs,agreement)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("siisssssiisssssssssisssss",$org_name,$dob,$number,$email,$state,$city,$con_category,$con_theme,$from_date,$to_date,$con_name,$organ_name,$venue,$v_state,$organizer,$v_country,$v_addr,$c_person,$c_email,$c_number,$c_web,$short_desc,$abs,$agreement,$v_city);
    $stmt->execute();
    echo"Registration successful!!";
    $stmt->close();
    $conn->close();

}
?>