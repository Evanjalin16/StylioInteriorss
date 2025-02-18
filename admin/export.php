<?php  
$connect = mysqli_connect("localhost", "root", "", "interior");

if (isset($_GET["export"])) {
    // SQL query to fetch data from multiple tables
    $query = "SELECT * FROM register 
              JOIN states ON register.state = states.stat_id 
              JOIN countries ON states.country_id = countries.cont_id";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        // Initialize Excel file output
        $output = '
        <table border="1">
            <tr>  
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th> 
            </tr>';

        // Initialize the serial number variable
        $s = 1;

        // Loop through each row of the query result and append to the table
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
            <tr>  
                <td>' . $s++ . '</td>
                <td>' . htmlspecialchars($row["Name"]) . '</td>
                <td>' . htmlspecialchars($row["email"]) . '</td>
                <td>' . htmlspecialchars($row["password"]) . '</td>
                <td>' . htmlspecialchars($row["phone"]) . '</td>
                <td>' . htmlspecialchars($row["address"]) . '</td>
                <td>' . htmlspecialchars($row["sname"]) . '</td>
                <td>' . htmlspecialchars($row["name"]) . '</td>
            </tr>';
        }

        // Close the table HTML
        $output .= '</table>';

        // Set headers for Excel file export
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="download.xls"');

        // Output the generated Excel table
        echo $output;
        exit;
    }
}
?>
