<?php
$ch =  curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://icircles.app/api/profile/usermicrosite/testaccount');
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
// echo '<script>console.log('.json_encode($microsites_verified_card->length).')</script>';
$portfolios = $result->portfolios;
$blogs = $result->blogs;
$testimonials = $result->testimonials;

$base_url = "https://icircles.app/";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCircles - Profile</title>
    <link rel="shortcut icon" href="images/bmana.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
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
                         if($about->image){?> 
                          <img src=<?="$base_url/$about->image" ?> alt="">
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
                         if($about->image){?> 
                          <img src=<?="$base_url/$about->thumb" ?> alt="">
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

                                        <li><a href="#"> <i class=""></i> </a></li>
                                        <li><a href="#"> <i class=""></i> </a></li>
                                        <li><a href="#"><i class=""></i> </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="profileConnect">
                                <div class="btn_1">
                                    <a href="#"> <i class="fa-solid fa-plus"></i> Add Connections</a>
                                </div>
                                <div class="btn_2">
                                    <a href="#"> <i class="fa-solid fa-comment"></i> Massage </a>
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
                            if(count($microsites_verified_card)>0){?>

                            <?php foreach ($microsites_verified_card as $key => $item) { ?>
                                <div class="Company_logo">
                                    <div class="logo"><img src=<?="https://icircles.app/uploads/micrositeslogo/$item->entity_logo"?> alt=""></div>
                                    <div class="logoInfo">
                                        <h4><?=$item->name?></h4>
                                        <p class="text-center"><?=$item->designation?></p>
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
                                <h2>Hello I’m</h2>
                                <?php
                                ?><h3><?=$about->username ?>!</h3><?php
                                ?><P><?=$about->about_me ?></p><?php
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="importantLinks">
                            <?php
                            if($about->web_site || $about->resume){?>
                             <h4>Important Links :-</h4>
                            <?php
                            }
                             ?>

                            <ul>
                                <?php
                                if ($about->web_site) { ?>
                                    <li>My personal website :<a href="#"> <i class="fa-solid fa-phone"></i><?= $about->web_site ?><a>
                                    <li><?php

                                    }
                                    if ($about->resume) { ?>
                                    <li>
                                    <li>My Resume: <a target="_blank" href=<?= "$base_url/$about->resume" ?>>Download Resume</a></li><?php
                                        }
                                    ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="iconLink">
                            <ul>
                            <?php
                             if($about->facebook){?>
                                <li><a href=${about.facebook}><i class="fa-brands fa-facebook  fb"></i></a></li>
                             <?php
                             }
                             if($about->twitter){?>
                                 <li><a href=${about.twitter}><i class="fa-brands fa-twitter-square tr"></i></a></li>
                             <?php
                             }
                             if($about->instagram){?>
                                 <li><a href=${about.instagram}><i class="fa-brands fa-instagram-square ig"></i></a></li>
                             <?php
                             }
                             if($about->linkedin){?>
                                <li><a href=${about.linkedin}><i class="fa-brands fa-linkedin lk"></i></a></li>
                             <?php
                             }
                             if($about->github){?>
                                <li><a href=${about.github}><i class="fa-brands fa-github gh"></i></a></li>
                             <?php
                             }
                             if($about->whatsapp){?>
                                <li><a href=${about.whatsapp}><i class="fa-brands fa-whatsapp wapp"></i></a></li>
                             <?php
                             }
                             if($about->skype){?>
                           	    <li><a href=${about.skype}><i class="fa-brands fa-skype sk"></i></a></li>
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
    <section>
        <div class="vedio">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Video</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="vedio_wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="vedio_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-circle-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--           Vedio Section End 
    ----------------------------------------------->


    <!--      Photo Gallery Section Start 
    ----------------------------------------------->
    <section>
        <div class="gallery">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Photo Gallery</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="gallery_wrapper">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="gallery_wrap">
                                <img src="images/v-1.png" alt="">
                                <div class="Overly">
                                    <div class="photoAdd">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </div>
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
    <section>
        <div class="experiance">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Experiance</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="experiance_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="experiance_wrap">
                                <div class="experiance_img">
                                    <img src="images/ex-1.jpg" alt="">
                                </div>
                                <div class="experiance_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <h5>Motion Graphics and UI/UX Designer</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="experiance_wrap">
                                <div class="experiance_img">
                                    <img src="images/ex-1.jpg" alt="">
                                </div>
                                <div class="experiance_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <h5>Motion Graphics and UI/UX Designer</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="experiance_wrap border_n">
                                <div class="experiance_img">
                                    <img src="images/ex-1.jpg" alt="">
                                </div>
                                <div class="experiance_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <h5>Motion Graphics and UI/UX Designer</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Experiance Section End 
    ----------------------------------------------->

    <!--      Skill Section Start 
    ----------------------------------------------->
    <section>
        <div class="skill">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Skills</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="skill_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="skill_wrap">
                                <div class="skill_text">
                                    <h5>Graphic Design</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="skill_wrap">
                                <div class="skill_text">
                                    <h5>Graphic Design</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="skill_wrap border_n">
                                <div class="skill_text">
                                    <h5>Graphic Design</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Skill Section End 
    ----------------------------------------------->

    <!--      Education Section Start 
    ----------------------------------------------->
    <section>
        <div class="education">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Experiance</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="education_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="education_wrap">
                                <div class="education_img">
                                    <img src="images/ed.png" alt="">
                                </div>
                                <div class="education_text">
                                    <h5>North South University Gragution 2020</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="education_wrap">
                                <div class="education_img">
                                    <img src="images/ed.png" alt="">
                                </div>
                                <div class="education_text">
                                    <h5>North South University Gragution 2020</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="education_wrap border_n">
                                <div class="education_img">
                                    <img src="images/ed.png" alt="">
                                </div>
                                <div class="education_text">
                                    <h5>North South University Gragution 2020</h5>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Education Section End 
    ----------------------------------------------->

    <!--      Services Section Start
    ----------------------------------------------->
    <section>
        <div class="service">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Services</h4>
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
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="service_wrap">
                                <div class="serviceImg">
                                    <img src="images/s1.jpg" alt="">
                                </div>
                                <div class="servicetext">
                                    <h4>Business Card Design</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service_wrap">
                                <div class="serviceImg">
                                    <img src="images/s1.jpg" alt="">
                                </div>
                                <div class="servicetext">
                                    <h4>Business Card Design</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service_wrap">
                                <div class="serviceImg">
                                    <img src="images/s1.jpg" alt="">
                                </div>
                                <div class="servicetext">
                                    <h4>Business Card Design</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--      Services  Section End 
    ----------------------------------------------->

    <!--      Language Section Start
    ----------------------------------------------->
    <section>
        <div class="language">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Language</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="language_wrapper">
                    <div class="row">
                        <div class="col-4 col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>Bangla</h4>
                                    <h5>Advance</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>English</h4>
                                    <h5>Basic</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>Hindi</h4>
                                    <h5>Intermediate</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>Frence</h4>
                                    <h5>Advance</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>Urdu</h4>
                                    <h5>Basic</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-2">
                            <div class="language_wrap">
                                <div class="language_img">
                                    <img src="images/bd.png" alt="">
                                </div>
                                <div class="language_text">
                                    <h4>German</h4>
                                    <h5>Intermediate</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Language  Section End 
        ----------------------------------------------->

    <!--      Portfolio Section Start
    ----------------------------------------------->
    <section>
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Graphic</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">3d Art</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Animation</button>
                        </li>
                    </ul>

                    <!-- portfolio Items -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="port_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="port_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="port_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="portItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--      Portfolio  Section End 
    ----------------------------------------------->
    <!--      Award Section Start 
    ----------------------------------------------->
    <section>
        <div class="award">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Awards</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="award_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="award_wrap">
                                <div class="award_text">
                                    <h5>The Booker Prize</h5>
                                    <h6>2021</h6>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="award_wrap">
                                <div class="award_text">
                                    <h5>The Booker Prize</h5>
                                    <h6>2021</h6>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="award_wrap border_n">
                                <div class="award_text">
                                    <h5>The Booker Prize</h5>
                                    <h6>2021</h6>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Award Section End 
    ----------------------------------------------->


    <!--      Interest Section Start
    ----------------------------------------------->
    <section>
        <div class="interest">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Interests</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="interests_wrapper">
                    <!-- Portfolio Button -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-h-tab" data-bs-toggle="pill" data-bs-target="#pills-h" type="button" role="tab" aria-controls="pills-h" aria-selected="true">Traveling</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-p-tab" data-bs-toggle="pill" data-bs-target="#pills-p" type="button" role="tab" aria-controls="pills-p" aria-selected="false">Music</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-c-tab" data-bs-toggle="pill" data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c" aria-selected="false">Writhing</button>
                        </li>
                    </ul>

                    <!-- portfolio Items -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-h" role="tabpanel" aria-labelledby="pills-h-tab">
                            <div class="interests_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-p" role="tabpanel" aria-labelledby="pills-p-tab">
                            <div class="interests_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab">
                            <div class="interests_details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum minima laudantium non, totam iure soluta saepe beatae ipsam architecto est maxime illo sed dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea tempore minus accusamus consequatur hic fuga iusto ipsam nemo eveniet. Totam ipsam aut ducimus culpa repudiandae vitae quibusdam molestiae ut?</p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="interestsItem">
                                        <img src="images/s1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--      Interest  Section End 
    ----------------------------------------------->


    <!--      Client Section Start 
    ----------------------------------------------->
    <section>
        <div class="clients">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Clients</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="clients_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="clients_wrap">
                                <div class="clients_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="clients_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="clients_wrap">
                                <div class="clients_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="clients_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="clients_wrap">
                                <div class="clients_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="clients_text">
                                    <h4>Samsung IT Group 2021</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Client Section End 
    ----------------------------------------------->

    <!--      Jurnal Section Start 
    ----------------------------------------------->
    <section>
        <div class="journal">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Journal</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="journal_wrapper">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="journalImg">
                                <img src="images/burger.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="jurnalText">
                        <div class="textLeft">
                            <h4>Food Blog</h4>
                            <h5>London,UK</h5>
                            <h6>2k view</h6>
                        </div>
                        <div class="textRight">
                            <h4>Wednesday, May 25, 2022</h4>
                        </div>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis fugit veniam tempora laudantium odit reprehenderit corrupti, nemo explicabo architecto nihil iusto aut tempore animi enim suscipit voluptatum mollitia atque provident ea recusandae consequuntur natus. Voluptatem, impedit omnis provident est minus totam libero quis! Ad blanditiis impedit nulla corporis, aliquam fugit laborum provident saepe ab magni maxime natus modi quae! Est laudantium ea maiores libero. Possimus ipsum dolore qui ipsam animi quidem accusamus dolorem explicabo nobis id hic perspiciatis fugiat debitis harum, sequi est sint rerum ratione? Omnis quidem quasi vitae vel ducimus expedita repellat quibusdam corporis quam, assumenda, pariatur nisi.</p>
                </div>
            </div>
        </div>
    </section>
    <!--      Jurnal Section Start 
    ----------------------------------------------->

    <!--      Refference Section Start 
    ----------------------------------------------->
    <section>
        <div class="reffernce">
            <div class="container">
                <div class="sectionHeader">
                    <h4>References</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="reffernce_wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="reffernce_wrap">
                                <div class="reffernce_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="reffernce_text">
                                    <h4>Steve jobs</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="reffernce_wrap">
                                <div class="reffernce_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="reffernce_text">
                                    <h4>Steve jobs</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="reffernce_wrap border_n">
                                <div class="reffernce_img">
                                    <img src="images/profileMAn.png" alt="">
                                </div>
                                <div class="reffernce_text">
                                    <h4>Steve jobs</h4>
                                    <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's alsoLorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ... ...</p>
                                    <h5>251 Connections</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--      Refference Section End 
    ----------------------------------------------->

    <!--      Endurosmnet Section Start 
    ----------------------------------------------->
    <section>
        <div class="endurosmnet">
            <div class="container">
                <div class="sectionHeader">
                    <h4>Endurosmnet</h4>
                    <div class="sectionItem">
                        <ul>
                            <li><i class="fa-solid fa-video"></i></li>
                            <li><i class="fa-solid fa-eye"></i></li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="endurosmnet_wrapper">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="endurosmnetImg">
                                <img src="images/en.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="endurosmnetText">
                        <div class="textLeft">
                            <h4>Moscow wants ‘to destroy everything’ in Donbas</h4>
                            <h5>London,UK</h5>
                            <h6>2k view</h6>
                        </div>
                        <div class="textRight">
                            <h4>Wednesday, May 25, 2022</h4>
                        </div>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis fugit veniam tempora laudantium odit reprehenderit corrupti, nemo explicabo architecto nihil iusto aut tempore animi enim suscipit voluptatum mollitia atque provident ea recusandae consequuntur natus. Voluptatem, impedit omnis provident est minus totam libero quis! Ad blanditiis impedit nulla corporis, aliquam fugit laborum provident saepe ab magni maxime natus modi quae! Est laudantium ea maiores libero. Possimus ipsum dolore qui ipsam animi quidem accusamus dolorem explicabo nobis id hic perspiciatis fugiat debitis harum, sequi est sint rerum ratione? Omnis quidem quasi vitae vel ducimus expedita repellat quibusdam corporis quam, assumenda, pariatur nisi.</p>
                </div>
            </div>
        </div>
    </section>
    <!--      Endurosmnet Section Start 
    ----------------------------------------------->
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


</body>

</html>