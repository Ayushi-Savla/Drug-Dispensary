<?php
require_once("connection.php");
require_once("database.php");

// Create an instance of the Database class
$database = new Database();

// Get the connection object from the Database instance
$conn = $database->__construct();

// Check if the connection is valid before executing the query
if ($conn) {
    $tables = [
        "contracts" => ["textofcontract", "supervisor", "startdate", "enddate"],
        "doctor" => ["docssn", "Name", "PhoneNumber", "password", "address", "Gender"],
        "drug" => ["TradeName", "formula", "price"],
        "login" => ["Username", "password"],
        "patient" => ["patientssn", "Name", "PhoneNumber", "password", "address", "Gender"],
        "pharmaceuticalcompany" => ["pcSSN", "pcName", "address", "PhoneNo"],
        "pharmacy" => ["Name", "phSSN", "phoneNo", "profitPercentage", "drugTradeName", "address"],
        "prescriptions" => ["prescriptionNo", "prescriptionDate", "quantity", "patientssn", "docssn"],
        "staff" => ["staffNo", "Name", "prescriptionno", "salary", "bonus"]
    ];

    // Get the table name from the query string
    $table = isset($_GET['table']) ? $_GET['table'] : null;

    // Validate the table name
    /*if (!isset($tables[$table])) {
        echo "Invalid table name";
        exit;
    }*/

    // Get the column names for the selected table
    $columns = $tables[$table];

    // Get total number of rows for the selected table
    $sql_count = "SELECT COUNT(*) AS total FROM $table";
    $count_result = $conn->query($sql_count);
    $row_count = $count_result->fetch(PDO::FETCH_ASSOC);
    $total_results = $row_count['total'];

    // Calculate total number of pages
    $results_per_page = 10; // Assuming you want 10 results per page
    $total_pages = ceil($total_results / $results_per_page);

    // Check if the current page number is set, otherwise set it to 1
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Validate the current page number
    if ($current_page < 1) {
        $current_page = 1;
    } elseif ($current_page > $total_pages) {
        $current_page = $total_pages;
    }

    // Calculate the starting and ending row numbers for the current page
    $start_limit = ($current_page - 1) * $results_per_page;
    $end_limit = $start_limit + $results_per_page - 1;

    // Fetch data for the current page from the selected table
    $sql = "SELECT " . implode(", ", $columns) . " FROM $table LIMIT $start_limit, $results_per_page";
    $result = $conn->query($sql);

    if ($result->rowCount()> 0) {
        echo "<link rel='stylesheet' type='text/css' href='style.css'>";
        echo "<table>";
        echo "<tr><th>" . implode("</th><th>", $columns) . "</th></tr>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($columns as $column) {
                echo "<td>" . $row[$column] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

        // Display pagination links
        echo "<div class='pagination'>";
        if ($current_page > 1) {
            echo "<a href='?table=$table&page=" . ($current_page - 1) . "'>&laquo; Previous</a>";
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a " . ($i == $current_page ? "class='active'" : "") . " href='?table=$table&page=$i'>$i</a>";
        }

        if ($current_page < $total_pages) {
            echo "<a href='?table=$table&page=" . ($current_page + 1) . "'>Next &raquo;</a>";
        }
        echo "</div>"; // Close the pagination container
    }
}
?>          

