<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                       
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>


                
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Welcome to Muni University</strong></div>
                        <div class="hero-unit-2">
                            
                           It is my privilege and utmost joy to welcome our esteemed pioneer students to Muni University. We affirm our commitment in offering you the most competitive education to allow you achieve your potential and goal in becoming a responsible citizen of Uganda and the world at large. Ours will be a transformational leadership in a transnational, model academic and professional University that inculcates competencies and values in you to succeed in the 21st Century.

To our academic and administrative staff, we shall endeavor to create and continuously improve your skills and working environment in order to promote the Vision and Mission of our young university.We shall create and align academic programmes, research priorities and community engagements to address local needs and the Nation Vision 2040.

As a University Community, we shall create and foster quality assurance strategies, ethical standards, and best practices in teaching and learning, research, innovation and production of dynamic, responsive and self motivated leaders. Gender and cross-cutting issues will be central in achieving these standards.

We care for the needs of our partners as much as they do for us. We appreciate all the support of our partners, stakeholders and community. We pledge to remain accountable, cooperative and professional in undertaking mutually agreed services as we collaboratively endeavor to transform Lives.Professor Christine Dranzoa
PhD, MSc, BSc, Dip. onMgt/Admin

                        </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Faculties Available

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Bachelor of Science in Information Technology</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Bachelor of Information Systems</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Bachelor of Science in Education</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Bachelor of Nursing Science</a></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>



        

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


