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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                       
                        <li class="active"><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
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


               
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="alert alert-success">  Muni University Contacts </div>

                            <div class="row-fluid">
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;Telephone +256-476-420311/2/3 </p>
                                    <p><i class="icon-circle"></i>&nbsp;Email - Email: info@muni.ac.ug </p>
                                    <p><i class="icon-circle"></i>&nbsp;Enquiries - inquiries@muni.ac.ug</p>
                                   



                                </div>
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;  P.O Box,725 - Arua,Uganda</p>
                                    <p><i class="icon-circle"></i>&nbsp;  Reception - +256792215744</p>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


