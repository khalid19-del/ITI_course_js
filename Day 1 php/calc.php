<?php
  if(isset($_POST['firstn']))
  {
    $firstn=$_POST['firstn'];
    $secondn=$_POST['secondn'];
    $operation=$_POST['operation'];
    switch($operation)
     {
      case'+': echo 'the result of operation='.($firstn+$secondn);
      break;
      case'-': echo 'the result of operation='.($firstn-$secondn);
      break;
      case'*': echo 'the result of operation='.($firstn*$secondn);
      break;
      case'/': echo 'the result of operation='.($firstn/$secondn);
      break;
      default:echo 'incorrect operation';
      break;
     }
  }
  else{
     echo 'fill this form';
    
  }
  
?> 