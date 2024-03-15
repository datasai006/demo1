<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/')?>form.css" />


    <title>User Input Form</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h2>User Input Form</h2>
        </div>
        <div class="card-body">
            <form id="userForm" action="<?php echo base_url()?>Project/add" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <span id="nameError" class="error"></span>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                <span id="ageError" class="error"></span>

                <label for="DOF">Date Of Birth:</label>
                <input type="date" id="DOF" name="DOF" required>
                <span id="DOFError" class="error"></span>
            </form>
        </div>
        <div class="card-footer">
            <button type="button" onclick="validateForm()">Submit</button>
        </div>


        <div>
            <p>view data <a href="<?php echo base_url()?>Project/display_data">click here</a></p>
        </div>
    </div>

    <script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var age = document.getElementById("age").value;
        var DOF = document.getElementById("DOF").value;

        document.getElementById("nameError").innerText = "";
        document.getElementById("emailError").innerText = "";
        document.getElementById("ageError").innerText = "";
        document.getElementById("DOFError").innerText = "";

        if (name.trim() === "") {
            document.getElementById("nameError").innerText = "Name is required";
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").innerText = "Invalid email format";
            return false;
        }

        if (age.trim() === "" || isNaN(age) || parseInt(age) <= 0) {
            document.getElementById("ageError").innerText = "Age must be a positive number";
            return false;
        }

        if (DOF.trim() === "") {
            document.getElementById("DOFError").innerText = "Date of Birth is required";
            return false;
        }

        document.getElementById("userForm").submit();
    }
    </script>

</body>

</html>