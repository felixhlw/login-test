<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include_once "base.php";


//---這一段是用 session來做登入的紀錄控制----//
/* if (empty($_SESSION['login'])) { */

//---這一段是用 cookie來做登入的紀錄控制----//  
if (empty($_COOKIE['login'])) {  
  exit;
}

/* if (empty($_COOKIE['login'])) {
  exit;
} */
/* $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn, 'root','' ); */
/* $i=$_GET['id']; */

//---這一段是用 session來做登入的紀錄控制----//
/* $i=$_SESSION['id']; */

//---這一段是用 cookie來做登入的紀錄控制----//
$i=$_COOKIE['id'];
$sql= "select * from user where id='".$i."'";

/* $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); */
$dd=$pdo->query($sql)->fetch(); 


?>


  <div class="member">
    <div class="wellcome">
      HI! 
      <?php
      echo $dd['name'].",";
      ?>
      歡迎光臨!以下是你的個人資料: 
      <br><br>
      <a href="logout.php">登出</a>

    </div>
    <br>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->

  <p>

  
    <table  >
      <tr>
        <td>ID</td>
        <td><?=$dd['id']?></td>
      </tr>
      <tr>
        <td>帳號</td>
        <td><?=$dd['acc']?></td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><?=$dd['name']?></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><?=$dd['pw']?></td>
      </tr>
      <tr>
        <td>生日</td>
        <td><?=$dd['birthday']?></td>
      </tr>
      <tr>
        <td>地址</td>
        <td><?=$dd['addr']?></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><?=$dd['tel']?></td>
      </tr>
    </table>
<br>
    <div>
<?php
//---這一段是用 session來做登入的紀錄控制----//
/* if(!empty($_SESSION['login'])){ */

  //---這一段是用 cookie來做登入的紀錄控制----//
if(!empty($_COOKIE['login'])){  
  print <<<EOT
  <a href="index.php" onclick="alert('你已經登入了喔!');">測試回首頁看看吧~</a>

  EOT;

}else{
  print <<<EOT
  <br>
  <a href="index.php" >回首頁 </a> 
  <br>

  EOT;  
}  
?>
    
    </div>
<?php
      /* 在<<<底下可大量直接使用 HTML 及""等符號 */
    print <<<EOT
  
    <br>

    <br>
    <br>
      EOT測試

     

EOT; 
?>    

    </div>
  </div>
</body>
</html>