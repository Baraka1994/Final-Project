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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                       
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Muni University History</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                  

Historically, the quest for a public university in West Nile can be traced back to the 1970s when initial attempts by government to establish a public university in the region were hindered by the country's turbulent past wars. The desire for a government supported university in the West Nile region continued to be expressed in various fora, both within and outside the region.

On 11th January 2007, His Excellency Yoweri Kaguta Museveni, the President of the Republic of Uganda met with a delegation of elders from the West Nile Region at his country home in Rwakitura, and the issue of a Public University in the region was brought to his attention in the memorandum presented to him. The President appreciated the request for a public University for the West Nile region and gave a go-ahead for the idea. He advised and tasked the leaders from the region to decide on good professional courses to be pursued at this institution of higher learning. The President's positive gesture towards a university establishment in the West Nile region was followed by a number of consultative meetings held in Arua and in Kampala.

High level of appreciation of Government and enthusiasm for the establishment of a Public university in West Nile was shown. A committee was setup to develop a technical proposal for a public university in West Nile. The technical proposal was completed in July 2007 and presented to the President by the leadership of the West Nile Parliamentary group comprising Moyo, Arua, Yumbe, Adjumani, Nebbi and Koboko districts in September 2007. A number of reasons were advanced to justify the establishment of a public university in West Nile region. Some of the factors, identified were; the remote geographical location with respect to the rest of the centres of Uganda's economic hubs, the natural barriers created by the River Nile, the inherently limited access to economic resources and high poverty indicators amongst the largely peasant population, and the inequitable share in the distribution of institutions of higher education infrastructure in Uganda.

 Another factor considered was the recurrence of epidemics like bubonic plague, meningitis, foot and mouth diseases, and hepatitis because of its vulnerable geographical boarder with the Sudan and the Democratic Republic of Congo (DRC), which have undergone years of civil wars and non functional governments. These key constraints undermine the economic progress and access to higher education by a large majority of the youth from the region and require urgent redressing. Other factors that reinforce the rationale for an institution of higher learning for West Nile region include the large catchment population of over 50 million (both within and without Uganda) and the ready availability of the basic infrastructures in the existing educational institutions in the region that would provide the launch pad. There is also overwhelming and long-standing desire for a public University in the West-Nile region. Similarly, owing to the strategic location of the region in the context of the Great Lakes Region, the university would offer a unique opportunity for Regional Peace-building interventions, International trade-relations, health, economic empowerment, and educational services as an export commodity. The West Nile region therefore stands in a unique position to export skilled labour to the neighbouring countries by virtue of its geographical placement apart from serving national interests. 

The proposal for the establishment of a fully-fledged public university thus premised on the above justifications and rationale is in accordance with the procedures for establishment of public universities as set out in the provisions of the Universities and Other Tertiary Institutions Act 2001 as amended. Having been convinced and satisfied with this proposal, the President expressed his unreserved CONSENT for the establishment of the Public University in his letter dated 12th May 2009, in which he directed the Hon Minister of Education and Sports to expedite the establishment of a fully fledged Public University in West Nile region. 

Following the directive from HE the President, a three person Taskforce Committee was appointed by the Ministry of Education and Sports (MoES) to kick-start the University.

Prof. Christine Dranzoa - Chairperson (Vice Chancellor).
Fr. Dr. Epihany O. Picho - Member (University Secretary)
Mr. James Lam Lagoro - Member (Academic Registrar) 

                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


