<?php
    $title = 'Free Gift';
    $tagline = "Ven. Chima Ugochukwu, Senior Pastor of The Intercessory Army for Christ (WARMEN)";
    $page_description = 'Get powerful books by Ven. Chima Ugochukwu for free.';
    $page_image = "chima/chima.jpg";
    $extraBodyClasses = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Ven. Chima Ugochukwu">
    <meta name="description" content="<?= $page_description; ?>">
    <meta name="keywords" 
        content="Ven. Chima Ugochukwu, Christian Author, Christian, Author, Amazon, Religion, Spirituality, christianbook, devotion, faith, olukoya, prayer, prayer madueke, prayer rain, blessing prayer, prayer book, spiritual exercises."
    >
    <meta name="robots" content="index, follow">


    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title; ?> — Ven. Chima Ugochukwu, Senior Pastor of The Intercessory Army for Christ (WARMEN)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index">
    <meta property="og:site_name" content="Ven. Chima Ugochukwu">
    <meta property="og:image" content="assets/images/<?= $page_image; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="<?php echo $title; ?> — Ven. Chima Ugochukwu, Senior Pastor of The Intercessory Army for Christ (WARMEN)">
    <meta name="twitter:title" content="<?php echo $title; ?> — Ven. Chima Ugochukwu, Senior Pastor of The Intercessory Army for Christ (WARMEN)">
    <meta name="twitter:image" content="assets/images/<?= $page_image; ?>">
    <meta name="twitter:description" content="<?= $page_description; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css"/>

    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png" />
    <meta name="theme-color" content="#000000">
    <title><?php echo $title . " — " . $tagline; ?></title>

        
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131093422-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-131093422-2');
    </script>
</head>

<body class="<?php echo $extraBodyClasses; ?>">

<section id="boxset-hero">
    <div class="text animate reveal">
        <h1>The Complete Life-Changing<br>Christian Bookset</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div id="gifts">
        <div class="gift animate reveal">
            <div class="image">
                <img src="assets/images/books/book1.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book1.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
        </div>

        <div class="gift animate reveal">
            <div class="image">
                <img src="assets/images/books/book2.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book2.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
        </div>

        <div class="gift animate reveal">
            <div class="image">
                <img src="assets/images/books/book3.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book3.jpg" alt="Book Cover of Quarantined for God's Deliverance">
            </div>
        </div>
    </div>

    <div class="cta"><a href="#boxset-cta" class="button">Get boxset now!</a></div>
</section>

<!-- <section id="sticky-cta">
    <h3 class="">Get this Life-Changing Boxset today!</h3>
    <button data-open="download-boxset" class="button cta">Get boxset now!</button>
</section> -->

<section id="about-author">
    <div class="text animate reveal">
        <h1>About the Author</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div class="about">
        <img class="animate reveal" src="assets/images/chima/chima.jpg">
        <div class="content">
            <h3 class="animate reveal">Ven. Chima Ugochukwu</h3>
            <p class="animate reveal">Ven. Chima Ugochukwu is the Senior Pastor of one of Nigeria's largest faith-based prayer ministries, The Intercessory Army for Christ also known as the WARMEN, His ordained minister of the Church of Nigeria, Anglican Communion. His weekly services draw thousands watching on TV in Nigeria and around the world.<br><br>He is the author of more than 35 books, many of them bestsellers, and is recognized as one of the most influential Christian leaders out of Nigeria. He resides in Anambra State, Nigeria with his wife and children.</p>
            <div id="social" class="animate reveal">
                <ul>
                    <li>
                        <a href="https://facebook.com/prayermadueke">
                            <img class="svg" src="assets/images/icons/social/facebook.svg" height="15px" alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/prayermadueke">
                            <img class="svg" src="assets/images/icons/social/instagram.svg" height="15px" alt="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/prayermadueke">
                            <img class="svg" src="assets/images/icons/social/twitter.svg" height="15px" alt="Twitter">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="editorial-reviews">
    <div class="text animate reveal">
        <h1>Editorial Reviews</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>
    <div id="reviews">
        <div class="review animate reveal">
            <img class="picture" src="assets/images/reviewers/ogunsanya.png">
            <div class="name">
                <h6>Pastor Ogunsanya Adegoke</h6>
            </div>
            <img class="svg decor" src="assets/images/icons/decor.svg">
            <p class="comment">Chima Ugochukwu has found the keys to releasing the blessing of the Father through the spoken Word to create supernatural breakthroughs in the name of Jesus and by the power of the Spirit. Get ready for the most dramatic answers to prayer ever!</p>
        </div>


        <div class="review animate reveal">
            <img class="picture" src="assets/images/reviewers/michael.png">
            <div class="name">
                <h6>Rev. Micheal Egbunike</h6>
            </div>
            <img class="svg decor" src="assets/images/icons/decor.svg">
            <p class="comment">Great books from an amazing teacher. Chima Ugochukwu really brings to life the power we release into our lives and the world when we partner with the Creator to speak forth His word. So good! So empowering.</p>
        </div>

        <div class="review animate reveal">
            <img class="picture" src="assets/images/reviewers/samuel.png">
            <div class="name">
                <h6>Bishop Samuel Chukwujekwu</h6>
            </div>
            <img class="svg decor" src="assets/images/icons/decor.svg">
            <p class="comment">These magnificent books by Chima Ugochukwu, will empower believers with the tools to boldly release decrees that will unlock the blessings of heaven, align hearts with the Word of God, and bring change to their lives. Bravo!</p>
        </div>
    </div>
