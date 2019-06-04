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

                    <h1 class="classtitle" style="color: #FFBE3C; font-size: 65px; margin-top: 3%;">
                        #ZumbaGold//

                        <div class="col-md-6 box">
                            <p style="color: white; padding: 3%; font-size: 1.1em;"></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" style="text-align: center;">
                <img src="images/golds.jpg" style="width: 60%; border: 3px solid #3cffbe ;">
            </div>
            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    Zumba Gold takes the popular Latin-dance inspired workout of Zumba and makes it
                    accessible for older adults, beginners or others needing modifications in their
                    exercise routine.

                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    Zumba Gold breaks dances down to address the needs of active older adults or the
                    unconditioned beginner. Non-supported moves and chair-based options are
                    available to participants in Zumba Gold.
                </p>

            </div>
            </p>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/zumgoldimg1.jpg" style="width: 60%; border: 3px solid #3cffbe; margin-bottom: 4em;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">

                    <p class="mkchzg">#MakeTheChange//<span><a id="book" class="booklinkzumbag"
                                href="https://bkfitness.co.uk/bookings/zumbagold.php"> Book Zumba Fitness here
                            </a></span></p>

                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/edwina.png" style="width: 50%; border: 3px solid #3cffbe;">
            </div>
            <div class="col-md-6">
                <p class="testimonial" style="color: white;  padding-left: 1em; padding-right: 8em;   text-align: justify;">
                    <i class="fas fa-quote-left"></i> Hi Barry, just want to thank you for changing my life. Curiosity first got me to Zumba
                    Gold a few years ago. I soon became hooked, and to my delight, started losing weight without dieting.<br>
                    I am a diabetic and my medication has been halved due to my improved fitness, through attending your classes. I have now
                    lost over 2 stone, thanks to your great teaching and fantastic fun filled classes.
                    <i class="fas fa-quote-right"></i>

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