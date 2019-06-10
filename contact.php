<!doctype html>
<html>

<?php 
include 'inc/nav.php';
?>

<body style="background-color: black;">

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 text-center">
                <h1 class="contacttitle">Contact Me</h1>
                <!-- Starting of ajax contact form -->
                <form class="contact__form" method="post" action="mail.php">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <input name="submit" type="submit" class="btn btn-success" value="Send Message">
                        </div>
                    </div>
                </form>
                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                    Your message was sent successfully.
                </div>
                <div id="vidcontainer">
                    <iframe src="https://player.vimeo.com/video/232973837" width="640" height="360" frameborder="0" webkitallowfullscreen
                        mozallowfullscreen allowfullscreen id="vid"></iframe>
                </div>


            </div>
            <div class="col-md-7 text-center">
                <h1 class="contacttitle">Facebook Page</h1>
                <div class="fb-page" id="feed" data-href="https://www.facebook.com/barrykinderfitness" data-tabs="timeline"
                    data-width="1000" data-height="1000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/barrykinderfitness" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/barrykinderfitness">Barry Kinder Fitness</a></blockquote>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
    <?php include'inc/footer.php' ?>

</body>

</html>