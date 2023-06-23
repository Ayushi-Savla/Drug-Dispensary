<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Insert Data</title>
</head>
<style media="screen">
    label {
        display;
    }
</style>
<body>
    <h2>Patient's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">patientssn</label>
        <input type="number" name="patientssn" required value="">
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">PhoneNo</label>
        <input type="number" name="PhoneNo" required value="">
        <label for="">Password</label>
        <input type="password" name="Password" required value="">
        <label for="">Address</label>
        <input type="text" name="Address" required value="">
        <label for="">Gender</label>
        <input type="text" name="Gender" required value="">

        <h2>Doctor's Form</h2>
        <label for="">docssn</label>
        <input type="number" name="docssn" required value="">
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">PhoneNumber</label>
        <input type="number" name="PhoneNumber" required value="">
        <label for="">Password</label>
        <input type="password" name="password" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        <label for="">Gender</label>
        <input type="text" name="Gender" required value="">

        <h2>Drug's Form</h2>
        <label for="">TradeName</label>
        <input type="text" name="TradeName" required value="">
        <label for="">formula</label>
        <input type="text" name="formula" required value="">
        <label for="">price</label>
        <input type="number" name="price" required value="">

        <h2>Contract's Form</h2>
        <label for="">textofcontract</label>
        <input type="text" name="textofcontract" required value="">
        <label for="">supervisor</label>
        <input type="text" name="supervisor" required value="">
        <label for="">startdate</label>
        <input type="date" name="startdate" required value="">
        <label for="">enddate</label>
        <input type="date" name="enddate" required value="">

        <h2>Pharmaceutical Company's Form</h2>
        <label for="">pcSSN</label>
        <input type="number" name="pcSSN" required value="">
        <label for="">pcName</label>
        <input type="text" name="pcName" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        <label for="">PhoneNumber</label>
        <input type="number" name="PhoneNumber" required value="">
        
        <h2>Pharmacy's Form</h2>
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">phSSN</label>
        <input type="number" name="phSSN" required value="">
        <label for="">PhoneNo</label>
        <input type="number" name="PhoneNo" required value="">
        <label for="">ProfitPercentage</label>
        <input type="number" name="profitPercentage" required value="">
        <label for="">drugTradeName</label>
        <input type="text" name="DrugTradeName" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        
        <h2>Prescription's Form</h2>
        <label for="">PrescriptionNo</label>
        <input type="number" name="prescriptionNo" required value="">
        <label for="">PrescriptionDate</label>
        <input type="Date" name="prescriptionDate" required value="">
        <label for="">Quantity</label>
        <input type="number" name="quantity" required value="">
        <label for="">patientssn</label>
        <input type="number" name="patientssn" required value="">
        <label for="">docssn</label>
        <input type="number" name="docssn" required value="">

        <h2>Staff's Form</h2>
        <label for="">staffNo</label>
        <input type="number" name="prescriptionNo" required value="">
        <label for="">name</label>
        <input type="text" name="name" required value="">
        <label for="">PrescriptionNo</label>
        <input type="number" name="prescriptionNo" required value="">
        <label for="">Salary</label>
        <input type="number" name="salary" required value="">
        <label for="">Bonus</label>
        <input type="number" name="bonus" required value="">

        <br></br>

        <br>
        <button type="submit" name="submit">Submit All</button>
        </br>
    </form>
</body>
</html>
