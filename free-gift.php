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

    <link rel='stylesheet' id='mailster-form-default-css' href='https://chimaugochukwu.com/wp-content/plugins/mailster/assets/css/form-default-style.min.css?ver=3.3.7' media='all' />
    <form action="https://chimaugochukwu.com/mailster/subscribe" method="post" class="mailster-form mailster-form-submit extern mailster-form-1" novalidate>
        <input name="_action" type="hidden" value="subscribe">
        <input name="_timestamp" type="hidden" value="1689932487">
        <input name="_referer" type="hidden" value="extern">
        <input name="_nonce" type="hidden" value="fcc6c3a0ca">
        <input name="formid" type="hidden" value="1">
        <div class="form-inputs mailster-form-fields">
            <div class="name">
                <div class="mailster-wrapper mailster-firstname-wrapper animate reveal">
                    <input id="mailster-firstname-1" name="firstname" type="text" value="" class="input mailster-firstname mailster-required" aria-required="true" aria-label="First Name" placeholder="eg: John">
                    <label for="mailster-firstname-1">First Name <span class="mailster-required">*</span>
                    </label>
                </div>
                <div class="mailster-wrapper mailster-lastname-wrapper">
                    <input id="mailster-lastname-1" name="lastname" type="text" value="" class="input mailster-lastname" aria-required="false" aria-label="Last Name" placeholder="eg: Doe">
                    <label for="mailster-lastname-1">Last Name</label>
                </div>
            </div>

            <div class="mailster-wrapper mailster-email-wrapper animate reveal">
                <input id="mailster-email-1" name="email" type="email" value="" class="input mailster-email mailster-required email" aria-required="true" aria-label="Email" spellcheck="false" placeholder="eg: johndoe@domain.com">
                <label for="mailster-email-1">Email <span class="mailster-required">*</span>
                </label>
            </div>
            
            <div class="form-bottom">                
                <div class="mailster-wrapper mailster-_gdpr-wrapper mailster-checkbox animate reveal">
                    <input type="hidden" name="_gdpr" value="0">
                    <input id="mailster-_gdpr-1" name="_gdpr" type="checkbox" value="1" class="mailster-_gdpr mailster-required" aria-required="true" aria-label="I agree to the privacy policy and terms." required>
                    <label for="mailster-_gdpr-1">I agree to the <a href="https://chimaugochukwu.com/?page_id=3" target="_top">privacy policy and terms</a>.</label>
                </div>
                <div class="mailster-wrapper mailster-submit-wrapper form-submit">
                    <input name="submit" type="submit" value="Send my free boxset!" class="submit-button button animate reveal" aria-label="Send my free boxset!">
                </div>
            </div>
        </div>
    </form>		
</section>

<footer id="footer" class="container" style="padding: 30px; grid-template-columns: 1fr 1fr;">
    <p class="copyright animate reveal">&copy; 2023 Chima Ugochukwu. All rights reserved.</p>
</footer>

<script src="assets/js/popper.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/animations.js"></script>
</body>

</html>