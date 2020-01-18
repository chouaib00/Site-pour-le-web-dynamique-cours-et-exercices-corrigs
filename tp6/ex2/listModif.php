         <?php
function creer($tab,$name){
echo "<input type='text' name='$name' list='ls'>"; 
    echo "<datalist id='ls' >";   
     for($i=0;$i<count($tab);$i++)                          
  echo "<option value=".$tab[$i].">".$tab[$i]."</option>"; 

 echo "</datalist>";
}
?>  
        
        
         