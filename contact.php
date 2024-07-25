<?php include ('header.html'); 
?>
<head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            justify-content: center;
            background-image: linear-gradient(lightblue,lightblue);
        }
        .contact-info{
            margin-bottom: 20px;
        }
        .map{
            margin-top: 20px;
        }
        iframe{
            border: none;
            width: 100%;
            height: 300px;
            border-radius: 10px;
            padding-right: 60px;
        }
        p{
            text-align: left;
            text-decoration: white;
            color:black;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;padding:20px; color:darkblue" >CONTACT US
    </h2>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15558.008551079403!2d80.07860330518923!3d12.87540057969158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f60e8ef70dad%3A0x1b7886934a452db8!2sB.%20S.%20Abdur%20Rahman%20Crescent%20Institute%20Of%20Science%20And%20Technology!5e0!3m2!1sen!2sin!4v1719798415842!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">" frameborder="0"></iframe>
    </div>
    <div class="contact-info">
        <p><strong>ADDRESS:</strong></p>
        <p>
            <b>B.S.ABDUR RAHMAN CRESCENT INSTITUTE OF SCIENCE & TECHNOLOGY</b>
        </p>
        <pre>120 Seethakathi Estate, Grand</pre>
        <pre>Southern Trunk Rd, Vandalur, Tamil</pre>
        <pre>Nadu 600048</pre><br>
        <p><strong>PHONE NO:</strong></p>
        <p><a href="phn:9876543210">9876543210</a></p>
        <p><a href="tel:8967452310">8967452310</a></p>
        <p><strong>EMAIL ID:</strong></p>
        <p><a href="www.crescent.education"></a></p>
    </div>
</body>

<?php include ('footer.html');
 ?>