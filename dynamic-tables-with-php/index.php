<?php
//
include "dynamic_tables_functions.php";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dynamic HTML Tables with PHP</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

</head>


<body style="background-color: #f5f5f5">
    
  
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container p-4">
      <a href="" class="navbar-brand">Dynamic HTML Tables with PHP</a>
     
    </div>
  </nav>




  <section id="addFetchDetailsContainer" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

        
        <div class="col-md-6 ml-auto mb-4">
          <div class="bg-white p-3" style="border-radius: 6px">
              <p><span style='font-weight: bolder;'>Test Database Name and Tables</span></p>
              <p><span style='font-weight: bolder;'>Database Name:</span> <span>dynamic_tables_db</span> </p> 
              <p><span style='font-weight: bolder;'>Tables List</span></p>
              <p>students_list</p> 
              <p>employers_list</p> 
              <p>products_list</p> 
          </div>  
        </div>

        <div class="col-md-6 ml-auto mb-4">
          <!--  -->
          <div>
               <div class="form-group">
                   <label class="w-100 d-block">Type a Database Name to fetch from:</label>
                   <input class="w-100 d-block" required type="text" id="db_selected" name="db_selected">
                </div>
                <div class="form-group">
                   <label class="w-100 d-block">Type the name of the Table from the Database:</label>
                   <input class="w-100 d-block" required type="text" id="table_selected" name="table_selected">
                </div>
                
                <div><button id='fetch-btn' type='button' class="btn btn-primary btn-xs">Fetch Information</button></div>
          </div>
          <!--  -->

          <!--  -->
          <div>
              <p><span style='font-weight: bolder;'>Database Name:</span> 
                <span>
                 <?php 
                    $tableData = fetchTableInformation(); 
                    echo $tableData[1];
                  ?>
               </span>
             </p>
             <p><span style='font-weight: bolder;'>Table Selected:</span> 
                <span>
                 <?php 
                    $tableData = fetchTableInformation(); 
                    echo $tableData[2];
                  ?>
               </span>
             </p>
             <p><span style='font-weight: bolder;'>Number of rows:</span> 
                <span>
                 <?php 
                    $tableData = fetchTableInformation(); 
                    echo $tableData[0];
                  ?>
               </span>
             </p>
         </div>
         <!--  -->

          
        </div>


      </div>
    </div>
  </section>

 
 <section>
  <div class="container p-4 bg-white">
      <!-- we use bootstrap to style the table -->
      <div class="table-responsive">
        
        <table class="table">
            <!-- we fetch the table head and table body using php -->
            <?php 
              $tableData = fetchTableInformation(); 
              echo $tableData[3];
            ?>
        </table>

      </div>
       <!-- table ends here -->
   </div>

</section>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<script>


$("#fetch-btn").click(function(e){
    e.preventDefault();
    var dbname = $('#db_selected').val();
    var table_name = $('#table_selected').val();

    if((dbname == "") || (table_name == "")){
        alert("All fields required!");
    }
    else{
      window.location = 'index.php?table_name=' + table_name + '&dbname=' + dbname;
    }
    
});
    

    
</script>
