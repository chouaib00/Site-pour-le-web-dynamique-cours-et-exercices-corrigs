<html>
<body>
    <?php
               
    $array = array('Bounjour', 'tous', 'les étudiants');
     echo implode(" ",$array);
     echo "<br />";
     var_dump($array);
     echo "<br />";
     print_r($array);
     echo "<br />";   
              ?>
    <script type="text/javascript">
    alert("<?php  echo implode(" ",$array); ?>");
</script>
               
              </body>
              </html>