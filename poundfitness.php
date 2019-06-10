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

                    <h1 class="classtitle" style="color: #54D406; font-size: 65px; margin-top: 4%;">
                        #PoundFitness//
                        <div class="col-md-6 box">
                            <p style="color: white; padding: 3%; font-size: 1.1em;"></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6" style="text-align: center;">
                <img src="images/pndnew.jpg" style="width: 60%; border: 3px solid #d400d4;">
            </div>
            <div class="col-md-6">

                <p style="color: white;  padding: 5%; padding-left: 5em; padding-right: 6em; font-size: 25px;   text-align: justify;">
                    POUND® is a full-body cardio and conditioning class that allows you to rock
                    using lightly weighted exercise drumsticks, called Ripstix™.<br>
                    Barry has been running dance fitness classes for over 6yrs in the Blackpool
                    area, and is very excited to now be offering this 360 degree body workout. Barry
                    is sure this special workout is going to be a hit amongst his fabulous fitness
                    following and is offering 45 minute classes on Fridays, 7.15pm @ Holy Family on
                    Links Rd.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <p style="color: white;  padding-top: 5em; padding-left: 6em; padding-right: 5em; font-size: 25px;  text-align: justify;">
                    POUND® distracts you from the high-intensity and duration of your workout, and
                    shifts your focus to rhythm and volume. This is responsible for the
                    "addictiveness" of POUND® - the reason you can't stay away! Songs consist of
                    interval peaks and extended fat burning sequences, providing you with the best
                    workout in the shortest span of time. After you’re done rocking out in a POUND
                    class, you’ll have completed up to 15,000 reps, performed over 30 extended
                    interval peaks, and zipped through more than 70 techniques without even
                    realizing it.
                </p>

            </div>
            </p>
            <div class="col-md-6" style="text-align: center;">
                <img src="images/poundclass.jpg" style="width: 60%; border: 3px solid #d400d4; margin-bottom: 4.5em;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center booknow">

                    <p class="mkchp">#MakeTheChange//<span><a id="book" class="booklinkpound"
                                href="https://bkfitness.co.uk/bookings/zumbafitness.php"> Book Pound Fitness here</a></span>
                    </p>

                </div>
            </div>
        </div>
        <div class="row  lastdiv">
            <div class="col-md-6" style="text-align: center;">
                <img src="images/bekistory.png" style="width: 50%; border: 3px solid #d400d4;">
            </div>
            <div class="col-md-6">
                <p class="testimonial" style="color: white;  padding-left: 1em; padding-right: 8em;   text-align: justify;"">
                    <i class=" fas fa-quote-left"></i>I decided to join Barry's Classes after being unhappy with my holiday photo's. From
                    day one, he welcomed me into class. I would look forward to Barry's classes as they are so much fun, and after all these
                    years, still do.
                    <br>I started to lose weight and gained confidence, which got me hooked. You would be mad not to give it a try. I never
                    thought that in 5 years I would be where I am now. Classes are like we are a family, and I have gained some friends for
                    life.
                    Now, I sometimes cover Barry's classses if he is a away (something I would have laughed at the thought of) and have even
                    started my own class. So thank you Barry for giving me back my confidence and believing in me, you are one in a
                    million!
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