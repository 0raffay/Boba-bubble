<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>

    <title>Reviews</title>
</head>

<body>

    <?php include('includes/header-inc.php') ?>




    <section class="galleryBanner">
        <div class="container innerPageContainer">
            <h1 class="innerPageHeading">Reviews</h1>
            <div class="img-wrap">
                <img src="./assets/images/reviewsMain.png" alt="">
            </div>
        </div>
    </section>





    <?php include('includes/about-us-section.php') ?>

    <section class="reviews">
        <div class="container">
            <div class="reviewForm text-center">
                <h4>Submit a Review to Get a Discount</h4>
                <form action="">
                    <div class="formGrid">
                        <div>
                            <label for="">First Name</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Last Name</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Email Address</label>
                            <input type="email">
                        </div>
                        <div class="rating-stars">
                            <label>Rate Bubble Tea</label>
                            <img src="./assets/images/start-img.png" alt="">
                        
                        </div>

                        <div class="col-span-2">
                            <label for="rev-msg">Type Your Review</label>
                            <textarea name="" id="rev-msg" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Review</button>
                </form>
            </div>
        </div>
    </section>


    <?php include('includes/process-section.php') ?>
    <?php include('includes/cravings-section.php') ?>


    <?php include('includes/footer-inc.php') ?>


</body>

</html>