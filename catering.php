<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>

    <title>Catering</title>
</head>

<body>

    <?php include('includes/header-inc.php') ?>




    <section class="cateringBanner">
        <div class="container innerPageContainer">
            <h1 class="innerPageHeading">Catering</h1>
            <div class="img-wrap">
                <img src="./assets/images/cateringMain.png" alt="">
            </div>

            <div class="panel">
                <div class="cateringText">
                    <h1>Boba Bubble<span> Catering</span></h1>
                    <p>
                    Boba Bubble began as a dream rooted in a deep appreciation for the art of bubble tea. The founders, avid tea enthusiasts with a passion for creating delightful experiences, embarked on a journey to share their love for this beloved beverage with the world.
                    </p>
                    <p>
                    The story of Boba Bubble starts with a quest to find the perfect balance of flavors, textures, and presentation. Countless hours were spent sourcing the finest tea leaves and experimenting with a wide array of ingredients. The founders tirelessly crafted and refined their recipes, ensuring that each sip of their bubble tea was a moment of pure bliss.
                    </p>
                    <p>
                    Driven by a commitment to excellence, Boba Bubble has evolved into a haven for tea lovers seeking exceptional bubble tea. Every aspect of the brand is carefully curated, from the warm and inviting atmosphere of their stores to the friendly and knowledgeable staff who guide customers through their bubble tea journey.
                    </p>



                </div>
                <div class="img-wrap">
                    <img src="./assets/images/cateringMain1.png" alt="">
                </div>
            </div>

        
        </div>
    </section>






    <section class="cateringInquery padding-0">
        <div class="container">
            <div class="cateringForm text-center">
                <h4>Catering <span class="heading-white">Enquiries</span></h4>
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
                        <div class="col-span-2">
                            <label for="">Email Address</label>
                            <input type="email">
                        </div>
                        <div>
                            <label>Occasion Type</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Occasion Date</label>
                            <input type="date" name="" id="" class="noPlaceholder" >
                        </div>

                        <div class="col-span-2">
                            <label for="rev-msg">Type Your Message</label>
                            <textarea name="" id="rev-msg" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>


    <?php include('includes/process-section.php') ?>
    <?php include('includes/cravings-section.php') ?>
    <?php include('includes/gallery-section.php') ?>

    <?php include('includes/about-us-section.php') ?>

    <?php include('includes/footer-inc.php') ?>


</body>

</html>