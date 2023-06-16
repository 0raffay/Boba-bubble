<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>

    <title>FAQs</title>
</head>

<body class="certificationsBody">

    <?php include('includes/header-inc.php') ?>




    <section class="contactUsBanner">
        <div class="container innerPageContainer">
            <h1 class="innerPageHeading">Contact Us</h1>
            <div class="img-wrap">
                <img src="./assets/images/contactMain.png" alt="">
            </div>
        </div>
    </section>


    <section class="contactInfo">
        <div class="container panel">
            <div class="contactCards">
                <div class="img-wrap">
                    <img src="./assets/images/contactInfo-1.png" alt="">
                </div>
                <div>
                    <h5>Phone</h5>
                    <p><a href="tel: 021 - 89562303">021 - 89562303</a></p>
                </div>
            </div>
            <div class="contactCards">
                <div class="img-wrap">
                    <img src="./assets/images/contactInfo-1.png" alt="">
                </div>
                <div>
                    <h5>Email</h5>
                    <p><a href="mailto: bobabubble@gmail.com">bobabubble@gmail.com</a></p>
                </div>
            </div>
            <div class="contactCards">
                <div class="img-wrap">
                    <img src="./assets/images/contactInfo-1.png" alt="">
                </div>
                <div>
                    <h5>Head Office</h5>
                    <p><a href="location.php">120 A, Sky comfort, Sindhi Muslim Cooperative Housing Society Block A Sindhi Muslim CHS (SMCHS), Karachi, Karachi City, Sindh</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contactForm text-center">
                <h4>Get in <span class="heading-white">touch!</span></h4>
                <form action="">
                    <div class="formGrid">
                        <div>
                            <label for="">First Name</label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label for="">Email Address</label>
                            <input type="email" required>
                        </div>
                        <div class="rating-stars">
                            <label>Phone No</label>
                            <input type="number" inputmode = "numeric" required>
                        </div>

                        <div class="col-span-2">
                            <label for="rev-msg">Type Your Message</label>
                            <textarea name="" id="rev-msg" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>




  
    <?php include('includes/cravings-section.php') ?>
    <?php include('includes/footer-inc.php') ?>


</body>

</html>