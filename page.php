<?php

$limit = 3;

echo '<ul class = "pagination admin_pagination">';



// if(isset($_GET['page'])) {
//     $page = 1;
 
//   }else{
// //     $page = $_GET['page'];
// //   }

$pages=$obj->getpages($limit);

  for($i = 1;$i <= $pages; $i++){ 
   if($i == $page){
        $active = "active";
        }else{
        $active = "";
        }               
  // echo $i;
  echo '<li class= ".$active." ><button onclick="pageLoad('.$i.')">'.$i.'</button></li>';

}

 echo '</ul>'; 
 

 ?>