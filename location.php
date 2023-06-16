<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>

    <title>Location</title>
</head>

<body>

    <?php include('includes/header-inc.php') ?>




    <section class="locationBanner">
        <div class="container">
            <h1 class="innerPageHeading">Our Location</h1>

            <div class="panel">
                <a href="#map">
                    <div class="addressCards">
                        <img src="./assets/images/address01.png" alt="">
                        <h6>Head Office</h6>
                        <p>120 A, Sky comfort, Sindhi Muslim Cooperative Housing Society Block A Sindhi Muslim CHS (SMCHS),
                            Karachi, Karachi City, Sindh</p>
                    </div>
                </a>
                <a href="#map">
                    <div class="addressCards">
                        <img src="./assets/images/address02.png" alt="">
                        <h6>DHA- Branch</h6>
                        <p>120 A, Sky comfort, Sindhi Muslim Cooperative Housing Society Block A Sindhi Muslim CHS (SMCHS),
                            Karachi, Karachi City, Sindh</p>
                    </div>
                </a>
                <a href="#map">
                    <div class="addressCards">
                        <img src="./assets/images/address03.png" alt="">
                        <h6>SMCHS Branch</h6>
                        <p><img src="./assets/images/lastAddress.png" alt=""></p>
                    </div>
                </a>
            </div>

        </div>
    </section>


    <section class="maps" id="map">
        <iframe class="map-1"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0072566136805!2d67.05236837601825!3d24.86360174513073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f1b214413d1%3A0xc765a41fdd6a6522!2sBoba%20Bubble%20SMCHS!5e0!3m2!1sen!2s!4v1686841003626!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe class="map-2"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.0624139868473!2d67.0644610760169!3d24.793316247939728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dd382e5da35%3A0x56ed7f743ce11a10!2sBoba%20Bubble%20DHA!5e0!3m2!1sen!2s!4v1686841108490!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <iframe src="" frameborder="0">
        </iframe>
    </section>







    <?php include('includes/process-section.php') ?>
    <?php include('includes/cravings-section.php') ?>
    <?php include('includes/gallery-section.php') ?>

    <?php include('includes/about-us-section.php') ?>


    <?php include('includes/footer-inc.php') ?>


</body>

</html>