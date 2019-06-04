<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BKFitness</title>
</head>
<?php 
include 'inc/nav.php';
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="gallery">

                <img src="images/zumbadark.png">
                <img src="images/clubbercisedark.png">
                <img src="images/zumgdark.png">
                <img src="images/pounddark.png">
                <img src="images/SOSAdark.png">
                <img src="images/mashdark.png">
            </div>
            <div class="col-md-4 colourone">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12  regi">
                            <div class="row">
                            </div>
                        </div>
                        <div class="col-md-6 text-center" data-toggle="tooltip" data-placement="top"
                            title="Zumba Fitness Details -- #MakeTheChange// and Book Zumba Fitness">
                            <div class="container cont">
                                <a href="zumbafitness.php" class="img"> <img src="images/zba.png" width="150" class="image"></a>
                            </div>
                        </div>

                        <div class="col-md-6 text-center" data-toggle="tooltip" data-placement="top"
                            title="Zumba Gold Details -- #MakeTheChange// and Book Zumba Gold">
                            <div class="container cont">
                                <a href="zumbagold.php" class="img"> <img src="images/zbg.png" width="130" class="image"> </a>
                            </div>
                        </div>

                    </div>



                    <div class="row imgrow">
                        <div class="col-md-6 text-center " data-toggle="tooltip" data-placement="bottom"
                            title="MashUp Details -- #MakeTheChange// and Book MashUp">
                            <div class="container cont">
                                <a href="mashup.php" class="img"> <img src="images/msl.png" width="180" class="image"> </a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center" data-toggle="tooltip" data-placement="top"
                            title="Clubbercise Details -- #MakeTheChange// and Book Clubbercise">
                            <div class="container cont">
                                <a href="clubbercise.php" class="img"> <img src="images/cc.png" width="120" class="image">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row imgrow">
                        <div class="col-md-6 text-center " data-toggle="tooltip" data-placement="bottom"
                            title="Sosa Fitness Details -- #MakeTheChange// and Book Sosa Fitness">
                            <div class="container cont">
                                <a href="sosafitness.php" class="img"> <img src="images/sosa.gif" width="170" class="image"></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center" data-toggle="tooltip" data-placement="top"
                            title="Pound Fitness Details -- #MakeTheChange// and Book Zumba Fitness">
                            <div class="container cont">
                                <a href="pound.php" class="img"> <img src="images/pound.gif" width="170" class="image"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 colourtwo">
                <div class="container">
                    <h2 class="whitetitle">Welcome to,</h2><br>
                    <h1 class="bkf">Barry Kinder Fitness </h1>
                    <h4 class="title">"Do you want get fit and have fun at the same time?"</h4>
                    <h4 class="titletwo"> if you answered 'yes'....read on....</h4>
                    <p class="whitetext"> Hello and welcome to my Website. I hope you find all the information you
                        need
                        in
                        helping
                        you make your first step into taking a class. It can seem daunting when you take the plunge
                        to
                        start
                        something new, alone or even with friends. However, I can guarantee that the classes are
                        friendly
                        and welcoming.
                        I am qualified to teach Zumba Fitness, Zumba Gold, Zumba Toning, Zumba Kids, Clubbercise,
                        Pound
                        Fitness, SOSA Dance Fitness and my own special 'MashUp'. <br> <br> I offer a
                        wide variety of classes which help with mobility, increase fitness levels, tone muscles,
                        gain
                        confidence, improve coordination, making new friends and just feeling great
                        in general. So if you are looking for something new and exciting, that is enjoyable and
                        NEVER a
                        chore, take a look at my<a asp-area="" asp-controller="Timetable" asp-action="Index">
                            timetable</a>.
                        I hope to see you at one of my classes soon. </p>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="container baz">
                            <p class="quote">"My classes are <br>
                                designed to be fun, <br>
                                not a chore.....<br>
                                shed those pounds <br>
                                enjoyably, without <br>
                                any conscious effort!!" </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="container baz">
                            <img src="images/bazzhomeimg.jpg" width="270" class="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 colourthree">
                <div class="container">

                </div>
            </div>

        </div>

    </div>

</body>
<?php 
include 'inc/footer.php';
?>


<script type="text/javascript">
$(document).ready(function() {
    var
        images = "#gallery > img" // image selector
        ,
        interval = 4000 // milliseconds between transitions
        ,
        index = 0 // starting index
        ,
        count = $(images).length // image count
        // the transition loop
        ,
        handle = setInterval(function() {
            // fade out the current image
            $(images + ":eq(" + index + ")").fadeOut('slow');
            // get the next index, or cycle back to 0
            if (++index === count) index = 0;
            // fade in the next image
            $(images + ":eq(" + index + ")").fadeIn('slow');
        }, interval),
        stop = function() {
            clearInterval(handle);
        };
});
</script>