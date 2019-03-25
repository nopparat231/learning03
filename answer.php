


<?php




for ($i=1; $i < 20; $i++) { 
  $a = 1;

  while($result=mysqli_fetch_array($db_query))
  {

    $an = $_REQUEST["answer$a"];
    $cn = $_REQUEST["c$i"];

    echo "<h3>" . $a . " )  ".$result['question']."</h3>";


    $cnn = $result["c$cn"];

    ?>

    <h3>

      <?php  echo "คำตอบของคุณ :   ".$cnn; ?>

    </h3>

    <?php  if($cn == $an) {
      echo "<h4>ผลลัพธ์ :<u> ถูก </u> </h4>";
    }elseif ($cn <> $an) {
      echo "<h4>ผลลัพธ์ :<u> ผิด </u> </h4>";
    }
    echo "<hr>";

    $a++;
  }

}


?>