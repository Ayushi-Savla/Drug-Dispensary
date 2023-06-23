<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <?php
    require_once("connection.php");

    // Fetch data from the 'contracts' table
    $sql = "SELECT * FROM contracts";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Text of Contract</th>";
    echo "<th>Contract supervisor</th>";
    echo "<th>Start Date</th>";
    echo "<th>End Date</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["textofcontract"]."</td>";
        echo "<td>".$row["supervisor"]."</td>";
        echo "<td>".$row["startdate"]."</td>";
        echo "<td>".$row["enddate"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='4'>No contracts found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";

    // Fetch data from the 'doctor' table
    $sql = "SELECT * FROM doctor";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Doctor's SSN</th>";
    echo "<th>Name</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Password</th>";
    echo "<th>Email Address</th>";
    echo "<th>Gender</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["docssn"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["PhoneNumber"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["Gender"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No doctors found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";

    // Fetch data from the 'drug' table
    $sql = "SELECT * FROM drug";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Trade Name</th>";
    echo "<th>Formula</th>";
    echo "<th>Price</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["TradeName"]."</td>";
        echo "<td>".$row["formula"]."</td>";
        echo "<td>".$row["price"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='3'>No drugs found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";

    // Fetch data from the 'login' table
    $sql = "SELECT * FROM login";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>password</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='2'>No logins found</td></tr>";
    }

    echo "</table>";

    echo"<br>";
    
    // Fetch data from the 'patient' table
    $sql = "SELECT * FROM patient";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Patient SSN</th>";
    echo "<th>Name</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Password</th>";
    echo "<th>Email Address</th>";
    echo "<th>Gender</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["patientssn"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["PhoneNumber"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["Gender"]."</td>";

        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No patients found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";

    // Fetch data from the 'pharmaceuticalcompany' table
    $sql = "SELECT * FROM pharmaceuticalcompany";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Pharmaceutical Company SSN</th>";
    echo "<th>Pharmaceutical Company Name</th>";
    echo "<th>Email Address</th>";
    echo "<th>Phone Number</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["pcSSN"]."</td>";
        echo "<td>".$row["pcName"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["PhoneNo"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='4'>No Pharmaceutical Companies found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";

    // Fetch data from the 'pharmacy' table
    $sql = "SELECT * FROM pharmacy";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Pharmacy Name</th>";
    echo "<th>Pharmacy SSN</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Pharmacy's Profit Percentage (%)</th>";
    echo "<th>Drug Trade Name</th>";
    echo "<th>Email Address</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["phSSN"]."</td>";
        echo "<td>".$row["phoneNo"]."</td>";
        echo "<td>".$row["profitPercentage"]."</td>";
        echo "<td>".$row["drugTradeName"]."</td>";
        echo "<td>".$row["address"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No Pharmacies found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";
    
    // Fetch data from the 'prescriptions' table
    $sql = "SELECT * FROM prescriptions";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Prescription No.</th>";
    echo "<th>Prescription Date</th>";
    echo "<th>Quantity</th>";
    echo "<th>Patient SSN</th>";
    echo "<th>Doctor SSN</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["prescriptionNo"]."</td>";
        echo "<td>".$row["prescriptionDate"]."</td>";
        echo "<td>".$row["quantity"]."</td>";
        echo "<td>".$row["patientssn"]."</td>";
        echo "<td>".$row["docssn"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No Prescriptions found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";
    
    // Fetch data from the 'staff' table
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    
    // Generate the HTML table
    echo "<table>";
    
    // Generate table header
    echo "<tr>";
    echo "<th>Staff No.</th>";
    echo "<th>Name</th>";
    echo "<th>Prescription No.</th>";
    echo "<th>Salary</th>";
    echo "<th>Bonus</th>";
    
    echo "</tr>";
    
    // Populate table rows with data
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["staffno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["prescriptionno"]."</td>";
        echo "<td>".$row["salary"]."</td>";
        echo "<td>".$row["bonus"]."</td>";
        
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No Staff found</td></tr>";
    }
    
    echo "</table>";

    echo"<br>";
    
    // Close the database connection
    $conn->close();
  ?>
</body>
</html>