<?php

include_once 'include/dbconnect.php';
//@desc cat class is used to diplay categery option in addticket form
class Cat
{


//@desc selects multiple data from database
//@retruns the seleted data into an $catarray array 
public function selectCat()
	{
		$dbConnectObject= new DatabaseConnection();
		$sql = "SELECT name FROM categories ";
		$result = mysqli_query($dbConnectObject->conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
    	// output data of each row
			 $i =0;
    		while($row = mysqli_fetch_assoc($result)) 
    		{	
    			$catArray[i] = $row["name"];
        		$i++;
    		}
    		
		}
		else
		{
    		echo "0 results";
		}

		mysqli_close($dbConnectObject->conn);
		return $catArray;
	}


}	

?>