<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ayurveda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/plant.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Ayurveda</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto " href="#plants">Plants</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li class="dropdown"><a class="getstarted scrollto" href="#"><i class="ri-user-3-line"></i><?php echo $_SESSION['username']?></a>
              <ul><li><a href="logout.php">Log out <i class="ri-logout-box-r-fill"></i></a></li></ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Welcome to Ayurveda</h1>
      <h2>Here You can scan nearby plants and know about that plant's uses in the form of Ayurveda</h2>
      <a href="#clients" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            
            <a href="capture.php">
            <img src="assets/img/clients/scan-btn.png" class="img-fluid" alt=""></a>
          </div>
          
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>AYURVEDA: A BRIEF GUIDE</h2>
            <h5>Ayurveda essentially means the knowledge of life. It is a precise combination of science and the art of healthy living. <br>
            Ayurveda is popular for its extensive natural healing ways that work on illnesses and improving the general wellness of the human body and mind. <br>
            It does not simply mean chanting, yoga, applying packs and massaging with oils, but branches deep into the psychological and physiological aspects of eliminating the root cause of health problems.</h5>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
            Ayurveda Improves the Quality of Your Daily Life
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ayurveda is a choice of lifestyle, which when adopted in its entirety, brings a wave of general well-being to your daily life.</li>
              <li><i class="ri-check-double-line"></i> Ayurveda helps reclaim health with balanced dietary guidelines, effective sleep patterns, home remedies, daily and seasonal routines, yoga, and exercise patterns.</li>
              <li><i class="ri-check-double-line"></i> Heightened concentration levels through yoga, meditation, herbal intake, and adequate sleep helps re-calibrate mental and goal-based settings in your daily life.</li>
              <li><i class="ri-check-double-line"></i> Ayurvedic treatments improve digestion and increase appetite and immunity.</li>
            </ul>
            <p class="font-italic">
            The basic principles of Ayurveda constitute the following disciplines – don’t skip breakfast, eat a light dinner, avoid sleeping and waking up late, drink water, eat organic produce, avoid smoking and drinking, and maintain an active lifestyle.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-12 text-center">
            <span data-purecounter-start="0" data-purecounter-end="102" data-purecounter-duration="1" class="purecounter"></span>
            <p>Plant Detected</p>
          </div>

          <div class="col-lg-4 col-12 text-center">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-4 col-12 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Balancing the Three Principle Energies of the Body</h3>
              <p>
              In Ayurveda, body, mind and consciousness work together in maintaining balance. They are simply viewed as different facets of one’s being. 
              To learn how to balance the body, mind and consciousness requires an understanding of how vata, pitta and kapha work together. 
              According to Ayurvedic philosophy the entire cosmos is an interplay of the energies of the five great elements—Space, Air, Fire, Water and Earth. 
              Vata, pitta and kapha are combinations and permutations of these five elements that manifest as patterns present in all creation. 
              In the physical body, vata is the subtle energy of movement, pitta the energy of digestion and metabolism, and kapha the energy that forms the body’s structure.  
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-stats"></i>
                    <h5>Vata is the subtle energy associated with movement - composed of Space and Air</h5>
                    <p>It governs breathing, blinking, muscle and tissue movement, pulsation of the heart, and all movements in the cytoplasm and cell membranes. 
                      In balance, vata promotes creativity and flexibility. Out of balance, vata produces fear and anxiety.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-wind"></i>
                    <h5>Pitta expresses as the body’s metabolic system - made up of Fire and Water</h5>
                    <p>It governs digestion, absorption, assimilation, nutrition, metabolism and body temperature. 
                      In balance, pitta promotes understanding and intelligence. Out of balance, pitta arouses anger, hatred and jealousy.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-walk"></i>
                    <h5>Kapha is the energy that forms the body’s structure - bones, muscles, tendons</h5>
                    <p>and provides the “glue” that holds the cells together, formed from Earth and Water. Kapha supplies the water for all bodily parts and systems. 
                      It lubricates joints, moisturizes the skin, and maintains immunity. In balance, kapha is expressed as love, calmness and forgiveness. 
                      Out of balance, it leads to attachment, greed and envy.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Call To Action</h3>
          <p> If you have any issue regarding this website you can mail us.</p>
          <a class="cta-btn" href="mailto:vtu14607@veltech.edu.in?
            subject=Issue regarding Ayurveda">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Benefits of Ayurveda</h2>
              <p>Ayurveda offers extensive therapies and remedies for the young, old, sick, healthy, and everyone in between.<br>
              This 5,000 year old medicine system that originated in India has many life-altering benefits. 
              Here are some of the primary benefits that one can achieve with consistent use of Ayurveda.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-dumbbell"></i></div>
                  <h4>Weight Loss and Maintenance</h4>
                  <p>A healthy diet and modification in lifestyle habits through Ayurvedic treatments help shed excess body fat. 
                  In Ayurveda, weight is not a major concern but eating habits are. 
                  By allowing the body to detox through correct dietary restrictions, it is possible to achieve a toned body.</p>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-health"></i></div>
                  <h4>Healthy and Glowing Skin and Hair</h4>
                  <p>Need a perfect glow and shiny hair? Ayurveda claims that you can ditch the expensive clinical treatments and 
                  go for the organic and natural ways to achieve a glow without spending too much money. 
                  A balanced meal, toning exercises, and Ayurvedic supplements are enough to promote a healthy skin and scalp.</p>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-brain"></i></div>
                  <h4>Say Goodbye to Stress</h4>
                  <p>With a fast-paced lifestyle that leaves no scope for rejuvenation or relaxation, Ayurveda guarantees reduction in stress and anxiety. 
                  Regular practice of yoga, meditation, breathing exercises, massages, and herbal treatments allow the body to calm down, detoxify, and rejuvenate.
                  Yoga improves the autonomic nervous system making your mind alert, so you can focus well and stay energized throughout the day.</p>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon"><i class="bx bx-plus-medical"></i></div>
                  <h4>Lower Blood Pressure, Cholesterol, and Symptoms of Illness and Diseases</h4>
                  <p>esearchers suggest that Ayurvedic diets and relaxation techniques help reduce plaque buildup. Plaque is a result of the formation of cholesterol and fats in the inner lining of the arteries. 
                  This condition is called atherosclerosis and is the root cause of heart attacks and strokes. Ayurvedic medicine offers a multitude of herbs, vitamins, minerals, and proteins. 
                  These are mixed together at an appropriate dosage and administered at an optimal time to prevent and combat immunity related disorders.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="plants" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Plants</h2>
          <p>Here are some plants that are availabe near our houses.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-healthy">Healthy</li>
              <li data-filter=".filter-toxic">Toxic</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/hibiscus.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hibiscus</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/hibiscus.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="This lovely plant prevents diabetes, its leaves and flowers are extensively used as natural remedy for haircare. Hibiscus can be easily grown in the garden and is easy to maintain once it grows to a considerable length. Grow in the ground for best results."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-toxic">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Dieffenbachia.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Dieffenbachia</h4>
                <p>Toxic</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Dieffenbachia.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="This plant is commonly called the Dumb Cane because of the effect it can have on people if they ingest it. Typical symptoms include difficulty swallowing and oral irritation, and these effects on the throat and mouth can render people speechless, or ‘struck dumb,’ hence the name Dumb Cane. Aside from being poisonous, this plant actually makes a very good houseplant. It is easy to care for and will adapt to a variety of lighting conditions in which other plants might not survive. The variegated patterns on the foliage make it an interesting and attractive plant to look at, and as it grows into a full leafy houseplant, it’s not hard to see why these are popular in people’s homes."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/henna.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Henna</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/henna.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Henna, the natural hair colouring material famously used in India is also an excellent medicinal plant. Ayurveda medicine uses its leaves to treat many diseases related to digestive system, respiratory issues and lifestyle related ailments."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-toxic">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/peace-lily.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Peace Lily</h4>
                <p>Toxic</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/peace-lily.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lilies, which are typically brought into homes in cut flower bouquets, are well known for their poisonous properties and potentially fatal effect on cats. However, the Peace Lily is not a true Lily, instead belonging to the Spathiphyllum genus in the Araceae family. It is commonly kept as a houseplant and is especially popular because of its ability to thrive in low lighting, as well as for the elegant white flower like spathes it produces."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/coriander.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Coriander</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/coriander.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Coriander, the most essential ingredient of almost all the recipies, finds a special place in the Ayurvedic medicine. Its seeds are used to treal Gastric related problems. Its juice is very healthy and consuming it can be prevent many diseases including hypertension."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/curry.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Curry Leaves</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/curry.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Curry leaves have the potential to cure diabetes naturally. Consuming it for months is know n to be effective for combating many diseases including skin related disorders. Using it regularly in dishes can keep us healthy."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/marshmellon.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Marshmellow</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/marshmellon.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="The root is consumed to treat inflammations and irritations of the urinary and respiratory mucus membranes, to counter excess stomach acid, peptic ulceratio and gastritis. Externally, the root is applied to bruises, sprain, aching muscles, insect bites, skin inflammations and splinters. The leaves are very edible, unlike the aloe vera. They can be added to salads, boiled, or fried. It is known to help out in the area of cystitis and frequent urination."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-healthy">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/neem.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Neem</h4>
                <p>Healthy</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/neem.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="This bitter tasting plant was the first natural tooth brush used by our ancestors as it provides a soli protection against toothaches and prevents the dieseases related to gums. Its juice is known to possess excellent medicinal properties and is regular used in Ayurveda to treat many types of illness."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-toxic">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/oleander.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Oleander</h4>
                <p>Toxic</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/oleander.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="The Oleander Plant, or Nerium oleander, is a flowering shrub which can be grown outside as a bush, or dwarf varieties work well indoors as houseplants. Oleander flowers are most commonly pink and look similar to periwinkles, though you can also find varieties in red, yellow, orange, and white. This delicate-looking plant is relatively easy to care for, providing it gets ample sunlight."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Team</h2>
              <p>This Project is made by..</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                  <a href="https://riteshranjansaroj.github.io/me"><h4>Ritesh Ranjan</h4></a>
                    <span>Devoted Software Engineer</span>
                    <p>A passionate engineer that don't give up until achieved.</p>
                    <div class="social">
                      <a href="https://twitter.com/RiteshR92638898"><i class="ri-twitter-fill"></i></a>
                      <a href="https://www.facebook.com/riteshranjansaroj"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/riteshranjansaroj"><i class="ri-instagram-fill"></i></a>
                      <a href="https://github.com/riteshranjansaroj"><i class="ri-github-fill"></i></a>
                      <a href="https://www.linkedin.com/in/ritesh-ranjan-1366101a4/"> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                  <a href="https://kumkumr.github.io/portfolio"><h4>Kumkum Kumari</h4></a>
                    <span>Software & Web Developer</span>
                    <p>Love to design and develop software with new clients in AI and ML</p>
                    <div class="social">
                      <a href="https://twitter.com/KumkumK23832263"><i class="ri-twitter-fill"></i></a>
                      <a href="https://www.facebook.com/kumkumisa"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/i_sha_kk"><i class="ri-instagram-fill"></i></a>
                      <a href="https://www.linkedin.com/in/kumkum-kumari-28292a210"> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/team/team-3.jpeg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                  <a href=https://utpalsharmaa.github.io/portfolio><h4>Utpal Kumar Sharma</h4></a>
                    <span>Software Developer</span>
                    <p>Machine learning and Artificial Intelligence Enthusiastic</p>
                    <div class="social">
                      <a href="https://github.com/utpalsharmaa"><i class="ri-github-fill"></i></a>
                      <a href="https://www.facebook.com/utpalkr.sharma.3/"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/utpalsharma___/"><i class="ri-instagram-fill"></i></a>
                      <a href="https://www.linkedin.com/in/utpal-kumar-sharma-81882b210/"> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="assets/img/team/team-4.jpeg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Deepak Kumar</h4>
                    <span>Web Developer</span>
                    <p>A computer science engineer like to learn new things</p>
                    <div class="social">
                      <a href="https://twitter.com/DeepakV29454482"><i class="ri-twitter-fill"></i></a>
                      <a href="https://www.facebook.com/profile.php?id=100010826020859"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/deepakverma3892"><i class="ri-instagram-fill"></i></a>
                      <a href="https://www.linkedin.com/in/deepak-kumar-976541211"> <i class="ri-linkedin-box-fill"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p>If you have any query regarding this project or want to develop real time application, You can contact us.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3884.7812720970387!2d80.09608641490775!3d13.17618659072192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d82ff11a9cf%3A0x3304dc9aed0f444a!2sVel%20Tech%20Rangarajan%20Dr.Sagunthala%20R%26D%20Institute%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sin!4v1619783923151!5m2!1sen!2sin" width="100%" height="270px" style="border:0;" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Vel Tech Rangarajan Dr.Sagunthala R&D Institute of Science and Technology, Avadi, Chennai, Tamil Nadu 600062, India</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>vtu14607@veltech.edu.in</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 8292423189</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-6 footer-contact">
            <h3>Ayurveda</h3>
            <p>
              Vel Tech University<br>
              Chennai, Tamil Nadu - 600062<br>
              India<br><br>
              <strong>Phone:</strong> +91 8292423189<br>
              <strong>Email:</strong> vtu14607@veltech.edu.in<br>
            </p>
          </div>

        <!--  <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>--->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>We will update you with our new projects.</p>
            <form action="forms/nofi.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Ayurveda</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Ritesh & Team</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-2">
        <a href="https://twitter.com/RiteshR92638898" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/riteshranjansaroj" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/riteshranjansaroj" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/ritesh-ranjan-1366101a4/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>