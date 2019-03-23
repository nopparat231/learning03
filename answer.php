


<?php
$a = 1;

while($result=mysqli_fetch_array($db_query))
{

  for ($i=1; $i < 20; $i++) { 

    if ($_GET["id$i"] == $result['id'] ) {
     $an = $_GET["answer$i"];
     $cn = $_GET["c$i"];
     
     echo "<h3>$a ).  คำถาม".$result['question']."</h3>";
     
  
    $an = $result["c$an"];
  
     ?>

     <h3>
      <?php if ($_GET["c$i"] == $_GET["answer$i"]): ?>
        <?php  echo "<u>เฉลย</u>  ".$an; ?>
      <?php endif ?>
      

    </h3>


    <?php  if($_GET["c$i"] == $_GET["answer$i"])
    {
      echo "<h4>ผลลัพธ์ <u> ถูก </u> </h4>";
    }elseif ($_GET["c$i"] <> $_GET["answer$i"]) {
      echo "<h4>ผลลัพธ์ <u> ผิด  </u> </h4>";
    }
    echo "<hr>";
  }

}
$a++;
}


?>
