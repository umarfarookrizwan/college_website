<?php include ('header.html'); 
?>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.content {
    width: 90%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.programmes {
    display: flex;
    flex-direction: column;
}

.programme {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border-bottom: 1px solid #ccc;
}

.programme a {
    text-decoration: none;
    color: #007BFF;
    font-size: 18px;
}

.programme .buttons {
    display: flex;
    gap: 10px;
}

.programme button {
    padding: 10px 20px;
    border: none;
    background-color: #007BFF;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
}

.programme button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

    <div class="content">
        <h1>Undergraduate Programmes offered in the Academic Year 2024-25</h1>
        <div class="programmes">
            <div class="programme">
                <a href="#">B. Tech. Civil Engineering</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <div class="programme">
                <a href="#">B. Tech. Computer Science Engineering</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <div class="programme">
                <a href="#">B. Tech. Infomation Technology</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <div class="programme">
                <a href="#">B. Tech. Eelectrical Comunication Engineering</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <div class="programme">
                <a href="#">B. Tech. Mechanical Engineering</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <div class="programme">
                <a href="#">B. Tech. Automobile Engineering</a>
                <div class="buttons">
                    <button>MORE INFO</button>
                    <button>APPLY NOW</button>
                </div>
            </div>
            <!-- Repeat for other programmes -->
        </div>
    </div>
</body>

<?php include ('footer.html');
 ?>
