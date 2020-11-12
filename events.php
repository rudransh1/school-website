<?php

include("header.php");

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.adesh {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.adesh:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
.captionfor {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 10px 10px 10px;
    height: 150px;
}

/* Add Animation */
.modal-content, .captionfor {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
/*#fh5co-work {
    background-color: #52d3aa;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zd…AiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjdnNnZykiIC8+PC9zdmc+);
    background-image: -webkit-gradient(linear, 0% 0%, 100% 100%, color-stop(0, #3f95ea), color-stop(1, #52d3aa));
    background-image: -webkit-repeating-linear-gradient(top left, #2c2f2d 0%, #95becd 100%);
    background-image: repeating-linear-gradient(to bottom right, #072230%, #52d3aa 100%);
    background-image: -ms-repeating-linear-gradient(top left, #3f95ea 0%, #52d3aa 100%);
    overflow: hidden;
    position: relative;
    color: rgba(255, 255, 255, 0.7);
}*/
</style>

<main>
<!--page title section-->

<!--page title section end-->
<!--about the event -->
<section id="fh5co-work" data-section="work" style="background-color:#329998">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">EVENTS</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>ABOUT THE EVENTS</h3>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row row-bottom-padded-sm">
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <img class="adesh" id="myImg" src="images/bizquiz.jpg" alt="IIIC, presented the young minds with a challenging and informative online quiz  with mind-boggling questions on Business and Entrepreneurship in the month of July. The quiz had a plethora of questions for everybody ranging from company histories to business strategies.  It was a great platform for anyone who wished to awake the hidden entrepreneur in him and to widen one's arena of entrepreneurial knowledge. Witnessing a huge participation, the event turned out to be a great success where the entrepreneurial zeal could be easily seen among the participants." style="width:345px;max-width:345px;height:240px;">
                    <div id="myModal" class="modal">
                        <span class="close rud">&times;</span>
                        <img class="modal-content" id="img01">
                    <div class="captionfor" id="caption"></div>
                    </div>
                    <div class="fh5co-text">
                        <h2>BIZQUIZ</h2>
                    </div>
                </div>
            
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <img class="adesh" id="myImg2" src="images/ideation.jpg" alt="Dreams are just ideas until you take the first step to make them happen.
Keeping this thought in mind,  IIIC organised Ideation Contest' 18, on 13th August where students from various colleges came up with the prototypes of their innovative ideas which broke all the stereotypes and dogmas. The response from the participants was amazing and the ideas were unique and innovative which were judged by the experienced industry leaders where the best of the ideas got a golden opportunity to get a seed funding upto 25 lacs." style="width:345px;max-width:345px;height:240px;">
                    <div id="myModal2" class="modal">
                        <span class="close rud2">&times;</span>
                        <img class="modal-content" id="img02">
                    <div class="captionfor" id="caption2"></div>
                    </div>
                    <div class="fh5co-text">
                        <h2>Ideation Contest</h2>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <img class="adesh" id="myImg3" src="images/esummit.png" alt="To motivate and educate people about entrepreneurship, IIIC organizes its flagship event, E-Summit which serves as a common meeting ground for various tech-gaints, industry experts and young budding entrepreneurs accross the country.  Its a great opportunity where people get a chance to hone their entrepreneurial skills and also learn the skills to ideate from various tech-talks organised during this period. It has a great line-up of events to motivate budding entrepreneurs and to spread knowledge about Business and entrepreneurship. So fasten up your seat belts, as IIIC is here to give you a taste of startup world. " style="width:345px;max-width:345px;height:240px">
                    <div id="myModal3" class="modal">
                        <span class="close rud3">&times;</span>
                        <img class="modal-content" id="img03">
                    <div class="captionfor" id="caption3"></div>
                    </div>
                    <div class="fh5co-text">
                        <h2>E-Summit</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <img class="adesh" id="myImg4" src="images/bplan.jpg" alt="It's the headliner event of IIIC where students and nascent startups across the country get a chance to showcase their business plans before the industry experts. Best ideas win cash prizes and an opportunity to avail the incubation facilities available with IIIC. To help students and start-ups from IIITA, IIIC will be organising a business plan writing workshop within the premises of IIITA, where students get to know what, why and hows of ‘Business Plan Writing’." style="width:345px;max-width:345px;height: 240px">
                    <div id="myModal4" class="modal">
                        <span class="close rud4">&times;</span>
                        <img class="modal-content" id="img04">
                    <div class="captionfor" id="caption4"></div>
                    </div>
                    <div class="fh5co-text">
                        <h2>B plan Contest</h2>
                    </div>
                </div>
                
                <div class="clearfix visible-sm-block"></div>

                
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <img class="adesh" id="myImg6" src="images/iiictalks.jpg" alt="IIIC organizes annual talk series by several eminent speakers from various fields like Technology, Entertainment and Design. We expose the IIITA family to innovative ideas from distinguished personalities. These talks are wonderful to attend for audience to enrich themselves with subtle, unexplored, interesting domains of life and could possibly seed the notion of entrepreneurial zeal in the individual to think out of the box. So get ready to experience a fun yet informative and educative session. Be ready to witness some blazing talks by renowned personalities from various domains." style="width:345px;max-width:345px;height:240px">
                    <div id="myModal6" class="modal">
                        <span class="close rud6">&times;</span>
                        <img class="modal-content" id="img06">
                    <div class="captionfor" id="caption6"></div>
                    </div>
                    <div class="fh5co-text">
                        <h2>Talks-IIIC</h2>
                    </div>
                </div>
                
                
        </div>
    </section>
<!--about the event end -->

<!--
<section class="pb100">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-ios-calendar-outline"></i>
                        <span>next events calendar</span>
                    </th>
                    <th></th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    
                    <td class="event_date">
                        23
                        <span>July</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>B-PLAN contest</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
                    
                </tr>
                <tr>
                    
                    <td class="event_date">
                        4
                        <span>August</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>B-plan writing workshop</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
                </tr>
                <tr>
                    
                    <td class="event_date">
                        22
                        <span>August</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>E-summit</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
				
                </tr>
				<tr>
                    
                    <td class="event_date">
                        4
                        <span>September</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Business quiz</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
                </tr>
				<tr>
                    
                    <td class="event_date">
                        10
                        <span>September</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>IIIC Talks</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
                    
                </tr>
				<tr>
                    
                    <td class="event_date">
                        18
                        <span>September</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5>Ideathon</h5>
                            <h6>08 AM - 04 PM</h6>
                        </div>
                    </td>
                    
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>  -->
<!--event calender end -->
</main>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("rud")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption2");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("rud2")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
var modal = document.getElementById('myModal3');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption3");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("rud3")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
var modal = document.getElementById('myModal4');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption4");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("rud4")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

var modal = document.getElementById('myModal6');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img06");
var captionText = document.getElementById("caption6");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("rud6")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


</script>


<?php

include("footer.php");

?>








