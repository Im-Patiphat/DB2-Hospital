

<html> <head>
<title> select </select></title>
</head>
<body>
<?php
require "concect.php";
$sql = "SELECT *
        FROM patient,permissions
        WHERE patient.P_id = permissions.P_id";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="800" border="1">
 <tr>
    <th width="90"> <div align="center">รหัสคนไข้ </div></th>
    <th width="140"> <div align="center">ชื่อ </div></th>
    <th width="120"> <div align="center">Birthdate </div></th>
    <th width="100"> <div align="center">หนี้ </div></th>
  </tr>
 
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
 
   <tr>
    <td>
 
        <a href="DetailCustomer.php?P_id=<?php echo $result["P_id"]; ?>">
                                        <?php echo $result["P_id"]; ?>    
        </a>   

    </td>
    <td>    <?php echo $result["P_name"]; ?>              </td>
    <td>    <?php echo $result["P_DOB"]; ?>         </td>
    <td>    <?php echo $result["P_debt"]; ?>             </td>
    
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