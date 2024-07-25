<?php include ('header.html'); 
?>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('https://media.licdn.com/dms/image/C511BAQHwyUT7xVA35Q/company-background_10000/0/1584375184918?e=2147483647&v=beta&t=Vt1mBafWbbmgA07i2V9igQky84kDEo2u3HWhEKYzvaY') no-repeat center center fixed;
    background-size: cover;
}

.login-container {
    display: flex;
    justify-content: right;
    align-items: center;
    height: 100vh;
    padding-right: 100px;
    opacity: 80%;
}

.login-box {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.logo {
    width: 150px;
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.captcha-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.captcha {
    margin-left: 10px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

.forgot-password {
    display: block;
    margin-top: 10px;
    color: #007BFF;
    text-decoration: none;
}

.forgot-password:hover {
    text-decoration: underline;
}

.app-links {
    margin-top: 20px;
}

.app-links img {
    width: 150px;
}

</style>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="https://college4u.in/wp-content/uploads/2018/03/bsb.jpg" alt="Crescent Institute Logo" class="logo">
            <h2>Sign In</h2>
            <form>
                <div class="input-group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group captcha-group">
                    <label for="captcha">Captcha</label>
                    <input type="text" id="captcha" name="captcha" required>
                    <img src="https://your-captcha-url.png" alt="Captcha" class="captcha">
                </div>
                <button type="submit">Sign In</button>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </form>
            <div class="app-links">
                <a href="https://play.google.com/store/apps/details?id=com.iitms.crescent&pcampaignid=web_share" target="_blank"><img src="https://your-google-play-logo-url.png"  alt="Google Play" ></a>
            </div>
        </div>
    </div>
</body>

<?php include ('footer.html');
 ?>
