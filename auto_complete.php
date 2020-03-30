<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Auto Complete</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link href="style.css" rel="stylesheet">

      </head>
      
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Autocomplete usando jQuery, PHP e MySQL</h3><br />  
                <label>Digite o nome do Pais</label>
                <div class="row">
                    <div class="col-sm-8"><input type="text" name="country" id="country" class="form-control" placeholder="Enter Country Name" /> </div>
                    <div class="col-sm-4"><button type="button" class="btn btn-primary" action="busca">Ação</button></div>
               </div>

               <div class="row" id="bot">
                    <div class="col-sm-8" id="countryList"> </div>
               </div>

               <button type="button" class="btn btn-primary">Item 1</button>
               <button type="button" class="btn btn-secondary">Item 2</button>
               <button type="button" class="btn btn-success">Item 3</button>
               <button type="button" class="btn btn-danger">Item 4</button>
               <!-- <button type="button" class="btn btn-warning">Warning</button>
               <button type="button" class="btn btn-info">Info</button> -->
               

               </div>
           </div>  
      </body>  
 </html> 

 <script>

 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });

 document.onclick = function(){
    document.getElementById("countryList").style.display = "none";
}

document.getElementById("countryList").onclick = function(){
   document.getElementById("countryList").style.display = "inline";
}

 </script>
