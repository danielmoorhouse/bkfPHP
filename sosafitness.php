<!doctype html>
<html>

<?php 
include 'inc/nav.php';
?>

<body style="background-color: black;">
    <?php include 'nav.php' ?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="container page">

                    <h1 class="classtitle" style="color: #E74992; font-size: 65px; margin-top: 4%;">#SosaFitness//

                        <div class="col-md-6 box">
                            <p style="color: white; padding: 3%; font-size: 1.1em;"></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" style="text-align: center;">
                <img src="images/sosanew.jpg" style="width: 50%; border: 3px solid #4992e7;">
            </div>
            <div class="col-md-6">
                <p style="color: white; padding: 5%; padding-left: 5em; padding-right: 6em; font-size: 25px;   text-align: justify;">
                    I am now a recently qualified Pro Trainer for SOSA! .... which means I am not only qualified to instruct a class, I also
                    teach future instructors. Please click here to register your Sosa interest, whether it be about qualifying to become an
                    instructor or taking a Sosa class for fitness!

                </p>
            </div>
        </div>

        <div class="row">


            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    Sosa is a relatively new dance fitness class which uses authentic international dance styles, inspired by Salsa,
                    Ballroom, Latin and more. Sosa fitness classes are an infusion of dance and exercise which promotes fabulous body
                    styling in a fun welcoming atmosphere.

                </p>
            </div>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/sos1.jpeg" style="width: 30%; border: 3px solid #4992e7;">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/sosa3.jpg" style="width: 60%; border: 3px solid #4992e7; margin-bottom: 1.5em;">
            </div>
            <div class="col-md-6">
                <p style="color: white;  padding: 5%; padding-left: 5em; padding-right: 6em; font-size: 25px;   text-align: justify;">
                    Sosa fitness is made for everyone, from experienced dancers who enjoy keeping up with the progressions, to beginners who
                    have no dance experience. This high energy class is also designed to be low-impact on the body making it safe and
                    suitable for any level of fitness, age, shape or size.

                </p>

            </div>
            </p>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">

                    <p class="mkchs">#MakeTheChange//<span><a id="book" class="booklinksosa"
                                href="https://bkfitness.co.uk/bookings/zumbafitness.php"> Book Sosa Fitness here
                        </span>
                        </a></p>
                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/hazel.png" style="width: 50%; border: 3px solid #4992e7;">
            </div>
            <div class="col-md-6">
                <p class="testimonial" style="color: white;  padding-left: 1em; padding-right: 8em;   text-align: justify;"">
                    <i class=" fas fa-quote-left"></i> When my friend talked me into joining Clubbercise I didn't think I would be able to
                    do
                    it due to health issues, how
                    wrong was I? From the minute I stepped into Barry's class, I was made to feel welcome and encouraged to do, only what I
                    was capable of...and have fun!<br>
                    Over a year later I am still loving it and enjoying the benefits from exercise and a healthy eating plan. I cannot
                    recommend Barry and his classes highly enough. It was the best decision I ever made! <i class="fas fa-quote-right"></i>

                </p>
            </div>
        </div>
    </div>
    <?php 
include 'inc/footer.php';
?>
</body>

</html>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
var status = true;
var timer;
$(document).ready(function() {
    loop();
    setTimeout('clearTimeout(timer)', 5000);
});

function loop() {
    $("#book").effect("shake", {
        distance: 1
    });

    status ? status = false : status = true;
    timer = setTimeout('loop()', 10);
}
</script>