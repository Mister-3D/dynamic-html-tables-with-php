<?php

if(isset($_GET['table_name'])){
    $tablename = $_GET['table_name'];
    $dbname = $_GET['dbname'];
}
else{
    $tablename = "None";
    $dbname = "None";
}


function countTableRows(){
	global $dbname;
	global $tablename;
	// connection to the database
	$con = mysqli_connect("localhost","root","", $dbname);

	$get_query = "SELECT * FROM " . $tablename;
	$run_query = mysqli_query($con, $get_query);
	if($run_query){
		// we get the num of rows returned
		$num_rows = mysqli_num_rows($run_query);
		return $num_rows;
	}
	else {
		return 0;
	}
	
}

//
function getTableColumnsDetails(){
	global $dbname;
	global $tablename;
	// connection to the database
	$con = mysqli_connect("localhost","root","", $dbname);

	$get_query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$tablename'";
	$run_query = mysqli_query($con, $get_query);
	$columns_found = [];

	while($column = mysqli_fetch_array($run_query)) { 
	     array_push ($columns_found, $column[0]); 
	}

	return $columns_found;

}

function generateTableColumns(){
	global $dbname;
	global $tablename;
	// connection to the database
	$con = mysqli_connect("localhost","root","", $dbname);

	$get_query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$tablename'";
	$run_query = mysqli_query($con, $get_query);
	$columns_found = [];

	while($column = mysqli_fetch_array($run_query)) { 
	     array_push ($columns_found, $column[0]); 
	}

	$table_header = "<thead>";
	$table_header .= "<tr>";
	$table_header .= "<th>SN</th>";
	// we generate the th rows for the table
	// we want to skip the first column (i.e. => id), the loop starts at 1
	for( $i = 1; $i < count($columns_found); $i++){
		$table_header .= "<th>" . $columns_found[$i] . "</th>";

	}
	$table_header .= "</tr>";
	$table_header .= "</thead>";

	return $table_header;

}



function generateTableRows(){
	global $dbname;
	global $tablename;
	// connection to the database
	$con = mysqli_connect("localhost","root","", $dbname);

	$get_query = "SELECT * FROM " . $tablename;
	$run_query = mysqli_query($con, $get_query);
	//
	$counter = 1;
	$all_rows = "<tbody>";
	// getTableColumnDetails
	$tbl_columns = getTableColumnsDetails();

	while($row_query = mysqli_fetch_array($run_query)){

		$this_row = "<tr>";
		$this_row .= "<td>" . $counter ."</td>";
		for( $i = 1; $i < count($tbl_columns); $i++){
			$column_name = $tbl_columns[$i];
			$this_row .= "<td>" . $row_query[$column_name] . "</td>";
		}

      	$this_row .= "</tr>";
      	//
      	$all_rows .= $this_row;

      // 
      ++$counter;
	}

	$all_rows .= "<tbody>";

	return $all_rows;
	
	
	
}

function fetchTableData(){
	global $dbname;
	global $tablename;
	// connection to the database
	$con = mysqli_connect("localhost","root","", $dbname);

	$table_results = "";
	$table_results_details = [];

	// get the header and rows
	$table = generateTableColumns();
	$table .= generateTableRows();
	//
	$table_results = $table;
	// Number of rows Returned
	$table_results_details[0] = countTableRows($tablename);
	// Database Selected
	$table_results_details[1] = $dbname;
	// Table Chosen
	$table_results_details[2] = $tablename;
	// Table rows
	$table_results_details[3] = $table_results;

	return $table_results_details;

}


// This is the function that is called on the page
function fetchTableInformation(){
	global $dbname;
	global $tablename;
	// connection to the database
	// we want to supress warning / error messages only at this place
	$con = @mysqli_connect("localhost","root","", $dbname);
	// we test if the "database given" is available, we send the error if connection to database WAS NOT SUCCESSFUL
	if(!$con){
		$table_results_details = [];
		$table_results = "<tr><th>Error: Incorrect Database name / Database Not Found! Try typing a database Name</th></tr>";
		$table_results_details[0] = "";
		$table_results_details[1] = "Error: Database Not Found!";
		$table_results_details[2] = "";
		$table_results_details[3] = $table_results;
		return $table_results_details;

	}

	else{
		// we check if the "table given" is available, we run a test query
		$get_query = "SELECT * FROM " . $tablename;
		$run_query = mysqli_query($con, $get_query);
		if($run_query){
			// if the table is found, we fetch the data
			$table_results_details = fetchTableData();
			return $table_results_details;
		}
		else{
			$table_results_details = [];
			$table_results = "<tr><th>Table Not Found / No Records</th></tr>";
			$table_results_details[0] = "";
			$table_results_details[1] = "Error: Table Not found!";
			$table_results_details[2] = "";
			$table_results_details[3] = $table_results;
			return $table_results_details;
		}
	}

	mysql_close($con);

	
}


	




?>