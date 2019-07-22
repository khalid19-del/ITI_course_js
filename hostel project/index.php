<?php
 $title='Home';
 $content=' <div align="center"> 
           <ul class="project-filter">
                <li> <img src="img\image\hostel1.jpg" onclick="openwin1();"/><div>this hostel is beautiful</div></li>
                <li> <a href="about.php"><img src="img\image\image3.PNG"/></a><div>this hostel is beautiful</div></li>
                <li> <a href="about.php"><img src="img\image\main.jpg"/></a><div>this hostel is beautiful</div></li>
                <li> <a href="about.php"><img src="img\image\hostel1.jpg"/></a><div>this hostel is beautiful</div></li>
                <li> <a href="about.php"><img src="img\image\hostel1.jpg"/></a><div>this hostel is beautiful</div></li>
            </ul>
            </div>';
            
 include 'home.php';

?>
<script>
  function openwin1()
  {
  var win= window.open("","","_black");
  win.document.write("<center><h1>this is the hostel number1</h1><br></center>");
   win.document.write('<center><img src="img/image/hostel1.jpg"></center>');
  }
</script>