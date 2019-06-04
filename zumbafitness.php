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

                    <h1 class="classtitle" style="color: #D8df55; font-size:65px; margin-top: 3%;">
                        #ZumbaFitness//

                        <div class="col-md-6 box">
                            <p style="color: white; padding: 3%; font-size: 1.1em;"></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" style="text-align: center;">
                <img src="images/bazclass.jpg" style="width: 60%; border: 3px solid #5B54DE ;">
            </div>
            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 5em; padding-right: 6em; font-size: 25px;  text-align: justify;">
                    The workout is basically watch and follow. The moves are repeated often enough
                    for you to catch on and they're not complicated. The routines are repeated week
                    after week with additions every now and then to spice things up even more!

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p style="color: white; padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    Zumba fitness provides a very exciting dance party atmosphere full of Latin and
                    international music. You'll forget you're working out with the sexy but simple
                    moves to dance music like Cha Cha, Salsa, reggaeton, rumba and more. Best of
                    all, you don't need any previous dance experience! It's fun and effective, using
                    interval training combining fast and slow rhythms for an effective aerobic
                    workout while at the same time targeting your legs, abs, glutes and arms.
                </p>

            </div>
            </p>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/zumbanew.jpg" style="width: 60%; border: 3px solid #5B54DE
; margin-bottom: 2.5em;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">

                    <p class="mkchzf">#MakeTheChange//<span><a id="book" class="booklinkzumba"
                                href="https://bkfitness.co.uk/bookings/zumbafitness.php"><span></span> Book<span> Zumba</span><span>
                                    Fitness</span><span> here</span>
                            </a></span></p>

                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/louise.png" style="width: 50%; border: 3px solid #7829ff;">
            </div>
            <div class="col-md-6">
                <p class="testimonial" style="color: white;  padding-left: 1em; padding-right: 8em;   text-align: justify;">
                    <i class="fas fa-quote-left"></i> I was looking for some kind of excercise to help me with my weight loss journey and
                    someone suggested 'Zumba with Barry', as the Gym was not an option for me. I started going to class once a week, in
                    January 2016 and have not looked back. Now I sometimes attend 5 classes a week!
                    <br>
                    I have never enjoyed excersise so much in my life. Barry is great with everyone, putting you at ease, and making
                    excercise fun! The classes are so enjoyable, I often realise I havent even thought about all the hard work I'm actually
                    putting in.
                    But don't take my word for it, give it a go yourself, I can gurantee you will love it.
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