<?php
ob_start();

function generateRow(){
	require('connection.php');
		$contents = '';
	 	
		$res=$con->query("select * from register join `states` on register.state=states.stat_id join `countries` on states.country_id=countries.cont_id");
        $s = 1;
			while($row=$res->fetch_assoc())
			{
			
			
                      
	      	
			$contents .= '
			<tr>
            <td>' . $s++ . '</td>
				 <td>' . htmlspecialchars($row["Name"]) . '</td>
                <td>' . htmlspecialchars($row["email"]) . '</td>
                <td>' . htmlspecialchars($row["password"]) . '</td>
                <td>' . htmlspecialchars($row["phone"]) . '</td>
                <td>' . htmlspecialchars($row["address"]) . '</td>
                <td>' . htmlspecialchars($row["sname"]) . '</td>
                <td>' . htmlspecialchars($row["name"]) . '</td>
			
				
			</tr>
			';
		}

		
		return $contents;
	}
		

	
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
      
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	

      		
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
           <th>S.No</th>
         	<th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th> 
			
			
			
           </tr>  
      ';  
   $content .= generateRow(); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Report.pdf', 'I');

?>