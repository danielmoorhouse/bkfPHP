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

                    <img src="images/clubbersisetitle.png">

                    <div class="col-md-6 box">
                        <p style="color: white; padding: 3%; font-size: 1.1em;"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/bazclass.jpg" style="width: 60%; border: 3px solid #7829ff ;">
            </div>
            <div class="col-md-6">
                <p style="color: white; padding: 5%; padding-left: 5em; padding-right: 5em; font-size: 25px;">
                    Clubbercise consists of; glow sticks, lights out, club anthems and raised volume! This class is perfect for anyone, new
                    starters needn’t worry about two left feet as it’s in the dark with just flashing disco lights.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p style="color: white;  padding: 5%; padding-left: 5em; padding-right: 5em; font-size: 25px;">
                    Enjoy tunes from the 90’s to the latest floorfilla’s, with a set of glow sticks which provides an extra workout for your
                    arms. The class, which lasts just one hour can burn up to a massive 500 calories, and provides super muscle toning and
                    flexibility.


            </div>
            </p>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/zumbanew.jpg" style="width: 60%; border: 3px solid #7829ff; margin-bottom: 1.5em;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">
                    <div id="book">
                        <p><span class="mkchc">#MakeTheChange//</span> <a class="booklinkclub"
                                href="https://bkfitness.co.uk/bookings/zumbafitness.php"><span class="b">Book</span><span class="c">
                                    Clubbercise</span><span class="h"> here</span>
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/vicki.png" style="width: 40%; border: 3px solid #7829ff;">
            </div>
            <div class="col-md-6">
                <p class="testimonial" style="color: white;  padding: 5%; padding-left: 5em; padding-right: 5em; font-size: 25px;">
                    <i class="fas fa-quote-left"></i> When my friend talked me into joining Clubbercise I didn't think I would be able to do
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
var interval = 1000;
var timer;

$(window).on("load", function() {
    loop();
    setTimeout('clearTimeout(timer)', 5000);
});

function loop() {
    $("#book").effect("shake", {
        distance: 1
    }, interval);

    status ? status = false : status = true;
    timer = setTimeout('loop()', 10);
}
</script>