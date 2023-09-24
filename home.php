<?php 
include "index.php";
include "Register.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="hp1.css" />
    <link rel="icon" type="image/x-icon" href="icon.ico">
    
    <title>Go Trip</title>
    <style> 
    .reg{ 
	background-color:black;
	color:white;
	border: 1px solid black;
	outline:none;
	border-radius:10px;
    padding: 10px 5px;
	margin:0px 10px;
    margin-top: -10px;
	}
    </style>

</head>

<body>

    <body>

        <!--===========Nav Bar=================-->
        <section class="nav-bar">
            <img src="icon.ico" width="30" style="margin-left: 30px;">

            <div class="logo">Go Trip</div>
            <ul class="menu">
                <li><a href="#">home</a></li>
                <li><a href="#tours">tours</a></li>
                <li><a href="blog.html">blog</a></li>
                <li><a href="about.html">about us</a></li>
                <li><a href="contact.html">contact us</a></li>
                
                <?php if($_SESSION["login"]){ ?>
                     <li><a href="#">
                         <?php echo $_SESSION["uname"];?>
                    </a></li>
                    <li class="reg"><a href="signout.php" style="color:white;text-decoration:none"> SIGN OUT</a></li>
                <?php } else {?>
                    <li class="reg"><a href="signup.html" style="color:white;text-decoration:none"> SIGN UP</a></li>
                <?php }?>
            </ul>
            </div>

        </section>
        <!--===============Banner================-->
        <section class="banner">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                <form action="Register.php" method="post" class="form">
                    <input type="text" list="mylist" name="place" placeholder="Where would you like to go?">
                    <datalist id="mylist">
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Kerala</option>
                        <option>Vizag</option>
                        <option>Mysore Palace</option>
                        <option>Ooty</option>
                        <option>Manali</option>
                        <option>Kanyakumari</option>
                        <option>Chardam Yatra</option>
                        <option>Darjeeling</option>
                        <option>Varanasi</option>
                        <option>Kashmir</option>
                    </datalist>
                    <input type="date" name="date" class="date">
                    <button type="submit" name="book" class="book">book</a>
                </form>
            </div>
        </section>

            </div>
        </section>
        <div class="places-text">
            <h2 style="margin-top: 50px;">Why we are the best</h2>
        </div>
       
        <!--=========Services===============-->
        <section class="services">
           
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png">
                <h2>8000+ Our Local Guides</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png">
                <h2>100% Trusted Tour Agency</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png">
                <h2>28+ Years of Travel Experience</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png">
                <h2>98% Our Travelers are Happy</h2>
            </div>
        </section>
        <div class="summer-bg">
            <section class="inner-text">
            <div class="discription">
                    <h1>Your Summer Vacation Plans</h1><br>
                    <p>When it comes to summer plans, many of us have had to cancel vacations, graduations, weddings and other important events. As we look to reschedule or postpone life milestones, it can be hard to plan with so much uncertainty. </p><br/>
                    <h4>So the <b> TRAVEL LOG </b>came up with a combo plan <br> PICK ANY 2 PLACES <span style='font-size:30px'>@11999/-</span>per person</h4>
                </div>
                <div class="details">
                    <button class='btn-details' type="button">Details</button>
                </div>
            </section>
        </div>
        <!--==============Places===================-->
    <section id="tours">
        <section class="places">
            <div class="places-text">
                <small>FEATURED TOURS PACKAGES</small>
                <h2>Favourite Places</h2>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                           <a href="kerala.html"> <img
                            src="https://th.bing.com/th/id/R.8a3deee28fb09ae95978a46309eaffd3?rik=ynfQtWv8kVlmvA&riu=http%3a%2f%2f1.bp.blogspot.com%2f__2DcH9iarwY%2fTKikgQp1IqI%2fAAAAAAAAACw%2flNPap6bKeVo%2fs1600%2fLake%2bView%2bN%2ba.c%2bCottages%2b-Night%2bView.jpg&ehk=AJNGr1UXroFWJyDH%2f02kr%2fEeQDAcXPQWmPSrR4Jh1IM%3d&risl=&pid=ImgRaw&r=0.jpg">
                           </a>
                        </div>

                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Kerala</h2>
                        <p class="cost">9999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 5 Days</p>
                            <p class="location">✈ Kerala, India</p>
                        </div>
                    </div>

                </div>


                <!-- SECOND IMAGE  -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <a href="goa.html">
                            <img src="https://wallpapercave.com/wp/w8Lgiy5.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Goa</h2>
                        <p class="cost">6499/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Goa,India</p>
                        </div>
                    </div>

                </div>


                <!-- THIRD IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                        <a href="mysore.html">
                            <img src="https://media.istockphoto.com/id/1281931838/photo/the-mysore-palace-at-night-in-mysore-in-southern-india.jpg?s=612x612&w=0&k=20&c=ylyE9VYrc008JnHKdXKDxbJx-_I2U8-oQFJDzwJk9Pw=">
                        </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Mysore Palace</h2>
                        <p class="cost">4999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Mysore ,India </p>
                        </div>
                    </div>

                </div>

                <!-- FOURTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <a href="darjeeling.html">
                            <img src="https://www.adotrip.com/public/images/areas/master_images/5c3f1c12386cd-Darjeeling_Railway_Attractions.jpg">
                        </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2> Darjeeling </h2>
                        <p class="cost">5999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ West Bengal,India</p>
                        </div>
                    </div>

                </div>

                <!-- FIFTH IAMGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                        <a href="kanyakumari.html">
                            <img src="https://c2.staticflickr.com/4/3510/4000834486_89e978e360_b.jpg">
                        </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Kanyakumari</h2>
                        <p class="cost">5999/-  / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Tamil Nadu,India</p>
                        </div>
                    </div>

                </div>

                <!-- SIXTH IAMGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                           <a href="chardam.html"> <img
                                src="https://wallpapercave.com/wp/wp2037939.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2> Chardam Yatra</h2>
                        <p class="cost">9999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Uttarakhand,India</p>
                        </div>
                    </div>
                </div>

                

                <!-- SEVENTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                           <a href="ooty.html">
                            <img
                                src="https://www.travel2ooty.com/images/must-visit-places-ooty.jpg">
                            </a>
                            </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Ooty</h2>
                        <p class="cost">4999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Ooty,Coimbatore</p>
                        </div>
                    </div>

                </div>
                <!-- EIGTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                        <a href="delhi.html">
                            <img src="https://www.mistay.in/travel-blog/content/images/size/w2000/2020/06/cover-10.jpg">
                        </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Delhi</h2>
                        <p class="cost">3999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Delhi,India</p>
                        </div>
                    </div>

                </div>
                <!-- NINTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                           <a href="manali.html"> <img
                                src="https://drscdn.500px.org/photo/14654009/q%3D80_m%3D1500/v2?sig=06ff614a101e99f1c7a5e4ba3f3b4410c67dac8448f108672c52bf2c590fd112">
                            </a>
                            </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Manali</h2>
                        <p class="cost">4999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Manali</p>
                        </div>
                    </div>
                </div>


                <!-- TENTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <a href="varanasi.html">
                            <img
                                src="https://www.andbeyond.com/wp-content/uploads/sites/5/iStock_000058485880_XXXLarge.jpg">
                            </a>
                            </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Varanasi</h2>
                        <p class="cost">5999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Varanasi</p>
                        </div>
                    </div>

                </div>

                <!-- ELEVENTH IMAGE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <a href="kashmir.html">
                            <img src="https://www.tripsavvy.com/thmb/Nrhf1_k96t_SphJsN4XAcoNDTvc=/2121x1414/filters:fill(auto,1)/GettyImages-584374227-58ac1d273df78c345b154d7a.jpg">
                        </a>
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Kashmir</h2>
                        <p class="cost">4999/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kashmir</p>
                        </div>
                    </div>

                </div>
                <!-- IMAGE TWELVE -->
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <a href="vizag.html"><img
                                src="data:image/jpeg;base64,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">
                       </a>
                            </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Vizag</h2>
                        <p class="cost">3499/- / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Vizag</p>
                        </div>
                    </div>
                </div>
                


                

                </div>
            </div>
        </section>
    </section>
               <!--===========Footer=================-->
        <div class="footer">
            <div class="links">
                <h3>Quick Links</h3>
                <ul>
           
              
                    <li><a href = "contact.html" style="color:white;text-decoration:none;">Contact Us</a></li>
                    <li>Offers & Discounts</li>
                    <li><a href = "about.html" style="color:white;text-decoration:none;">About</a></li>
                </ul>
            </div>
            
            <div class="links">
                <h3>Support</h3>
                <ul>
                    <li>Frequently Asked Questions</li>
                    <li>Report a Payment Issue</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
    </body>

</html>
</body>

</html>