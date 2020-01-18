         <?php
function cree($tbl,$nom){
   echo "<select id='selc' name='$nom'>";
   
                  for($i=0;$i<count($tbl);$i++)   {                       
  echo "<option value=".$tbl[$i].">".$tbl[$i]."</option>"; 
                  }
                 
echo "</select>";
}
?>  
        
        
         