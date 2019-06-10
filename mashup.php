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
                    MashUp is something I decided to start when I realised how many people loved each of my classes, but could not attend
                    them
                    all, due to other commitments. The class consists of a 'MashUp' of styles, which can include: Zumba Fitness, Clubbercise
                    and Pound Fitness! This class is fun, effective and never gets boring!
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    The workout is basically watch and follow. The moves are repeated often enough for you to catch on and they're not
                    complicated. The routines are repeated week after week with additions every now and then to spice things up even more!
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
                    <i class=" fas fa-quote-left"></i>I have been going to Barrys classes, on and off since they started 8 years ago. The
                    mistake I made was taking a break, as the weight I'd previously lost, started to pile back on. I felt awful, embarrased
                    to be seen, let alone go back to class. <br> Barry assured me there was nothing to worry or be embarrased about going
                    back to
                    class (even
                    offering me an outfit when I didn't have any clothes for class which fit me!). Now 6 months later I've lost 3 and half
                    stone! If you are looking to lose weight and get fit whilst having fun, get yourself to one of Barry's classes. It'll be
                    one of the best things you ever do!!


                    <i class="fas fa-quote-right"></i>

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