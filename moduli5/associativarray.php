<?php
      $grads = array(
        "Math" => "5",
        "Art" => "3",
        "History" => "2"
        );
        echo "Math grad is" . $grads['Math'];

        echo"<br>";
        foreach($grads as $subject => $grads){
            echo "Subject:" . $subject . ", Grade:" . $grads;
            echo "<br>";
        }

      
?>