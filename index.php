<?php
$ch =  curl_init();

// var url = document.URL;
// let usrnm = url.split('/'); 
// fetch("https://icircles.app/api/profile/usermicrosite/"+usrnm[usrnm.length-1])

// $url =  $_SERVER['REQUEST_URI'];
// $lastName = basename($url);

$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$segments = explode('/', rtrim($path, '/'));
$username = end($segments);
echo '<script>console.log(' . json_encode($username) . ')</script>';

curl_setopt($ch, CURLOPT_URL, 'http://icircles.app/api/profile/usermicrosite/' . $username);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response);
curl_close($ch);
echo '<script>console.log(' . json_encode($result) . ')</script>';

$username = $result->username;
$user_id = $result->user_id;
$about = $result->about;
$experiences = $result->experiences;
$skills = $result->subskills;
$services = $result->services;
$educations = $result->educations;
$languages = $result->languages;
$references = $result->references;
$clients = $result->clients;
$interests = $result->interests;
$awards = $result->awards;
$profile_images = $result->profile_images;
$profile_video = $result->profile_video;
$microsites = $result->microsites;
$microsites_verified_card = $result->microsites_verified_card;
$portfolios = $result->portfolios;
$blogs = $result->blogs;
// echo '<script>console.log(' . json_encode(count($blogs)) . ')</script>';
$testimonials = $result->testimonials;
$app_days = $result->app_days;



$base_url = "https://icircles.app";
$username = $about->username;
$authorImgUrl = "$base_url/$about->thumb";
$authorBgUrl = "$base_url/$about->image";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php ?><title>iCircles - Profile | <?= $about->username ?></title><?php ?>
    <link rel="shortcut icon" href="images/bmana.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Import dynamic script from js -->
    <script src="./js/dynamicScript.js"></script>
</head>

