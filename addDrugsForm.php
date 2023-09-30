<!DOCTYPE html>
<html>
<head>
    <title>Add Drug Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ead1dc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 22px;
            text-align: center;
        }

        form {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 3px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Add Drug Details</h1>
    <form action="savedrug.php" method="POST" enctype="multipart/form-data">
        <label for="drugName">Drug Name:</label>
        <input type="text" name="drugName" required><br>

        <label for="drugDescription">Drug Description:</label>
        <input type="text" name="drugDescription" required><br>

        <label for="drugPrice">Drug Price:</label>
        <input type="text" name="drugPrice" required><br>

        <label for="drugQuantity">Drug Quantity:</label>
        <input type="int" name="drugQuantity" required><br>

        <label for="drugExpirationDate">Drug Expiration Date:</label>
        <input type="date" name="drugExpirationDate" required><br>

        <label for="drugManufacturingDate">Drug Manufacturing Date:</label>
        <input type="date" name="drugManufacturingDate" required><br>

        <label for="drugCompany">Drug Company:</label>
        <input type="text" name="drugCompany" required><br>

        <label for="category">Category:</label>
        <select name="category">
            <option value="painkillers">Painkillers</option>
            <option value="blood pressure">Blood pressure</option>
            <option value="allergies">Allergies</option>
            <option value="cholesterol">Cholesterol</option>
            <option value="antidepressants">Anti-depressants</option>
            <option value="facewash">Facewash</option>
        </select><br>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
