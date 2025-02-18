<?php
$country = $_POST['country'];

require("connection.php");

$res = $con->query("SELECT * FROM states WHERE country_id='$country'");
$count = $res->num_rows;

if ($count > 0) {
    echo '<option value="none" selected>--Select State--</option>';
    while ($row = $res->fetch_assoc()) {
        ?>
        <option value="<?php echo htmlspecialchars($row['stat_id']); ?>">
            <?php echo htmlspecialchars($row['sname']); ?>
        </option>
        <?php
    }
} else {
    echo '<option value="none">No Results</option>'; // Provide a default option
}
?>
