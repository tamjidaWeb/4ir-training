<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>4ir Training</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="https://wiztecbd.com/assets/dist/img/w2.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script> -->

    <style>
        .mobile_responsive {
            display: none;
        }

        @media (max-width: 768px) {
            .mobile_responsive {
                display: inline-block;
                width: 100%;
            }

            .load_for_mobile_device {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!--------------------- Banner section started------------------ -->

        <?php
        // Success Message
        if (isset($_SESSION['success_message'])): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '<?= addslashes($_SESSION['success_message']); ?>',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        <?php
        // Error Message
        if (isset($_SESSION['error_message'])): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: '<?= addslashes($_SESSION['error_message']); ?>',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="banner-container mb-5">
                    <div class="banner">
                        <img src="image/Web Cover.PNG" alt="Vendor Certification Training Banner"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------Banner section end------------- -->

        <!-- ----------------------Text content started----------------- -->
        <div class="row">
            <div class="col-12">
                <h3 class="main_title">
                    Become a Trailblazer of Tomorrow with 4IR Training!
                </h3>
            </div>

            <div class="col-lg-7 col-sm-12">
                <div class="text-content">
                    <p id="pid">
                        <span>Bangladesh Hi-Tech Park Authority(BHTPA),</span>under the
                        <span>Digital Entrepreneurship and Innovation
                                Eco-System Development Project (DEIEDP)</span>, is thrilled to announce a transformative training program on
                        <span>4IR (Fourth Industrial Revolution)Technologies.</span>

                        This comprehensive training initiative is designed
                        to enhance the skills of graduates and
                        professionals, preparing them for high-value roles
                        in IT/ITES and equipping them with globally
                        recognized certifications.
                    </p>
                    <p>
                        Join us in shaping the future of Bangladesh’s
                        digital economy!
                    </p>

                    <div class="load_for_mobile_device">
                        <hr/>
                        <p class="pclass" id="p-id">Program Overview:</p>

                        <p>
                            This training program provides specialized,
                            hands-on learning in the latest 4IR
                            technologies, specifically tailored for
                            individuals looking to advance in the IT/ITES
                            sector. With dedicated support, career
                            counseling, and job placement assistance,
                            participants will gain skills and qualifications
                            that are in high demand in the industry.
                        </p>

                        <p class="pclass" id="specialization-heading">
                            Specializations Available:
                        </p>

                        <ol>
                            <li>
                                <span>Big Data</span> - Data Analytics,
                                Power BI Data Analysis
                            </li>
                            <li>
                                <span>Artificial Intelligence</span> - AI
                                Professional, AI Expert, Machine Learning
                            </li>
                            <li>
                                <span>Embedded Systems</span> - Schematic &
                                Circuit Design, Microcontroller Programming
                            </li>
                            <li>
                                <span>Robotics</span> - Robotic Process
                                Automation, Automation 360
                                Professional,UiPath
                            </li>
                            <li>
                                <span>Cybersecurity </span>- Information
                                Systems Security, Governance of Enterprise
                                IT
                            </li>
                        </ol>
                        <p>
                            <span class="pclass">Program Duration</span>: Up to 6 months, with each specialization featuring
                            <span class="pclass">160 hours</span> of intensive training, including
                            <span class="pclass">project-based learning</span>
                            for applicable courses.
                        </p>

                        <br/>

                        <p>
                            <span class="pclass">Certification Options:</span>
                            Each specialization includes vendor-specific
                            certifications from recognized bodies like
                            Microsoft, Google, Automation Anywhere, UiPath,
                            and CISSP
                        </p>

                        <hr/>
                        <div class="row mt-5">
                            <div class="col-12">
                                <!-- Tabs Navigation -->
                                <ul class="nav nav-tabs" id="phaseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="phase1-tab" data-bs-toggle="tab" href="#phase1" role="tab" aria-controls="phase1" aria-selected="true">Phase
                                            1</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="phase2-tab" data-bs-toggle="tab" href="#phase2" role="tab" aria-controls="phase2" aria-selected="false">Phase 2</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="phase3-tab" data-bs-toggle="tab" href="#phase3" role="tab" aria-controls="phase3" aria-selected="false">Phase 3</a>
                                    </li>
                                </ul>

                                <!-- Tab Content -->
                                <div class="tab-content mt-3" id="phaseTabContent">
                                    <!-- Phase 1 -->
                                    <div
                                            class="tab-pane fade show active"
                                            id="phase1"
                                            role="tabpanel"
                                            aria-labelledby="phase1-tab">
                                        <div class="row">
                                            <div
                                                    class="col-12 col-md-12">
                                                <img
                                                        src="image/2.png"
                                                        alt="Phase 1 Image"
                                                        class="img-fluid"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phase 2 -->
                                    <div
                                            class="tab-pane fade"
                                            id="phase2"
                                            role="tabpanel"
                                            aria-labelledby="phase2-tab">
                                        <div class="row">
                                            <div
                                                    class="col-12 col-md-12">
                                                <img
                                                        src="image/3.png"
                                                        alt="Phase 2 Image"
                                                        class="img-fluid"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phase 3 -->
                                    <div
                                            class="tab-pane fade"
                                            id="phase3"
                                            role="tabpanel"
                                            aria-labelledby="phase3-tab">
                                        <div class="row">
                                            <div
                                                    class="col-12 col-md-12">
                                                <img
                                                        src="image/4.png"
                                                        alt="Phase 3 Image"
                                                        class="img-fluid"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <p class="pclass" id="locations">Locations:</p>

                        <p>
                            Trainings are conducted across multiple cities,
                            making it accessible for participants nationwide
                        </p>

                        <ul class="custom-list">
                            <li class="pclass">Dhaka</li>
                            <li class="pclass">Chattogram</li>
                            <li class="pclass">Khulna</li>
                            <li class="pclass">Rajshahi</li>
                            <li class="pclass">Sylhet</li>
                            <li class="pclass">Mymensingh</li>
                            <li class="pclass">Barisal</li>
                        </ul>

                        <p id="italic">
                            All training centers are equipped with the
                            latest technology and tools, including
                            high-speed internet, emergency power backup, and
                            modern computer labs.
                        </p>

                        <hr/>
                        <br/>

                        <p class="pclass" id="key">Key Benefits:</p>

                        <ul class="custom-list">
                            <li>
                                <span class="pclass">95% Tuition Subsidy:</span>
                                Training costs are largely covered by DEIEDP-BHTPA, with participants only required to contribute 5%.
                            </li>

                            <li>
                                <span class="pclass">5% Tution Fee Contribution:</span>
                                A total of 10% (5000 tk approx.) of the tuition fee has to be paid before the starting of the training session, whereas 5% (Taka
                                2,500 approx.) is refundable upon successful completion of the course.
                            </li>

                            <li>
                                <span class="pclass">Vendor Certification Fees Reimbursement:</span>
                                Certification fees are fully reimbursed upon
                                passing the exam, allowing you to earn
                                internationally recognized credentials at no
                                additional cost.
                            </li>

                            <li>
                                <span class="pclass">Job Placement Assistance:</span>
                                The program includes job-matching and
                                freelance support, with a focus on placing
                                participants in relevant roles within STPs,
                                HTPs, and their supply chains.
                            </li>
                            <li>
                                <span class="pclass">Soft Skills Development:</span>
                                Receive training in essential workplace
                                skills, including communication, teamwork,
                                and leadership.
                            </li>
                            <li>
                                <span class="pclass">Hands-On Industry Projects:</span>
                                Practical, project-based learning in
                                real-world industry scenarios ensures
                                job-ready skills.
                            </li>
                        </ul>

                        <hr/>

                        <p class="pclass" id="who">Who Should Apply?</p>
                        <p>This program is ideal for:</p>
                        <ul>
                            <li>
                                <span class="pclass">Fresh Graduates and Job Seekers: </span>Looking for specialized skills in IT/ITES fields.
                            </li>
                            <li>
                                <span class="pclass">Current Employees: </span>Working in IT/ITES firms or supply chains
                                looking to advance or transition into 4IR
                                technologies.
                            </li>
                            <li>
                                <span class="pclass">Aspiring Entrepreneurs and Freelancers:</span>
                                Those interested in self-employment or
                                freelancing in high-tech fields.
                            </li>
                        </ul>

                        <p class="pclass" id="eligibility">
                            Eligibility Requirements:
                        </p>
                        <ul>
                            <li>
                                Relevant academic background in IT, CSE,
                                EEE, ETE, or similar fields.
                            </li>
                            <li>
                                Must pass an entry-level assessment process.
                            </li>
                            <li>
                                Open to recent graduates, current employees,
                                and those aiming to enter the IT/ITES
                                sector.
                            </li>

                            <li>
                                <span class="pclass">Diversity Focus:</span>
                                Applications are encouraged from women,
                                individuals with disabilities, and other
                                underrepresented groups to foster a more
                                inclusive tech industry.
                            </li>
                        </ul>

                        <hr/>

                        <p class="pclass" id="how">How to Apply:</p>
                        <p>
                            To apply, complete the online registration form.
                            Please ensure you meet the eligibility criteria
                            before applying. For questions or additional
                            support, feel free to contact our support team.
                        </p>

                        <hr/>

                        <p class="pclass">
                            Application Deadline: 7th December, 2024
                        </p>

                        <br/>
                        <p>
                            Seize this chance to gain expertise in 4IR
                            technologies, open doors to rewarding career
                            paths, and join Bangladesh's leading digital
                            transformation journey. Apply today and take the
                            first step toward a future-ready career!
                        </p>

                        <span class="load_more_content" id="load_less">Load less..</span>
                    </div>

                    <div class="mobile_responsive">
                        <div
                                class="accordion accordion-flush overview-class"
                                id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingOne">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        Program Overview
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        This training program provides
                                        specialized, hands-on learning in the
                                        latest 4IR technologies, specifically
                                        tailored for individuals looking to
                                        advance in the IT/ITES sector. With
                                        dedicated support, career counseling,
                                        and job placement assistance,
                                        participants will gain skills and
                                        qualifications that are in high demand
                                        in the industry..
                                    </div>
                                </div>
                            </div>

                            <!-- --------------------Two (Courses) ----------------->
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingTwo">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                        Courses
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>
                                                <span>Big Data</span>
                                                - Data Analytics, Power BI Data
                                                Analysis
                                            </li>
                                            <li>
                                            <span>Artificial
                                                Intelligence</span>
                                                - AI Professional, AI Expert,
                                                Machine Learning
                                            </li>
                                            <li>
                                                <span>Embedded Systems</span>
                                                - Schematic & Circuit Design,
                                                Microcontroller Programming
                                            </li>
                                            <li>
                                                <span>Robotics</span>
                                                - Robotic Process Automation,
                                                Automation 360
                                                Professional,UiPath
                                            </li>
                                            <li>
                                                <span>Cybersecurity</span>
                                                - Information Systems Security,
                                                Governance of Enterprise IT
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <!-- ----------------Three(  Program Duration)------------ -->
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingThree">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                        Program Duration
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                        <span class="pclass">Up to 6 months, with each
                                            specialization featuring</span>
                                            <span class="pclass">160 hours</span>
                                            of intensive training, including
                                            <span class="pclass">project-based learning</span>
                                            for applicable courses.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- -------------------Four( Phase Certification & Timeline) -------------------->
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingFour">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                        Phase Certification & Timeline
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            <span class="pclass">Certification Options:</span>
                                            Each specialization includes
                                            vendor-specific certifications from
                                            recognized bodies like Microsoft,
                                            Google, Automation Anywhere, UiPath,
                                            and CISSP
                                        </p>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <!-- Tabs Navigation -->
                                                <ul class="nav nav-tabs" id="customPhaseTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" id="customPhase1-tab" data-bs-toggle="tab" href="#customPhase1" role="tab"
                                                           aria-controls="customPhase1" aria-selected="true">Phase 1</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="customPhase2-tab" data-bs-toggle="tab" href="#customPhase2" role="tab" aria-controls="customPhase2"
                                                           aria-selected="false">Phase 2</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="customPhase3-tab" data-bs-toggle="tab" href="#customPhase3" role="tab" aria-controls="customPhase3"
                                                           aria-selected="false">Phase 3</a>
                                                    </li>
                                                </ul>

                                                <!-- Tab Content -->
                                                <div class="tab-content mt-3" id="customPhaseTabContent">
                                                    <!-- Phase 1 -->
                                                    <div class="tab-pane fade show active" id="customPhase1" role="tabpanel" aria-labelledby="customPhase1-tab">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12">
                                                                <img src="image/2.png" alt="Phase 1 Image" class="img-fluid"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Phase 2 -->
                                                    <div class="tab-pane fade" id="customPhase2" role="tabpanel" aria-labelledby="customPhase2-tab">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12">
                                                                <img src="image/3.png" alt="Phase 2 Image" class="img-fluid"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Phase 3 -->
                                                    <div class="tab-pane fade" id="customPhase3" role="tabpanel" aria-labelledby="customPhase3-tab">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12">
                                                                <img src="image/4.png" alt="Phase 3 Image" class="img-fluid"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ---------------Five(Location) -------------->

                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingFive">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFive">
                                        Locations
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Trainings are conducted across
                                            multiple cities, making it
                                            accessible for participants
                                            nationwide
                                        </p>

                                        <ul class="custom-list">
                                            <li class="pclass">
                                                Dhaka (
                                                <a
                                                        target="_blank"
                                                        href="https://www.google.com/maps/dir//Level+9,+F+Haque+Tower,+107+Sonargaon+Road,+Dhaka+1205/@23.7479365,90.3102035,30331m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x3755b8bd757aaaab:0x8dab0992a43b1efc!2m2!1d90.3926051!2d23.7479583?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D">
                                                    Level 9, F Haque Tower, 107
                                                    Sonargaon Road, Dhaka 1205
                                                </a>
                                                )
                                            </li>
                                            <li class="pclass">
                                                Chattogram (Training Venue would
                                                be Inside Main Town of
                                                Chattogram)
                                            </li>
                                            <li class="pclass">
                                                Khulna (Training Venue would be
                                                Inside Main Town of Khulna)
                                            </li>
                                            <li class="pclass">
                                                Rajshahi (Training Venue would
                                                be Inside Main Town of Rajshahi)
                                            </li>
                                            <li class="pclass">
                                                Sylhet (Training Venue would be
                                                Inside Main Town of Sylhet)
                                            </li>
                                        </ul>

                                        <p id="italic">
                                            All training centers are equipped
                                            with the latest technology and
                                            tools, including high-speed
                                            internet, emergency power backup,
                                            and modern computer labs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- ----------------------Six ( Key Benefits )------------------- -->

                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingSix">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseSix">
                                        Key Benefits
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseSix"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="custom-list">

                                            <li>
                                                <span class="pclass">95% Tuition Subsidy:</span>
                                                Training costs are largely covered by DEIEDP-BHTPA, with participants only required to contribute 5%.
                                            </li>

                                            <li>
                                                <span class="pclass">5% Tution Fee Contribution:</span>
                                                A total of 10% (5000 tk approx.) of the tuition fee has to be paid before the starting of the training session, whereas 5% (Taka
                                                2,500 approx.) is refundable upon successful completion of the course.
                                            </li>

                                            <li>
                                            <span class="pclass">Vendor Professional
                                                Certification:</span>
                                                Achieving vendor certifications
                                                enhances credibility, provides a
                                                competitive edge in the job
                                                market, and ensures alignment
                                                with the latest industry tools
                                                and technologies
                                            </li>

                                            <li>
                                            <span class="pclass">Vendor Certification Fees
                                                Reimbursement:</span>
                                                Certification fees are fully
                                                reimbursed upon passing the
                                                exam, allowing you to earn
                                                internationally recognized
                                                credentials at no additional
                                                cost.
                                            </li>

                                            <li>
                                            <span class="pclass">Job Placement
                                                Assistance:</span>
                                                The program includes
                                                job-matching and freelance
                                                support, with a focus on placing
                                                participants in relevant roles
                                                within STPs, HTPs, and their
                                                supply chains.
                                            </li>
                                            <li>
                                            <span class="pclass">Soft Skills
                                                Development:</span>
                                                Receive training in essential
                                                workplace skills, including
                                                communication, teamwork, and
                                                leadership.
                                            </li>
                                            <li>
                                            <span class="pclass">Hands-On Industry
                                                Projects:</span>
                                                Practical, project-based
                                                learning in real-world industry
                                                scenarios ensures job-ready
                                                skills.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- ---------------Seven( Who Should Apply?) ---------------->

                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingSeven">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseSeven">
                                        Who Should Apply?
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseSeven"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>This program is ideal for:</p>
                                        <ul>
                                            <li>
                                            <span class="pclass">Fresh Graduates and Job
                                                Seekers:</span>
                                                Looking for specialized skills
                                                in IT/ITES fields.
                                            </li>
                                            <li>
                                                <span class="pclass">Current Employees:</span>
                                                Working in IT/ITES firms or
                                                supply chains looking to advance
                                                or transition into 4IR
                                                technologies.
                                            </li>
                                            <li>
                                            <span class="pclass">Aspiring Entrepreneurs and
                                                Freelancers:</span>
                                                Those interested in
                                                self-employment or freelancing
                                                in high-tech fields.
                                            </li>

                                            <li>
                                                <span class="pclass">Inclusivity:</span>
                                                Disabled, transgender and
                                                third-gender individuals are
                                                encouraged to apply.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- -----------------------Eight ( Eligibility Requirements) ----------------->
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingEight">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseEight"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseEight">
                                        Eligibility Requirements
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseEight"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingEight"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                Relevant academic background in
                                                IT, CSE, EEE, SWE, ECE, ETE, or
                                                similar fields.
                                            </li>
                                            <li>
                                                Must pass an entry-level
                                                assessment process.
                                            </li>
                                            <li>
                                                Open to recent graduates,
                                                current employees, and those
                                                aiming to enter the IT/ITES
                                                sector.
                                            </li>

                                            <li>
                                                <span class="pclass">Diversity Focus:</span>
                                                Applications are encouraged from
                                                women, individuals with
                                                disabilities, and other
                                                underrepresented groups to
                                                foster a more inclusive tech
                                                industry.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------Nine ( How to Apply) ----------------->
                            <div class="accordion-item">
                                <h2
                                        class="accordion-header"
                                        id="flush-headingNine">
                                    <button
                                            class="accordion-button collapsed pclass"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseNine"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseNine">
                                        How to Apply
                                    </button>
                                </h2>
                                <div
                                        id="flush-collapseNine"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingNine"
                                        data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            To apply, complete the online
                                            registration form. Please ensure you
                                            meet the eligibility criteria before
                                            applying. For questions or
                                            additional support, feel free to
                                            contact our support team.
                                        </p>

                                        <hr/>

                                        <p class="pclass">
                                            Application Deadline: 7th December,
                                            2024
                                        </p>

                                        <br/>
                                        <p>
                                            Seize this chance to gain expertise
                                            in 4IR technologies, open doors to
                                            rewarding career paths, and join
                                            Bangladesh's leading digital
                                            transformation journey. Apply today
                                            and take the first step toward a
                                            future-ready career!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <br/>
                    </div>
                </div>
            </div>

            <!-- --------------Form Registration Section Starts---------- -->

            <div class="col-lg-5 col-sm-12">
                <div class="form">
                    <h2>Apply for ths position</h2>

                    <form id="applicationForm" action="store_data.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="name" class="form-label"><span>*</span>Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required/>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"><span>*</span>Email</label>

                            <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter Your Email"
                                    required
                            />
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label"><span>*</span>Contact No</label>
                            <input
                                    type="number"
                                    class="form-control"
                                    id="contact"
                                    name="contact"
                                    placeholder="Enter Your Contact No"
                                    required
                            />
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label"><span>*</span>NID No</label>

                            <input
                                    type="number"
                                    class="form-control"
                                    id="contact"
                                    name="nid_no"
                                    placeholder="Enter Your NID No"
                                    required
                            />
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Present Address</label>

                            <input
                                    type="text"
                                    class="form-control"
                                    id="address"
                                    name="address"
                                    placeholder="Enter Your Address"
                            />

                        </div>

                        <!-------------- gender form ------------>

                        <div class="form-group check-gender mb-3">
                            <span class="lebel-text">*Gender (Selection)</span>
                            <div class="custom-radio">
                                <input
                                        type="radio"
                                        name="gender"
                                        value="Male"
                                        class="custom-control-input"
                                        id="male"
                                        required
                                />
                                <label class="custom-control-label" for="male">Male</label>
                            </div>

                            <div class="custom-radio">
                                <input
                                        type="radio"
                                        name="gender"
                                        value="Female"
                                        class="custom-control-input"
                                        id="female"
                                        required
                                />
                                <label
                                        class="custom-control-label"
                                        for="female"
                                >Female</label
                                >
                            </div>

                            <div class="custom-radio">
                                <input
                                        type="radio"
                                        name="gender"
                                        value="other"
                                        class="custom-control-input"
                                        id="other"
                                        required
                                />
                                <label
                                        class="custom-control-label"
                                        for="other"
                                >Others</label
                                >
                            </div>
                        </div>


                        <div class="input-type-block mb-3">
                            <h6>
                                <span class="lebel-text"><span>*</span>Educational Status</span>
                            </h6>

                            <div class="mb-3">
                                <label for="degree" class="input-label"><span>*</span>Degree</label>
                                <input
                                        type="text"
                                        name="degree"
                                        class="form-control"
                                        id="degree"
                                        placeholder="e.g. BSC in CSE"
                                        required
                                />
                            </div>

                            <div class="mb-3">
                                <label for="institute" class="input-label">
                                    <span>*</span>Institute</label
                                >
                                <input
                                        type="text"
                                        name="institute"
                                        class="form-control"
                                        id="institute"
                                        placeholder="e.g. Oxford University"
                                        required
                                />
                            </div>

                            <div class="input-type-block mb-3">
                                <h6>
                                    <span class="lebel-text"><span>*</span>Are You</span>
                                </h6>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input
                                                type="radio"
                                                name="are_you"
                                                class="form-check-input"
                                                id="freshGraduate"
                                                value="Fresh Graduate"
                                                required
                                        />
                                        <label for="freshGraduate" class="form-check-label">
                                            Fresh Graduate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                                type="radio"
                                                name="are_you"
                                                class="form-check-input"
                                                id="unemployedGraduate"
                                                value="Unemployed Graduate"
                                                required
                                        />
                                        <label for="unemployedGraduate" class="form-check-label">
                                            Unemployed Graduate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                                type="radio"
                                                name="are_you"
                                                class="form-check-input"
                                                id="employedGraduate"
                                                value="Employed Graduate"
                                                required
                                        />
                                        <label for="employedGraduate" class="form-check-label">
                                            Employed Graduate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                                type="radio"
                                                name="are_you"
                                                class="form-check-input"
                                                id="freelancer"
                                                value="Freelancer"
                                                required
                                        />
                                        <label for="freelancer" class="form-check-label">
                                            Freelancer
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ---------------yes /no ---------------- -->

                        <div class="form-group check-gender mb-3" id="myForm">
                            <span class="lebel-text">*Currently Employed (Yes / No)</span>
                            <div class="custom-radio">
                                <input
                                        type="radio"
                                        name="employment"
                                        value="yes"
                                        class="custom-control-input"
                                        id="yes"
                                        required
                                        onclick="toggleFields()"
                                />
                                <label class="custom-control-label" for="yes">Yes</label>
                            </div>
                            <div class="custom-radio">

                                <input
                                        type="radio"
                                        name="employment"
                                        value="no"
                                        class="custom-control-input"
                                        id="no"
                                        onclick="toggleFields()"
                                />

                                <label class="custom-control-label" for="no">No</label>
                            </div>
                        </div>

                        <div class="hidden" id="employmentFields">
                            <div class="mb-3">
                                <label class="input-label" for="companyName">Current Company Name</label>
                                <input type="text" class="form-control" name="current_company_name" id="companyName" placeholder="Current Company Name"/>
                            </div>

                            <div class="mb-3">
                                <label class="input-label" for="jobDesignation">Current Job Designation / Responsibilities</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="job_designation"
                                        id="jobDesignation"
                                        placeholder="Designation"
                                />
                            </div>
                        </div>

                        <label class="input-label" for="location">*Select Phase</label>
                        <select id="phase" required name="training_phase" onchange="updatePhase()" class="form-select mb-3" aria-label="Default select example">
                            <option selected disabled value="">--Select--</option>
                            <option value="Phase 1">Phase 1 (7th Dec'24 – 16th Mar'25)</option>
                            <option value="Phase 2">Phase 2 (12th April'25 – 20th Jul'25)</option>
                            <option value="Phase 3">Phase 3 (1st Aug'25 – 2 nd Nov'25)</option>
                        </select>

                        <label class="input-label" for="location">*Select Training Location</label>
                        <select id="location" required name="training_location" onchange="updateCourses()" class="form-select mb-3" aria-label="Default select example">
                            <option selected disabled value="">Locations</option>
                        </select>

                        <label class="input-label" for="course">*Select Training Course</label>
                        <select id="course" required name="training_course" class="form-select mb-3" aria-label="Default select example">
                            <option selected disabled value="" id="text2">Courses</option>
                        </select>

                        <div class="input-type-block mb-3">
                            <div class="form-group">
                                <div class="custom-file">
                                    <p class="input-label">Upload Resume (PDF)</p>
                                    <input type="file"
                                           name="resume"
                                           class="custom-file-input form-control"
                                           id="validatedCustomFile"
                                    />
                                    <label
                                            class="custom-file-label"
                                            for="validatedCustomFile">
                                        <span class="file-return"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <p class="input-label">
                                        Upload NID (National Identity Card)
                                    </p>
                                    <input
                                            type="file"
                                            name="nid"
                                            class="custom-file-input form-control"
                                            id="validatedCustomFile2"
                                    />
                                    <label class="custom-file-label"
                                           for="validatedCustomFile2"><span class="file-return"></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <p class="input-label">
                                        *Upload Last Education Certificate
                                    </p>
                                    <input
                                            type="file"
                                            name="certificate"
                                            class="custom-file-input form-control"
                                            id="validatedCustomFile3"
                                            required
                                    />

                                    <label class="custom-file-label" for="validatedCustomFile3"><span class="file-return"></span></label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="button">Submit</button>
                        <p id="error-message" style="color: red"></p>
                    </form>
                </div>
            </div>

            <!-- -----------Form Registration End -->
        </div>
    </div>

    <!-- -----------Footer Section Starts -------------------- -->

    <section class="footer-full-space">
        <div class="container-fluid">
            <footer class="footer-foot text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: CTA -->


                    <div class="row">
                        <div class="col-6" id="spanid">
                            <!--<p> Learn More...</p>-->
                        </div>

                        <div class="col-6">
                            <ul class="vertical-list mb-4">
                                <li class="li-li">
                                    <a href="https://www.facebook.com/wiztecbd" target="_blank">
                                        <!-- Facebook -->
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-facebook"
                                                viewBox="0 0 16 16"
                                        >
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="li-li">
                                    <a href="https://wa.me/+8801600299169" target="_blank">
                                        <!-- What's app -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="li-li">
                                    <a href="https://www.linkedin.com/company/wiztecbd/mycompany/" target="_blank">
                                        <!-- Linkedin -->
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-linkedin"
                                                viewBox="0 0 16 16"
                                        >
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="li-li">
                                    <a href="https://www.instagram.com/wiztecbd_/?igsh=MXVtZHViaWNucnljMw%3D%3D#" target="_blank">
                                        <!-- Instagram -->
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-instagram"
                                                viewBox="0 0 16 16"
                                        >
                                            <path
                                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                            />
                                        </svg>
                                    </a>
                                </li>

                                <!--<li class="li-li">-->
                                <!--    <a href="https://x.com/wiztecbd" target="_blank">-->
                                <!-- Twitter -->
                                <!--        <svg-->
                                <!--                xmlns="http://www.w3.org/2000/svg"-->
                                <!--                width="16"-->
                                <!--                height="16"-->
                                <!--                fill="currentColor"-->
                                <!--                class="bi bi-twitter"-->
                                <!--                viewBox="0 0 16 16"-->
                                <!--        >-->
                                <!--            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>-->
                                <!--        </svg>-->
                                <!--    </a>-->
                                <!--</li>-->

                                <!--<li class="li-li">-->
                                <!--    <a href="https://join.skype.com/invite/ti82mbuKUXO9" target="_blank">-->
                                <!-- skype -->
                                <!--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skype" viewBox="0 0 16 16">-->
                                <!--            <path d="M4.671 0c.88 0 1.733.247 2.468.702a7.42 7.42 0 0 1 6.02 2.118 7.37 7.37 0 0 1 2.167 5.215q0 .517-.072 1.026a4.66 4.66 0 0 1 .6 2.281 4.64 4.64 0 0 1-1.37 3.294A4.67 4.67 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.42 7.42 0 0 1-6.114-2.107A7.37 7.37 0 0 1 .529 8.035q0-.545.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7 7 0 0 0 1.257.653q.737.308 1.145.523c.229.112.437.264.615.448.135.142.21.331.21.528a.87.87 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.6 2.6 0 0 1-1.048-.206 11 11 0 0 1-.532-.253 1.3 1.3 0 0 0-.587-.15.72.72 0 0 0-.501.176.63.63 0 0 0-.195.491.8.8 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.1 5.1 0 0 0 2.212.419 4.6 4.6 0 0 0 1.624-.265 2.3 2.3 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.1 2.1 0 0 0-.279-1.101 2.5 2.5 0 0 0-.772-.792A7 7 0 0 0 8.486 7.3a1 1 0 0 0-.145-.058 18 18 0 0 1-1.013-.447 1.8 1.8 0 0 1-.54-.387.73.73 0 0 1-.2-.508.8.8 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096q.412.119.802.293c.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.7.7 0 0 0 .18-.496.72.72 0 0 0-.17-.476 1.4 1.4 0 0 0-.556-.354 3.7 3.7 0 0 0-.708-.183 6 6 0 0 0-1.022-.078 4.5 4.5 0 0 0-1.536.258 2.7 2.7 0 0 0-1.174.784 1.9 1.9 0 0 0-.45 1.287c-.01.37.076.736.25 1.063"/>-->
                                <!--        </svg>-->
                                <!--    </a>-->
                                <!--</li>-->

                                <!--<li class="li-li">-->
                                <!--    <a href="https://wiztecbd.com/" target="_blank">-->
                                <!-- Google -->
                                <!--        <svg-->
                                <!--                xmlns="http://www.w3.org/2000/svg"-->
                                <!--                width="16"-->
                                <!--                height="16"-->
                                <!--                fill="currentColor"-->
                                <!--                class="bi bi-google"-->
                                <!--                viewBox="0 0 16 16"-->
                                <!--        >-->
                                <!--            <path-->
                                <!--                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"-->
                                <!--            />-->
                                <!--        </svg>-->
                                <!--    </a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>

                    <!-- Section: CTA -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->

                <!-- Copyright -->
            </footer>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"></div>
    </section>

    <!-- Bootstrap Bundle with Popper (Required for JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <script src="script.js"></script> -->
    <script src="valid.js"></script>
</body>
</html>
