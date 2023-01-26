
</body>  
</html>
<html> <head>
<title> 1212</title>
</head>
<body>
<?php
require "concect.php";
$sql = "SELECT patient.P_id,patient.P_name,patient.P_debt,permissions.P_username
FROM patient,permissions WHERE  permissions.P_id=patient.P_id
AND P_debt BETWEEN 1000 AND 3000";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="400" border="1">
  <tr>
    <th width="100"> <div align="center">รหัส </div></th>
    <th width="200"> <div align="center">ชื่อ</div></th>
    <th width="100"> <div align="center">หนี้</div></th>
    <th width="100"> <div align="center">อีเมล</div></th>

  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
  <tr>
    <td>   <div align="center"> <?php echo $result["P_id"]; ?>        </td>
    <td>   <div align="center"> <?php echo $result["P_name"]; ?>        </td>
    <td>   <div align="center"> <?php echo $result["P_debt"]; ?>        </td>
    <td>   <div align="center"> <?php echo $result["P_username"]; ?>        </td>
    
    
  </tr>
 
<?php
  }
?>
 
</table>
 
<?php
$conn = null;
?>
</body>  
</html>
