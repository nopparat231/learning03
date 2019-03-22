


<?php
$a = 1;
while($result=mysqli_fetch_array($db_query))
{



  $line = $_GET['line']+1;
  for ($i=1; $i < $line; $i++) { 

    if ($_GET["id$i"] == $result['id'] ) {
     $an = $_GET["answer$i"];
     $cn = $_GET["c$i"];
     
     echo "<h3>$a ).  คำถาม".$result['question']."</h3>";
     
  
    $an = $result["c$an"];
  
     ?>

     <h3>
      <?php  echo "เฉลย ".$an; ?>

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
$a+=1;
}


?>

