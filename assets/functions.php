<?php
	function getClass()
	{		
		$conn = oci_connect("system", "oracle", "localhost");
		$sql = 'SELECT * FROM gml_crm_customer_class_ref';
		
		$stid = oci_parse($conn, $sql);
		oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) 
		{
				
					$pro_id = $row['CUS_CLASS_CODE'];
					$pro_name = $row['CUS_CLASS_DESC'];					
					echo "<option id=" .$pro_id. " value=" .$pro_id. ">" .$pro_name. "</option>";		    	

		}

		oci_commit($conn);
	}


?>