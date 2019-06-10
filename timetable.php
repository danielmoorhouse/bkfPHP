<!doctype html>
<html>

<style>
h4 {
    text-align: center;
    margin-bottom: 15%;
    color: white;
    font-size: 30px;

}

p {
    text-align: center;
    margin-top: 5%;
    font-weight: bold;
    font-size: 18px;
}

#bookbtn {
    width: 25%;
    margin: 0;
    padding: 0;
    margin-bottom: 5%;
    color: black;
    background-color: #14f702;
}

#myBtn {
    width: 25%;
    margin: 0;
    padding: 0;
    margin-bottom: 5%;
    background-color: blue !important;
}

.small {
    color: white;
}


h1 {

    text-align: center;
    font-size: 60px;
    margin-bottom: 5%;
    position: relative;
    z-index: -1;
}

.small {
    color: #00cc58;
}

#tablebkg {
    margin-left: 1.5em;
    marrgin-right: 1.5em;
}

#tablecontainer {
    margin-top: 2%;
    color: white;
    text-align: center;
}

.table a {
    color: rgb(58, 4, 109);
}

.table:hover a {
    color: rgb(43, 7, 247);

}

a:hover {
    color: #44ffd1 !important;
}

tr th {
    border: 2px solid white;
    width: 10%;
}

.day {
    border-bottom: 2px solid white;
}
</style>



