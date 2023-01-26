<html><head>
        <title> Display Selected Customer Information </title>
    </head>
    <body>
        <?php
        if (isset($_GET["P_name"]))
        {
            $strCustomerID = $_GET["P_name"];
            echo  $strP_name;
        }
        require "concect.php";
        $sql ="SELECT * FROM patient,permissions WHERE P_name LIKE '%" . $strP_name . "%'";
        $params = array($strP_name);
        $stmt = $conn->prepare($sql);
       $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
  
<!-- Detail  -->
    <table width="300" border="1">
  <tr>
    <th width="325">รหัสลูกค้าสมาชิก</th>
    <td width="240"><?php echo $result["P_name"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อ</th>
    <td><?php echo $result["P_debt"]; ?></td>
  </tr>
 
  <tr>
    <th width="130">Birthdate</th>
    <td><?php echo $result["P_username"]; ?></td>
  </tr>

  </table>

<?php
$conn = null;
?>
    </body>
</html>