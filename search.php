<?php  
 $connect = mysqli_connect("localhost", "root", "123456", "teste");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["country_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Não encontrado</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  