</section>

<section id="amazon-reviews">
    <div class="text animate reveal">
        <h1>What my readers on Amazon are saying</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div id="reviews">
        <img class="review animate reveal" src="assets/images/reviews/1.png">

        <img class="review animate reveal" src="assets/images/reviews/2.png">

        <img class="review animate reveal" src="assets/images/reviews/3.png">
    </div>
</section>

<section id="boxset-cta">
    <div class="text animate reveal">
        <h1>Get this Life-Changing<br>Bookset today!</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <form method="post" action="https://sendfox.com/form/1gz86j/m5ev88" class="sendfox-form" id="m5ev88" data-async="true" data-recaptcha="true">
        <div class="form-inputs">
            <div class="name">
                <div class="sendfox-group animate reveal">
                    <input type="text" required value="" name="first_name" class="" id="sendfox_form_name" placeholder="eg: John">
                    <label for="sendfox_form_name">First Name</label>
                </div>
                <div class="sendfox-group animate reveal">
                    <input type="text" required value="" name="last_name" class="" id="sendfox_form_last_name" placeholder="eg: Doe">
                    <label for="sendfox_form_last_name">Last Name</label>
                </div>
            </div>

            <div class="sendfox-group animate reveal">
                <input type="email" required value="" name="email" class="required email" id="sendfox_form_email" placeholder="eg: johndoe@domain.com">
                <label for="sendfox_form_email">Email Address</label>
            </div>
        </div>

        <div class="form-bottom">
            <button type="submit" name="submit" id="submit" class="button animate reveal">Send my free boxset!</button>
            <p class="disclaimer animate reveal">We're committed to your privacy. We will not spam, rent or sell your information. We use the information you provide to us to contact you about our relevant content, devotionals, and new book releases. You may unsubscribe from these communications at any time.</p>

            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="a_password" tabindex="-1" value="" autocomplete="off" /></div>
        </div>
    </form>
    <script src="https://sendfox.com/js/form.js"></script>			
</section>

<form method="post" action="https://sendfox.com/form/36p4oo/3ew4vl" class="sendfox-form" id="3ew4vl" data-async="true" data-recaptcha="true">
<p><label for="sendfox_form_name">First Name: </label><input type="text" id="sendfox_form_name" placeholder="First Name" name="first_name" required /></p>
<p><label for="sendfox_form_last_name">Last Name: </label><input type="text" id="sendfox_form_last_name" placeholder="Last Name" name="last_name" required /></p>
<p><label for="sendfox_form_email">Email: </label><input type="email" id="sendfox_form_email" placeholder="Email" name="email" required /></p>
<!-- no botz please -->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="a_password" tabindex="-1" value="" autocomplete="off" /></div>
<p><button type="submit">Send my free boxset!</button></p>
</form>
<script src="https://sendfox.com/js/form.js"></script>
			

<footer id="footer" class="container" style="padding: 30px; grid-template-columns: 1fr 1fr;">
    <p class="copyright animate reveal">&copy; 2020 Chima Ugochukwu. All rights reserved.</p>
    <div id="social">
        <p>Connect with me</p>
        <span></span>
        <ul>
			<li>
                <a href="https://facebook.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/facebook.svg" height="15px" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://instagram.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/instagram.svg" height="15px" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/twitter.svg" height="15px" alt="Twitter">
                </a>
            </li>
        </ul>
    </div>
</footer>

<script src="assets/js/popper.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/animations.js"></script>
</body>

</html>