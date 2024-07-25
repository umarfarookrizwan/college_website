<?php include ('header.html'); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: url('https://online.crescent-institute.edu.in/img/home/about-us-content.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .registration-container {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        padding-top: 700px;
        padding-bottom: 100px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    fieldset {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 15px;
    }

    legend {
        padding: 0 10px;
        font-weight: bold;
    }

    label {
        margin-bottom: 5px;
        color: #333;
    }

    input, select, textarea {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: calc(100% - 22px);
    }

    textarea {
        resize: vertical;
    }

    button {
        padding: 10px;
        background-color: #5cb85c;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }

</style>
<body>
    <div class="registration-container">
        <h2>Student Registration Form</h2>
        <form action="connect.php" method="POST">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>

                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>

                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>

                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>

            <fieldset>
                <legend>Contact Information</legend>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Address</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Academic Information</legend>

                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                    <option value="btech">B.Tech</option>
                    <option value="bsc">B.Sc</option>
                    <option value="ba">B.A</option>
                    <option value="bcom">B.Com</option>
                    <option value="mtech">M.Tech</option>
                    <option value="msc">M.Sc</option>
                    <option value="ma">M.A</option>
                    <option value="mcom">M.Com</option>
                </select>

                <label for="enrollment-year">Year of Enrollment</label>
                <input type="number" id="enrollment-year" name="enrollment_year" min="2000" max="2024" required>

                <label for="roll_number">Roll Number</label>
                <input type="text" id="roll_number" name="roll_number" required>
            </fieldset>

            <button type="submit">Register</button>
        </form>
    </div>
</body>

<?php include ('footer.html'); ?>