<body>
    <!--           Header Section Start 
    ------------------------------------------>
    <header>
        <div class="header">
            <div class="container">
                <div class="header_top">
                    <div class="coverPhoto">
                        <?php
                        if ($about->image) { ?>
                            <img src=<?= "$base_url/$about->image" ?> alt="">
                        <?php
                        }
                        ?>

                        <div class="Overly">
                            <div class="photoAdd">
                                <a href="#"><i class="fa-solid fa-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="profileImg">
                        <?php
                        if ($about->image) { ?>
                            <img src=<?= "$authorImgUrl" ?> alt="">
                        <?php
                        }
                        ?>

                        <div class="Overly">
                            <div class="photoAdd">
                                <a href="#"><i class="fa-solid fa-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <div class="profileInfo">
                                <?php
                                if (count($microsites_verified_card) <= 0) { ?>
                                    <h4><?= $about->username ?></h4>
                                <?php
                                } else { ?>
                                    <h4><?= $about->username ?><img src="images/quality.png" alt=""></h4>
                                <?php
                                }
                                ?>
                                <ul>
                                    <?php
                                    if ($about->phone) { ?>
                                        <li><a href="#"> <i class="fa-solid fa-phone"></i><?= $about->phone ?><a>
                                        <li><?php

                                        }
                                        if ($about->email) { ?>
                                        <li><a href="#"> <i class="fa-solid fa-envelope"></i><?= $about->email ?><a>
                                        <li><?php

                                        }
                                        if ($about->address) { ?>
                                        <li><a href="#"><i class="fa-solid fa-location-dot"></i><?= $about->address ?><a>
                                        <li><?php

                                        }
                                            ?>
                                        <li class="vh d-none"><a href="#"> <i></i> </a></li>
                                        <li class="vh d-none"><a href="#"> <i></i> </a></li>
                                        <li class="vh d-none"><a href="#"><i></i> </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="profileConnect">
                                <div class="btn_1">
                                    <a href="#"> <i class="fa-solid fa-plus"></i> Add Connections</a>
                                </div>
                                <div class="btn_1">
                                    <a href="#appointmentSection"> <i class="fa-solid fa-plus"></i> Get Appointment</a>
                                </div>
                                <!-- <button class="btn btn-primary">Appointment</button> -->
                                <div class="btn_2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-solid fa-comment"></i> Message </a>
                                </div>
                                <div class="btn_3">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class="profileDahsed">
                                <ul class="sub_down">
                                    <li><a href="#"><i class="fa-solid fa-triangle-exclamation"></i> Report</a></li>
                                    <li><a href="#"><i class="fa-solid fa-link"></i> Copy Link</a></li>
                                    <li><a href="#"><i class="fa-solid fa-lock"></i> Lock Profile</a></li>
                                    <li><a href="#"><i class="fa-solid fa-user-large-slash"></i> Account Status</a></li>
                                    <li><a href="#"><i class="fa-solid fa-ban"></i> Block</a></li>
                                </ul>
                            </div>

                            <?php
                            if (count($microsites_verified_card) > 0) { ?>

                                <?php foreach ($microsites_verified_card as $key => $item) { ?>
                                    <div class="Company_logo mb-2">
                                        <div class="logo"><img src=<?= "https://icircles.app/uploads/micrositeslogo/$item->entity_logo" ?> alt=""></div>
                                        <div class="logoInfo">
                                            <h4><?= $item->name ?></h4>
                                            <p class="text-center"><?= $item->designation ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="bio">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bio_info">
                                <!-- <h2>Hello I’m</h2> -->
                                <?php
                                ?><P><?= $about->about_me ?></p><?php
                                                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="importantLinks">
                            <?php
                            if ($about->web_site || $about->resume) { ?>
                                <h4>Important Links :-</h4>
                            <?php
                            }
                            ?>

                            <ul>
                                <?php
                                if ($about->web_site) { ?>
                                    <li>My personal website : <a target="_blank" href=<?= " $about->web_site" ?>><?= $about->web_site ?></a></li>
                                <?php
                                }
                                if ($about->resume) { ?>
                                    <li>My Resume: <a target="_blank" href=<?= "$base_url/$about->resume" ?>>Download Resume</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="iconLink">
                            <ul>
                                <?php
                                if ($about->facebook) { ?>
                                    <li><a target="_blank" href=<?= $about->facebook ?>><i class="fa-brands fa-facebook  fb"></i></a></li>
                                <?php
                                }
                                if ($about->twitter) { ?>
                                    <li><a target="_blank" href=<?= $about->twitter ?>><i class="fa-brands fa-twitter-square tr"></i></a></li>
                                <?php
                                }
                                if ($about->instagram) { ?>
                                    <li><a target="_blank" href=<?= $about->instagram ?>><i class="fa-brands fa-instagram-square ig"></i></a></li>
                                <?php
                                }
                                if ($about->linkedin) { ?>
                                    <li><a target="_blank" href=<?= $about->linkedin ?>><i class="fa-brands fa-linkedin lk"></i></a></li>
                                <?php
                                }
                                if ($about->github) { ?>
                                    <li><a target="_blank" href=<?= $about->github ?>><i class="fa-brands fa-github gh"></i></a></li>
                                <?php
                                }
                                if ($about->whatsapp) { ?>
                                    <li><a target="_blank" href=<?= "https://web.whatsapp.com/send?text=$about->whatsapp" ?>><i class="fa-brands fa-whatsapp wapp"></i></a></li>
                                <?php
                                }
                                if ($about->skype) { ?>
                                    <li><a target="_blank" href=<?= "https://secure.skype.com/portal/profile?$about->skype" ?>><i class="fa-brands fa-skype sk"></i></a></li>
                                <?php
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--           Header Section End 
    ------------------------------------------>


    <!--           Vedio Section Start 
    ----------------------------------------------->
    <?php
    if (count($profile_video) > 0) { ?>
        <section>
            <div class="vedio">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($profile_video) > 0) { ?>
                            <h4>Video</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($profile_video) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="vedio_wrapper">
                        <div class="row">
                            <?php foreach ($profile_video as $key => $item) { ?>
                                <div class="col-md-12 col-lg-12">
                                    <div class="vedio_wrap">
                                        <img src=<?= "$authorBgUrl" ?> alt="">
                                        <div class="Overly">
                                            <div class="photoAdd">
                                                <a target="_blank" href=<?= "https://icircles.app/uploads/video/$item->video" ?>><i class="fa-solid fa-circle-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--           Vedio Section End 
    ----------------------------------------------->


    <!--      Photo Gallery Section Start 
    ----------------------------------------------->
    <section>
        <div class="gallery">
            <div class="container">
                <div class="sectionHeader">
                    <?php
                    if (count($profile_images) > 0) { ?>
                        <h4>Photo Gallery</h4>
                    <?php
                    }
                    ?>

                    <div class="sectionItem">
                        <ul>
                            <?php
                            if (count($profile_images) > 0) { ?>
                                <li><i class="fa-solid fa-video"></i></li>
                                <li><i class="fa-solid fa-eye"></i></li>
                                <li><i class="fa-solid fa-plus"></i></li>
                                <li><i class="fa-solid fa-pen-to-square"></i></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>


                <section class="image-grid">
                    <div class="gallery_wrapper container-xxl">
                        <div class="row gy-4">
                            <?php foreach ($profile_images as $key => $item) { ?>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <figure class="gallery_wrap">
                                        <a class="d-block" href="">
                                            <img src=<?= "https://icircles.app/uploads/user/${username}/$item->image" ?> class="img-fluid" alt="" data-caption="">
                                            <div class="Overly">
                                                <div class="photoAdd">
                                                    <i class="fa-solid fa-eye"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </section>

                <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <!-- JS content here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--      Photo Gallery Section End 
    ----------------------------------------------->


    <!--      Experiance Section Start 
    ----------------------------------------------->
    <?php
    if (count($experiences) > 0) { ?>
        <section class="mt-3">
            <div class="experiance">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($experiences) > 0) { ?>
                            <h4>Experiance</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($experiences) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="experiance_wrapper">
                        <div class="row">


                            <?php foreach ($experiences as $key => $item) {
                                //experience year
                                $dateTimeString = $experiences->from_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');
                                // echo '<script>console.log(' . json_encode($datetime->format('Y')) . ')</script>';
                            ?>

                                <div class="col-lg-12">
                                    <div class="experiance_wrap">
                                        <div class="experiance_img">
                                            <img src=<?= "https://icircles.app/uploads/user/${username}/$item->company_logo" ?> alt="">
                                        </div>
                                        <div class="experiance_text">
                                            <h4><?= $item->company_name ?> <?= $year ?></h4>
                                            <h5><?= $item->job_title ?></h5>
                                            <p><?= $item->details ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Experiance Section End 
    ----------------------------------------------->

    <!--      Skill Section Start 
    ----------------------------------------------->
    <?php
    if (count($skills) > 0) { ?>
        <section>
            <div class="skill">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($skills) > 0) { ?>
                            <h4>Skills</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($skills) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="skill_wrapper">

                        <div class="row">

                            <?php foreach ($skills as $key => $item) { ?>
                                <div class="col-lg-12">
                                    <div class="skill_wrap">
                                        <div class="skill_text">
                                            <h5><?= $item->name ?></h5>
                                            <h5><?= $item->skill_level ?></h5>
                                            <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Skill Section End 
    ----------------------------------------------->

    <!--      Education Section Start 
    ----------------------------------------------->
    <?php
    if (count($educations) > 0) { ?>
        <section>
            <div class="education">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($educations) > 0) { ?>
                            <h4>Education</h4>
                        <?php
                        }
                        ?>

                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($educations) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="education_wrapper">
                        <div class="row">

                            <?php foreach ($educations as $key => $item) {
                                $dateTimeString = $educations->from_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');

                            ?>
                                <div class="col-lg-12">
                                    <div class="education_wrap">
                                        <!-- <div class="education_img">
                                    <img src="images/ed.png" alt="">
                                </div> -->
                                        <div class="education_text">
                                            <h5><?= $item->institution_name ?> <?= $year ?></h5>
                                            <h5><?= $item->degree_name ?></h5>
                                            <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Education Section End 
    ----------------------------------------------->

    <!--      Services Section Start
    ----------------------------------------------->
    <?php
    if (count($services) > 0) { ?>
        <section>
            <div class="service">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($services) > 0) { ?>
                            <h4>Services</h4>
                        <?php
                        }
                        ?>

                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($services) > 0) { ?>

                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="service_wrapper">
                        <div class="row">

                            <?php foreach ($services as $key => $item) {
                            ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="service_wrap">
                                        <div class="serviceImg">
                                            <img src=<?= "$base_url/$item->thumb" ?> alt="">
                                        </div>
                                        <div class="servicetext">
                                            <h4><?= $item->service_name ?></h4>
                                            <p><?= $item->details ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--      Services  Section End 
    ----------------------------------------------->

    <!--      Language Section Start
    ----------------------------------------------->
    <?php
    if (count($languages) > 0) { ?>
        <section>
            <div class="language">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($languages) > 0) { ?>
                            <h4>Language</h4>
                        <?php
                        }
                        ?>

                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($languages) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="language_wrapper">
                        <div class="row">

                            <?php foreach ($languages as $key => $item) {
                            ?>
                                <div class="col-4 col-lg-2">
                                    <div class="language_wrap">
                                        <!-- <div class="language_img">
                                        <img src="images/bd.png" alt="">
                                    </div> -->
                                        <div class="language_text">
                                            <h4><?= $item->title ?></h4>
                                            <h5><?= $item->level ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Language  Section End 
        ----------------------------------------------->

    <!--      Portfolio Section Start
    ----------------------------------------------->
    <section id="portfolioSection">
        <div class="portfolio">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Portfolio</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio_wrapper">
                    <!-- Portfolio Button -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                    </ul>

                    <!-- portfolio Items -->
                    <div class="tab-content mb-2" id="pills-tabContent0">

                    </div>
                    <div style="display: none;" class="tab-content mb-2" id="pills-tabContent1">

                    </div>
                    <div style="display: none;" class="tab-content mb-2" id="pills-tabContent2">

                    </div>
                    <div style="display: none;" class="tab-content mb-2" id="pills-tabContent3">

                    </div>
                    <div style="display: none;" class="tab-content mb-2" id="pills-tabContent4">

                    </div>
                    <div style="display: none;" class="tab-content mb-2" id="pills-tabContent5">

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--      Portfolio  Section End 
    ----------------------------------------------->
    <!--      Award Section Start 
    ----------------------------------------------->
    <?php
    if (count($awards) > 0) { ?>
        <section>
            <div class="award">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($awards) > 0) { ?>
                            <h4>Awards</h4>
                        <?php
                        }
                        ?>

                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($awards) > 0) { ?>

                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="award_wrapper">
                        <div class="row">
                            <?php foreach ($awards as $key => $item) {
                                $dateTimeString = $awards->from_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');

                            ?>
                                <div class="col-lg-12">
                                    <div class="award_wrap">
                                        <div class="award_text">
                                            <h5><?= $item->title ?></h5>
                                            <h6><?= $year ?></h6>
                                            <p><?= $item->details ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Award Section End 
    ----------------------------------------------->


    <!--      Interest Section Start
    ----------------------------------------------->
    <?php
    if (count($interests) > 0) { ?>
        <section>
            <div class="interest">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($interests) > 0) { ?>
                            <h4>Interests</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($interests) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="interests_wrapper">

                        <?php
                        if (count($interests) > 0) { ?>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-h-tab">
                                    <div class="row">
                                        <?php foreach ($interests as $key => $item) {
                                            $string = strip_tags($item->details);
                                            if (strlen($string) > 200) {

                                                // truncate string
                                                $stringCut = substr($string, 0, 200);
                                                $endPoint = strrpos($stringCut, ' ');

                                                //if the string doesn't contain any space then it will cut without word basis.
                                                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            }
                                        ?>

                                            <div class="col-6 col-lg-3">
                                                <div class="interestsItem">
                                                    <h3 class="text-center pt-3"><?= $item->title ?></h3>
                                                    <h5 class="text-center mt-2 p-2"><?= $string ?></h5>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--      Interest  Section End 
    ----------------------------------------------->


    <!--      Client Section Start 
    ----------------------------------------------->
    <?php
    if (count($clients) > 0) { ?>
        <section>
            <div class="clients">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($clients) > 0) { ?>
                            <h4>Clients</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($clients) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clients_wrapper">
                        <div class="row">

                            <?php foreach ($clients as $key => $item) {
                                $dateTimeString = $clients->created_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');

                            ?>
                                <div class="col-lg-12">
                                    <div class="clients_wrap">
                                        <div class="clients_img">
                                            <img src=<?= "$base_url/$item->image" ?> alt="">
                                        </div>
                                        <div class="clients_text">
                                            <h4><?= $item->client_name ?> <?= $year ?></h4>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <!--      Client Section End 
    ----------------------------------------------->

    <!--      Jurnal Section Start 
    ----------------------------------------------->
    <?php
    if (!empty($blogs)) { ?>
        <section>
            <div class="journal">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (!empty($blogs)) { ?>
                            <h4>Journal</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (!empty($blogs)) { ?>

                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="journal_wrapper">
                        <div class="row">

                            <?php
                            if (!empty($blogs)) {
                                $dateTimeString = $blogs->created_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');
                                $month = $datetime->format('M');
                                $day = $datetime->format('D');
                                $date = $datetime->format('d');

                            ?>
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10">
                                        <div class="endurosmnetImg">
                                            <img src=<?= "$base_url/$blogs->image" ?> alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                                <div class="endurosmnetText mt-3">
                                    <div class="textLeft">
                                        <h4><?= $blogs->title ?></h4>
                                        <h5><?= $blogs->cat_name ?></h5>
                                    </div>
                                    <div class="textRight">
                                        <h4><?= $day ?>, <?= $month ?> <?= $date ?>, <?= $year ?></h4>
                                    </div>
                                </div>
                                <p><?= $blogs->description ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--      Jurnal Section End 
    ----------------------------------------------->

    <!--      Refference Section Start 
    ----------------------------------------------->
    <?php
    if (count($references) > 0) { ?>
        <section>
            <div class="reffernce">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($references) > 0) { ?>
                            <h4>References</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($references) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="reffernce_wrapper">
                        <div class="row">

                            <?php foreach ($references as $key => $item) {

                            ?>
                                <div class="col-lg-12">
                                    <div class="reffernce_wrap">
                                        <div class="reffernce_img">
                                            <!-- <img src="images/profileMAn.png" alt=""> -->
                                            <h2><?= $item->name ?></h2>
                                            <h4><?= $item->email ?></h4>
                                            <p><?= $item->details ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <?php
    }
    ?>

    <!--      Refference Section End 
    ----------------------------------------------->

    <!--      Endurosmnet Section Start 
    ----------------------------------------------->
    <?php
    if (count($testimonials) > 0) { ?>
        <section>
            <div class="endurosmnet">
                <div class="container">
                    <div class="sectionHeader">
                        <?php
                        if (count($testimonials) > 0) { ?>
                            <h4>Endurosment</h4>
                        <?php
                        }
                        ?>
                        <div class="sectionItem">
                            <ul>
                                <?php
                                if (count($testimonials) > 0) { ?>
                                    <li><i class="fa-solid fa-video"></i></li>
                                    <li><i class="fa-solid fa-eye"></i></li>
                                    <li><i class="fa-solid fa-plus"></i></li>
                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="endurosmnet_wrapper">

                        <div class="row">

                            <?php foreach ($testimonials as $key => $item) {
                                $dateTimeString = $testimonials->created_date;
                                $datetime = new DateTime($dateTimeString);
                                $year = $datetime->format('Y');
                                $month = $datetime->format('M');
                                $day = $datetime->format('D');
                                $date = $datetime->format('d');

                                if ($item->image === null) {

                            ?>
                                    <div class="endurosmnetText">
                                        <div class="textLeft">
                                            <h4><?= $item->feedback_title ?></h4>
                                            <h5><?= $item->client_name ?></h5>
                                        </div>
                                        <div class="textRight">
                                            <h4><?= $day ?>, <?= $month ?> <?= $date ?>, <?= $year ?></h4>
                                        </div>
                                    </div>
                                    <p><?= $item->feedback ?></p>
                                <?php

                                } else {
                                ?>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <div class="endurosmnetImg">

                                                <img src=<?= "$base_url/$item->image" ?> alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <div class="endurosmnetText">
                                        <div class="textLeft">
                                            <h4><?= $item->feedback_title ?></h4>
                                            <h5><?= $item->client_name ?></h5>
                                        </div>
                                        <div class="textRight">
                                            <h4><?= $day ?>, <?= $month ?> <?= $date ?>, <?= $year ?></h4>
                                        </div>
                                    </div>
                                    <p><?= $item->feedback ?></p>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--      Endurosmnet Section End 
    ----------------------------------------------->
    <!-- -------------------Appoinment section start------------------ -->
    <section id="appointmentSection">
        <div class="service">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Appointment</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="service_wrapper">
                    <div class="row d-flex">

                        <div class="col-md-12 appoinmentCard">
                            <h3>Available Days and Timings</h3>
                            <?php foreach ($app_days as $key => $item)
                             { 
                                if($item->day==='1' && $key==0){
                                    ?><p>Saturday  :  (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='2' && $key==1){
                                    ?><p>Sunday    : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='3' && $key==2){
                                    ?><p>Monday    : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='4' && $key==3){
                                    ?><p>Tuesday   : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='5' && $key==4){
                                    ?><p>Wednesday : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='6' && $key==5){
                                    ?><p>Thursday  : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                if($item->day==='7' && $key==6){
                                    ?><p>Friday    : (<?=$item->book_time_start ." To ". $item->book_time_end?>)</p> <?php
                                   
                                }
                                // echo '<script>console.log(' . json_encode($item->day) . ')</script>';
                                // echo '<script>console.log(' . json_encode($key) . ')</script>';
                            ?>
                            <?php
                            }
                            ?>
                            <!-- <p>Saturday (6.45 AM To 7.45 PM)</p>
                            <p>Sunday (6.45 AM To 7.45 PM)</p> -->
                            <div class="row mt-5">
                                <div class="col-md-12 mb-3" data-animate-effect="fadeInBottom">
                                    <label for="title">TITLE</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" id="title" name="title">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" data-animate-effect="fadeInBottom">
                                    <label for="email">EMAIL</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" data-animate-effect="fadeInBottom">
                                    <label for="date">DATE</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" placeholder="" id="date" name="date">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" data-animate-effect="fadeInBottom">
                                    <label for="formTime">FROM TIME</label>
                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control" placeholder="" id="fromTime" name="fromTime">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" data-animate-effect="fadeInBottom">
                                    <label for="toTime">TO TIME</label>
                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control" placeholder="" id="toTime" name="toTime">
                                    </div>
                                </div>
                            </div>
                            <button class="formButton" data-animate-effect="fadeInBottom">Set Appointment</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -------------------Appoinment section end------------------ -->

    <!-- --------------------Modal contact form----------------- -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="contact" id="contact">
                            <div class="container">
                                <div class="contact_wrapper">
                                    <div class="row">

                                        <div class="col-lg-12 p-0">
                                            <div class="contact_inner">
                                                <h3>Get in<span> Touch</span></h3>
                                                <p>My best services will make your business easy. Sed perspiciatis unde omnis
                                                    natus voluptatem accusantie doloremue laudantium totam aperiam.</p>
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <div class="form_wrapper">
                                                            <form action="#">
                                                                <input class="form_control" type="text" placeholder="Your Name">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-12  col-lg-6">
                                                        <div class="form_wrapper">
                                                            <form action="#">
                                                                <input class="form_control" type="text" placeholder="Email">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-12  col-lg-6">
                                                        <div class="form_wrapper">
                                                            <form action="#">
                                                                <input class="form_control" type="text" placeholder="Phone">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-12  col-lg-12">
                                                        <div class="form_wrapper">
                                                            <form action="#">
                                                                <input class="form_control massage" type="text" placeholder="Massage">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 text-end">
                                                        <div class="contact_btn">
                                                            <a href="#">Send Massage</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!--      Add New Section Start 
     ----------------------------------------------->
    <section>
        <div class="SectionAdd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Add New Section</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--      Add New  Section End 
     ----------------------------------------------->

    <!--      Add New Section Start 
     ----------------------------------------------->
    <section>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>All Rights Reserved. Powered by iCircles LLC <span><img src="images/logo(1).png" alt=""></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Add New  Section End 
     ----------------------------------------------->

    <!-- back To Top start -->
    <a href="#" class="backtotop"></a>
    <!-- back to Top end -->
    <!--
         Javascript Script Linker Part
   --------------------------------------------------->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js" integrity="sha512-pG6Jpi0rC+Tc4UBLolT53rjjfGNuHBgEGqe6E29doS/zTJhSI9mGIwkiq+wSP1InaQs61vpQ+UhNgTUhyyYGDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function showCat0() {
            document.getElementById("pills-tabContent0").style.display = "block";
            document.getElementById("pills-tabContent1").style.display = "none";
            document.getElementById("pills-tabContent2").style.display = "none";
            document.getElementById("pills-tabContent3").style.display = "none";
            document.getElementById("pills-tabContent4").style.display = "none";
            document.getElementById("pills-tabContent5").style.display = "none";
        }

        function showCat1() {
            document.getElementById("pills-tabContent0").style.display = "none";
            document.getElementById("pills-tabContent1").style.display = "block";
            document.getElementById("pills-tabContent2").style.display = "none";
            document.getElementById("pills-tabContent3").style.display = "none";
            document.getElementById("pills-tabContent4").style.display = "none";
            document.getElementById("pills-tabContent5").style.display = "none";
        }

        function showCat2() {
            document.getElementById("pills-tabContent0").style.display = "none";
            document.getElementById("pills-tabContent1").style.display = "none";
            document.getElementById("pills-tabContent2").style.display = "block";
            document.getElementById("pills-tabContent3").style.display = "none";
            document.getElementById("pills-tabContent4").style.display = "none";
            document.getElementById("pills-tabContent5").style.display = "none";
        }

        function showCat3() {
            document.getElementById("pills-tabContent0").style.display = "none";
            document.getElementById("pills-tabContent1").style.display = "none";
            document.getElementById("pills-tabContent2").style.display = "none";
            document.getElementById("pills-tabContent3").style.display = "block";
            document.getElementById("pills-tabContent4").style.display = "none";
            document.getElementById("pills-tabContent5").style.display = "none";
        }

        function showCat4() {
            document.getElementById("pills-tabContent0").style.display = "none";
            document.getElementById("pills-tabContent1").style.display = "none";
            document.getElementById("pills-tabContent2").style.display = "none";
            document.getElementById("pills-tabContent3").style.display = "none";
            document.getElementById("pills-tabContent4").style.display = "block";
            document.getElementById("pills-tabContent5").style.display = "none";
        }

        function showCat5() {
            document.getElementById("pills-tabContent0").style.display = "none";
            document.getElementById("pills-tabContent1").style.display = "none";
            document.getElementById("pills-tabContent2").style.display = "none";
            document.getElementById("pills-tabContent3").style.display = "none";
            document.getElementById("pills-tabContent4").style.display = "none";
            document.getElementById("pills-tabContent5").style.display = "block";
        }
    </script>
    <script>
        const imageGrid = document.querySelector(".image-grid");
        const links = imageGrid.querySelectorAll("a");
        const imgs = imageGrid.querySelectorAll("img");
        const lightboxModal = document.getElementById("lightbox-modal");
        const bsModal = new bootstrap.Modal(lightboxModal);
        const modalBody = document.querySelector(".modal-body .container-fluid");

        for (const link of links) {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const currentImg = link.querySelector("img");
                const lightboxCarousel = document.getElementById("lightboxCarousel");
                if (lightboxCarousel) {
                    const parentCol = link.parentElement.parentElement;
                    const index = [...parentCol.parentElement.children].indexOf(parentCol);
                    const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
                    bsCarousel.to(index);
                } else {
                    createCarousel(currentImg);
                }
                bsModal.show();
            });
        }

        function createCarousel(img) {
            const markup = `
    <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
      <div class="carousel-inner">
        ${createSlides(img)}
      </div> 
      <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    `;

            modalBody.innerHTML = markup;
        }

        function createSlides(img) {
            let markup = "";
            const currentImgSrc = img.getAttribute("src");

            for (const img of imgs) {
                const imgSrc = img.getAttribute("src");
                const imgAlt = img.getAttribute("alt");
                const imgCaption = img.getAttribute("data-caption");

                markup += `
    <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
      <img src=${imgSrc} alt=${imgAlt}>
    </div>
    `;
            }

            return markup;
        }

        function createCaption(caption) {
            return `<div class="carousel-caption">
     <p class="m-0">${caption}</p>
    </div>`;
        }
    </script>




</body>

</html>