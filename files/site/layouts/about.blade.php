@extends('site.layouts.head')
@extends('site.layouts.scripts')
@section('about')
<!-- about -->
<div id="about"  class="about">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="about_text">
                    <div class="titlepage">
                        <h2>About Our Hotel</h2>
                        <p>“Hotel Alice, a historic hotel, has long been a favorite haunt of distinguished guests from abroad. George Clooney, Will Smith  Brad Pitt and Angelina Jolie  always made  Amiryan st. 12,  their address while in the Yerevan City.
                            The list doesn’t stop there; Anne Rice, Stephen Ambrose, and John Grisham also joined the ranks of literary guests over the years. In June of 1999, due to Hotel Alice’s distinction among the literary elite, the hotel was designated an official literary landmark by the Friends of the Library Association.  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_img">
                    <figure><img src="images/about_img.jpg" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- testimonial -->
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <h4>Mark jonson</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p> “We just had our annual conference at our property over the last few days. In a nutshell, we would rate our experience as an 11 out of 10. The property was beautiful, the service was impeccable and the food and meeting spaces were great. In my 7 years as Executive Director, I have worked with many fine hotels and fine staff and I will always consider my recent experience to be one of , if not the best, I ever had for our group.”</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="test_box">
                                                <h4> Linda Harper</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p>“One year ago today was the official start of our GSEP meeting in New Orleans. I find myself reminiscing regularly about our experience there, especially at Hotel Monteleone. You and your staff made that meeting the pinnacle of my 25+ year career.”

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <h4>– Nikkie Hall, Perkin Elmer</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="test_box">
                                                <h4>Mac Du</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p>“Thank you again for everything. The meeting went very well. Everyone loved the hotel and the support all your staff provided. It was a pleasure to work with a true professional like yourself. You made everything run seamless.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <h4>Maura LaGue,</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p>“Thank you for everything—All the Hotel Monteleone staff are amazing and we really appreciate the help and level of service we received with every request and interaction.”</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="test_box">
                                                <h4>Rula Gogas,</h4>
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <p>“Thank you for ensuring our MTUG Meeting went as smoothly as it did. Our guest really enjoyed your hotel and thought it was the perfect venue. Thank you for your support and all the hard work you and your team put in to ensure everything was flawless! Please pass my thanks to the Banquet teams, accommodations, and all that touched our events.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@show

