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
                <div class="container page text-center">
                    <img src="images/mashtitle.png" width="450" style="margin-bottom: 3%;">

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" style="text-align: center;">
                <img src="images/grp.jpg" style="width: 60%; border: 3px solid #FF4F4F ;">
            </div>
            <div class="col-md-6">
                <p style="color: white;padding: 5%; padding-left: 5em; padding-right: 6em; font-size: 25px;   text-align: justify;">
                    The workout is basically watch and follow. The moves are repeated often enough for you to catch on and they're not
                    complicated. The routines are repeated week after week with additions every now and then to spice things up even more!

                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    Zumba fitness provides a very exciting dance party atmosphere full of Latin and international music. You'll forget
                    you're working out with the sexy but simple moves to dance music like Cha Cha, Salsa, reggaeton, rumba and more. Best of
                    all, you don't need any previous dance experience! It's fun and effective, using interval training combining fast and
                    slow rhythms for an effective aerobic workout while at the same time targeting your legs, abs, glutes and arms.
                </p>


            </div>
            </p>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/poundgrp.jpg" style="width: 60%; border: 3px solid #FF4F4F; margin-bottom: 1.5em;">

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">

                    <p class="mkchmu">#MakeTheChange//<span><a id="book" class="booklinkmu"
                                href="https://bkfitness.co.uk/bookings/zumbafitness.php"> Book MashUp here</a></span>
                    </p>

                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/nicsstory.png" style="width: 50%; border: 3px solid #50FFFF;">
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