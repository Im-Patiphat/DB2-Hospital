
<html>
  <head>
        <title> Information </title>
    </head>
    <body>
         </body>
</html>

     <?php
     $count = 0;
    if(isset($_GET['P_Name'])&&$_GET['P_Name'] !=null)
    {
      echo "<br> get value =".$_GET['P_Name'];  }
    require 'concect.php';
 
    $sql = "SELECT * FROM patient,permissions where permissions.P_id = patient.P_id   
   AND P_name like CONCAT('%',:P_name,'%')";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':P_name',$_GET['P_Name']);

    $stmt->execute();
   
    ?>
   
   <table width="500" border="1">
  <tr>
    <th width="100"> <div align="center">รหัสคนไข้ </div></th>
    <th width="200"> <div align="center">ชื่อ </div></th>
    <th width="200"> <div align="center">เมล </div></th>
    <th width="100"> <div align="center">ยอดหนี้</div></th>
    </tr>
    
<?php
    while($row = $stmt->fetch()){
        echo $row['P_name'].''.$row['P_name']."<br/>";
        $count++;
?>
    <td width="300"> <?php echo $row['P_id']; ?></div></td>
      <td><div align="center"><?php echo $row['P_name']; ?></td>
      <td><div align="center"><?php echo $row['P_username']; ?></td>
      <td><div align="center"><?php echo $row['P_debt']; ?></td>
      
     
<?php
    }
    
    //echo"count...".$count;

  

if($count==0)
echo "<h1><br>No data...<br/></h1>";
$conn = null;
?>
</table>
