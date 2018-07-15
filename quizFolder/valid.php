<?php 
if(isset($_POST['submit']))
{
if(isset($_POST['customradio'])){
 echo "You have selected".$_POST['customradio']."</br>";
}
 else{
 echo "You have not selected";
 }
 }
 ?>