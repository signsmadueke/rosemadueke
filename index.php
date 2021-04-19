<?php
    $title = 'Get "The Believer&#39;s Authority" for Free';
    $tagline = "Rose Madueke, Evangelist that loves to teach and preach the love of Christ.";
    $page_description = 'Get "The Believer&#39;s Authority" by Rose Madueke for free.';
    $page_image = "rose/rose.jpg";
    $extraBodyClasses = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Rose Madueke">
    <meta name="description" content="<?= $page_description; ?>">
    <meta name="keywords" 
        content="Rose Madueke, Christian Author, Christian, Author, Amazon, Religion, Spirituality, christianbook, devotion, faith, olukoya, prayer, prayer madueke, prayer rain, blessing prayer, prayer book, spiritual exercises."
    >
    <meta name="robots" content="index, follow">


    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title; ?> — <?php echo $tagline; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index">
    <meta property="og:site_name" content="Ven. Chima Ugochukwu">
    <meta property="og:image" content="assets/images/<?= $page_image; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="<?php echo $title; ?> — <?php echo $tagline; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?> — <?php echo $tagline; ?>">
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
        <img src="assets/images/books/book-name.svg">
    </div>

    <img class="svg decor animate reveal" src="assets/images/icons/decor.svg">

    <div id="gifts">
        <div class="gift animate reveal">
            <div class="image">
                <img src="assets/images/books/book1.jpg">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book1.jpg">
            </div>
        </div>
    </div>

    <div class="cta animate reveal"><a href="#book-cta" class="button">Get book now!</a></div>
</section>

<!-- <section id="sticky-cta">
    <h3 class="">Get this Life-Changing Boxset today!</h3>
    <button data-open="download-boxset" class="button cta">Get boxset now!</button>
</section> -->

<section id="about-book">
    <div class="text animate reveal">
        <h1>About the Book</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div class="content">
        <p class="animate reveal"><strong>Put Your Problems in the Hands of God.</strong><br><br>God, God Almighty, God the Creator of the heavens and the earth, God the Beginning and the End, God the Source of all that is, God the Creator of man—the same God, in all His power and all His majesty, stops and listens when you pray. God has given humanity the ability to bring heaven to earth.<br><br>Whether you know it or not, you have the authority to change the world through prayer. When God said, “Let mankind rule over all the earth,” He was arranging the dominion of the world so that the partnership of mankind was essential for the accomplishment of His purposes. Through her unique perspective on this often-misunderstood subject, Christian author, Roseline Madueke takes the mystery out of prayer, providing practical answers for difficult questions about communicating with God.<br><br>When you build yourself in the foundation of God’s Word and promises, you can find safety despite the downpour, you can find inner peace, and most of all, weather the storm. So start preparing yourself for the storms that are sure to come: pray hard, read the Bible, and strengthen your relationship with God. The prayers in this book will help you get through the most trying times of your life. So when the tempest strikes, you are confident that you will have shelter in God. You will not fear of anything because You know that the Lord is with You. Just call on Him in prayer. He hears your every cry, He knows every tear you shed, and even the deepest longings of your heart. Trust in Him.</p>
    </div>
    <div class="cta animate reveal"><a href="#book-cta" class="button">Get book now!</a></div>
</section>

<section id="about-author">
    <div class="text animate reveal">
        <h1>About the Author</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div class="about">
        <img class="author-image animate reveal" src="assets/images/rose/rose.jpg">
        <div class="content">
            <h3 class="animate reveal">Rose Madueke</h3>
            <p class="animate reveal">Rose Madueke is a wife, mother and evangelist that loves to teach and preach the love of Christ and how you can activate in your life through the power of prayer.<br><br>She and her husband Prayer Madueke lead Prayer Emancipation Missions Worldwide.<br><br>Besides preaching the Gospel & winning souls, Rose is also a Certified Nursing Assistant in New Jersey, USA. Her marriage with Prayer Madueke is blessed with five God-fearing children.</p>
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
            <p class="comment">Rose Madueke has found the keys to releasing the blessing of the Father through the spoken Word to create supernatural breakthroughs in the name of Jesus and by the power of the Spirit. Get ready for the most dramatic answers to prayer ever!</p>
        </div>


        <div class="review animate reveal">
            <img class="picture" src="assets/images/reviewers/michael.png">
            <div class="name">
                <h6>Rev. Micheal Egbunike</h6>
            </div>
            <img class="svg decor" src="assets/images/icons/decor.svg">
            <p class="comment">Great books from an amazing teacher. Rose Madueke really brings to life the power we release into our lives and the world when we partner with the Creator to speak forth His word. So good! So empowering.</p>
        </div>

        <div class="review animate reveal">
            <img class="picture" src="assets/images/reviewers/samuel.png">
            <div class="name">
                <h6>Bishop Samuel Chukwujekwu</h6>
            </div>
            <img class="svg decor" src="assets/images/icons/decor.svg">
            <p class="comment">These magnificent books by Rose Madueke, will empower believers with the tools to boldly release decrees that will unlock the blessings of heaven, align hearts with the Word of God, and bring change to their lives. Bravo!</p>
        </div>
    </div>

    <div class="cta animate reveal"><a href="#book-cta" class="button">Get book now!</a></div>
</section>

<section id="book-cta">
    <div class="text animate reveal">
        <h1>Get this Life-Changing<br>Book today!</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <form action="https://madueke.us1.list-manage.com/subscribe/post?u=34633c278b731846d924a2bcb&amp;id=1ef6650d5a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-inputs">
            <div class="name">
                <div class="mc-field-group animate reveal">
                    <input type="text" required value="" name="FNAME" class="" id="mce-FNAME" placeholder="eg: John">
                    <label for="mce-FNAME">First Name</label>
                </div>

                <div class="mc-field-group animate reveal">
                    <input type="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                    <label for="mce-EMAIL">Email Address</label>
                </div>
            </div>
        </div>

        <div class="form-bottom">
            <input type="submit" value="Send my free book!" name="subscribe" id="mc-embedded-subscribe" class="button animate reveal">
            <p class="disclaimer animate reveal">We're committed to your privacy. We will not spam, rent or sell your information. We use the information you provide to us to contact you about our relevant content, devotionals, and new book releases. You may unsubscribe from these communications at any time.</p>

            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>

            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value="">
            </div>
        </div>
    </form>

    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; }(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>

<section id="other-publications">
<div class="text animate reveal">
        <h1>Other Books by<br>Rose Madueke</h1>
        <img class="svg decor" src="assets/images/icons/decor.svg">
    </div>

    <div id="publications">
        <a href="https://amazon.com/dp/B08MQSWPC8" class="publication animate reveal">
            <div class="image">
                <img src="assets/images/books/book2.jpg">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book2.jpg">
            </div>
        </a>
        <a href="https://amazon.com/dp/B08NF1MG49" class="publication animate reveal">
            <div class="image">
                <img src="assets/images/books/book3.jpg">
            </div>
            <div class="shadow">
                <img src="assets/images/books/book3.jpg">
            </div>
        </a>
    </div>
</section>

<footer id="footer" class="container" style="padding: 30px; grid-template-columns: 1fr 1fr;">
    <p class="copyright animate reveal">&copy; 2021 Rose Madueke. All rights reserved.</p>
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