<body style="background-color: black;">
    <?php include 'inc/nav.php' ?>




    <div class="container-fluid" id="maintable" style="margin-bottom: 10%;margin-top: 5%">
        <h1 class="classtitle">Class <span id="ttbl">Timetable</span></h1>
        <div class="container-fluid" id="tablebkg">
            <div class="row" id="tablecontainer">
                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <h3 class="day">Monday</h3>
                    <p style="color: #FFF612; 	font-family: 'Do Hyeon', sans-serif;">Zumba Fitness</p>
                    <p>6pm - 7pm<br /> Bispham United<br /> Reformed Church<br /></p>
                    <a href="https://bkfitness.co.uk/bookings/product/zumbafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Map</button>
                    <hr>

                    <p style="color: #FF4A4A; 	font-family: 'Do Hyeon', sans-serif;">Clubbercise</p>
                    <p>7.30pm - 8.30pm<br /> Bispham United <br />Reformed Church</p>
                    <a href="https://bkfitness.co.uk/bookings/product/clubbercise/" class="btn btn-primary" id="bookbtn">Book</a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Map</button>
                    <hr>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <h3 class="day">Tuesday</h3>
                    <p style="color:#FFA500; 	font-family: 'Do Hyeon', sans-serif;">Zumba Gold</p>
                    <p> 11am - 12pm<br /> Bispham United <br />Reformed Church<br /></p>
                    <a href="https://bkfitness.co.uk/bookings/product/zumbagold/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Map</button>
                    <hr>
                    <p style="color: #FFF612; 	font-family: 'Do Hyeon', sans-serif;">Zumba Fitness</p>
                    <p>6pm - 7pm<br /> Holy Family <br /> Church Hall</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/zumbafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal5">Map</button>
                    <hr>
                    <p style="color: #b5ff47; 	font-family: 'Do Hyeon', sans-serif;"><span style="color: #28C6FF;">MashUp</span></p>
                    <p> 8.00pm - 9.00pm<br /> Fleetwood<br />High</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/mashup/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal10">Map</button>
                    <hr>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <h3 class="day">Wednesday</h3>
                    <p style="color: #FF69B4; 	font-family: 'Do Hyeon', sans-serif;">SOSA Dance Fitness</p>
                    <p>11am - 12pm<br /> Vicarage Park <br />Community Centre<br /></p>
                    <a href="https://bkfitness.co.uk/bookings/product/sosafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal41">Map</button>
                    <hr>
                    <p style="color: #FFF612;	font-family: 'Do Hyeon', sans-serif;">Zumba Fitness</p>
                    <p> 6pm - 7pm<br /> Anchorsholme <br />Academy<br /></p> <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/zumbafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Map</button>
                    <hr>
                    <p style="color: #b5ff47; 	font-family: 'Do Hyeon', sans-serif;;"><span style="color: #28C6FF;">MashUp</span></p>
                    <p> 7.45pm - 8.45pm<br /> Vicarage Park <br />Community Centre</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/mashup/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal41">Map</button>
                    <hr>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <h3 class="day">Thursday</h3>

                    <p style="color:#FFA500; 	font-family: 'Do Hyeon', sans-serif;;">Zumba Gold</p>
                    <p> 11am - 12pm<br /> Bispham United<br /> Reformed Church<br /></p>
                    <a href="https://bkfitness.co.uk/bookings/product/zumbagold/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Map</button>

                    <hr>
                    <p style="color: #FF4A4A; 	font-family: 'Do Hyeon', sans-serif;">Clubbercise</p>
                    <p> 6pm - 7pm<br /> AVR Dance Studio<br /> Layton</p>

                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/clubbercise/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal31">Map</button>
                    <hr>
                    <p style="color: #FF4A4A; 	font-family: 'Do Hyeon', sans-serif;">Clubbercise</p>
                    <p> 8pm - 9pm<br /> Fleetwood High <br />School</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/clubbercise/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal10">Map</button>
                    <hr>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <h3 class="day">Friday</h3>
                    <p style="color: #FF69B4; 	font-family: 'Do Hyeon', sans-serif;">SOSA Dance Fitness</p>
                    <p>11am - 12pm<br /> Michael Hall <br />Theatre School<br /></p>
                    <a href="https://bkfitness.co.uk/bookings/product/sosafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal30">Map</button>
                    <hr>
                    <p style="color: #FFF612; 	font-family: 'Do Hyeon', sans-serif;">Zumba Fitness</p>
                    <p> 6pm - 7pm<br /> Holy Family <br />Church Hall</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/zumbafitness/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal5">Map</button>
                    <hr>
                    <p style="color: #00cc58;	font-family: 'Do Hyeon', sans-serif;">PoundFit -<span class="small"> with Barry</span></p>
                    <p>7.15pm - 8pm<br /> Holy Family<br /> Church Hall</p>
                    <!-- trigger the modal with the button -->
                    <a href="https://bkfitness.co.uk/bookings/product/poundfit/" class="btn btn-info" id="bookbtn">Book
                    </a>
                    <button type="button" id="myBtn" class="btn btn-info" data-toggle="modal" data-target="#myModal5">Map</button>
                    <hr>
                </div>
                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
            </div>
            <!-- Modals-->
            <!-- Bispham United reformed-->
            <div class="modal" id="myModal1" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Class Location</h4>
                        </div>
                        <div class="modal-body">
                            <!--Google Map-->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.755257682636!2d-3.0528892841426067!3d53.847216780087074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b449efca43127%3A0x21739dc2b7f646fc!2sBispham+United+Reformed+Church!5e0!3m2!1sen!2suk!4v1503260284328"
                                target="_blank" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--Close Modal-->

            <!--Holy Trinity-->
            <div class="modal" id="myModal18" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Class Location</h4>
                        </div>
                        <div class="modal-body">
                            <!--Google Map-->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75411.81350913827!2d-3.123105652267263!3d53.79626529668874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b440ffae95ea3%3A0x6339cd60b88aa4d2!2sHoly+Trinity+Church!5e0!3m2!1sen!2suk!4v1506883296551"
                                target="_blank" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!--Anchorsholme Academy-->
            <div class="modal" id="myModal3" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Class Location</h4>
                        </div>
                        <div class="modal-body">
                            <!--Google Map-->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.5484739234953!2d-3.0328370840993872!3d53.86867658009183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b434c433ea529%3A0xeb006bc9e8406176!2sAnchorsholme+Academy!5e0!3m2!1sen!2suk!4v1503437231403"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!--Fleetwood High-->
            <div class="modal" id="myModal10" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Class Location</h4>
                        </div>
                        <div class="modal-body">
                            <!--Google Map-->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.240057467489!2d-3.039024684097873!3d53.90970998010106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b5c909ae23f0b%3A0xcb239229328c5cac!2sFleetwood+High+School!5e0!3m2!1sen!2suk!4v1503433281167"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hambleton Village Hall-->
        <div class="modal" id="myModal13" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.2286347971913!2d-2.952862384141566!3d53.87436318009309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b42acb3b1286b%3A0x4af812a6fe95ed36!2sHambleton+Village+Hall!5e0!3m2!1sen!2suk!4v1504785269002"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Hodgson Academy-->
        <div class="modal" id="myModal8" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.7330254981202!2d-2.982610084100133!3d53.84761218008722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b42e71b6fc95f%3A0x8079c399af05f89!2sHodgson+Academy!5e0!3m2!1sen!2suk!4v1503433139696"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Holy Family-->
        <div class="modal" id="myModal5" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37640.78018700684!2d-3.0656677140739688!3d53.86867146358037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b448206470f6b%3A0x91a37d77fa3ffa34!2sHoly+Family+R+C+Church!5e0!3m2!1sen!2suk!4v1503433050680"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Unity Academy-->
        <div class="modal" id="myModal9" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2354.404248618485!2d-3.040523284100626!3d53.83567358008448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b437b8b6c9009%3A0x22ed8d7c4f648665!2sUnity+Academy+Blackpool!5e0!3m2!1sen!2suk!4v1503433207703"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Michael Hall Theatre School-->
        <div class="modal" id="myModal30" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387.482837130351!2d-3.027071860317058!3d53.806372888466825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b43ed40af2cc9%3A0x8c1c0d0e84b54d18!2sPreston+Old+Rd%2C+Blackpool+FY3+9PR!5e0!3m2!1sen!2suk!4v1517007069764"
                            width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--AVR Dance-->
        <div class="modal" id="myModal31" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d588.6909931054237!2d-3.0316981196269652!3d53.82927466324857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1533068418097"
                            width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal40" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4839.259450041666!2d-2.9573692343560256!3d53.90068946021233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b5d68850c26d3%3A0x576be3a3aac4b680!2sStalmine+Village+Hall!5e0!3m2!1sen!2suk!4v1517569491152"
                            width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal41" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Class Location</h4>
                    </div>
                    <div class="modal-body">
                        <!--Google Map-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.43624739586!2d-2.990960470743692!3d53
									.847399398755456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b42e175a980d9%3A0xb36d52f9b2e85226!2sVicarage+Park+Community+Centre!5e0!3m2!1sen!2suk!4v1536241022714"
                            width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- Close Row-->
    </div>
    <!--Close container-fluid-->
    <?php include'inc/footer.php' ?>

</body>

</html>