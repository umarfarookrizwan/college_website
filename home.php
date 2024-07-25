<?php include ('header.html'); ?>
<div id="home1" class="slideshow-container">
    <div class="mySlides fade">
        <img src="https://themeritlist.com/wp-content/uploads/2020/08/00155-175.jpg" alt="">
    </div>
    <div class="mySlides fade">
        <img src="https://media.licdn.com/dms/image/C511BAQHwyUT7xVA35Q/company-background_10000/0/1584375184918?e=2147483647&v=beta&t=Vt1mBafWbbmgA07i2V9igQky84kDEo2u3HWhEKYzvaY" alt="">
    </div>
    <div class="mySlides fade">
        <img src="https://i0.wp.com/architecture.live/wp-content/uploads/2019/12/08.jpg?ssl=1" alt="">
    </div>
</div>
<div class="body1">
    <p>
    B.S. Abdur Rahman Crescent Institute of Science and Technology,
    formerly B. S. Abdur Rahman University, is a private deemed
    university located in Tamil Nadu, India.[1] Previously, functioning
    under University of Madras (1984–2001) and Anna University 
    (2001–09) as Crescent Engineering College, the institute gained
    deemed status in 2008–09. It is located in Vandalur near
    Tambaram and cmbt bus stand, opposite to Arignar Anna 
    Zoological Park, a suburban area of Chennai, India.
    It is one of the prominent colleges in Tamil Nadu.
    </p>
</div>
<div class="body2">
    <p>
    B. S. Abdur Rahman Crescent Institute of Science and Technology 
    was founded by Tamil businessman and philanthropist B. S. Abdur
    Rahman in 1984 as Crescent Engineering College, a Muslim minority 
    institution approved by the All India Council of Technical Education
    and affiliated to University of Madras. The college was affiliated
    to University of Madras until the year 2001. From 2002, many
    engineering colleges in the city of Chennai changed affiliations
    to Anna University. University of Madras became an umbrella
    university, exclusively for non-professional, Art & Sciences 
    colleges that offer BSc & BCom degrees. Many colleges chose 
    not to affiliate with any university and became deemed universities
    in their own right. Crescent Engineering College was affiliated
    to Anna University until 2008. It was elevated to deemed to be 
    university status as B. S. Abdur Rahman University in December 2008.
    [4] In 2017, it was renamed as B.S. Abdur Rahman Crescent Institute
    of Science and Technology following the UGC request to drop the 
    "University" from the name.
    </p>
</div>
<style>
    body {
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        background-color: lightblue; 
        margin: 0;
        padding: 0;
    }
    #home1 {
        width: 100%;
        position: relative;
        margin-top: 20px;
    }
    .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
    }
    .mySlides {
        display: none;
    }
    .mySlides img {
        width: 100%;
        max-height: 600px; 
        height: auto;
    }
    .body1, .body2 {
        width: 90%;
        text-align: justify;
        margin: 20px 0;
        margin-left: 60px;
    }
    .body2 {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000); 
    }
</script>

<?php include ('footer.html'); ?>
