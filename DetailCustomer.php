<html><head>
        <title>4 </title>
    </head>
    <body>
        <?php
        if (isset($_GET["P_id"]))
        {
            $strP_id = $_GET["P_id"];
            echo  $strP_id;
        }
        require "concect.php";
        $sql ="SELECT patient.P_id,patient.P_name,patient.P_debt,permissions.P_username
FROM patient,permissions WHERE  permissions.P_id = patient.P_id";
        $params = array($strP_id);
        $stmt = $conn->prepare($sql);
       $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
  
<!-- Detail  -->
    <table width="300" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสคนไข้ </div></th>
    <th width="200"> <div align="center">ชื่อ </div></th>
    <th width="120"> <div align="center">ยอดหนี้ </div></th>
    <th width="100"> <div align="center">เมลคนไข้</div></th>
    </tr>

    <td width="240"> <div align="center"><?php echo $result['P_id']; ?></div></td>
      <td><?php echo $result['P_name']; ?></td>
      <td><?php echo $result['P_username']; ?></td>
      <td><?php echo $result['P_debt']; ?></td>
    
  </table>

<?php
$conn = null;
?>
    </body>
</html>
