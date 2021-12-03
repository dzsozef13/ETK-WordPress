<?php get_header(); 
$buttonJoin = get_field('become_a_member_button');
$buttonBook = get_field('book_trainings_button');
$buttonFb = get_field('facebook_button');
?>

<!-- Home Header -->

<div id="welcome" class="section" 
    style="background-image: url(<?php the_field('welcome_image'); ?>);">
    <div id="welcome-container" style="padding-top:64px">
        <h3 style="font-weight: 400; font-size: 20px; width: max-content; padding:4px 16px 4px 16px; background-color:#fff; color: #222;">
			 <?php the_field("welcome_text") ?> </h3>
        <h1 style="max-width: 600px;"> <?php the_field("welcome_title") ?> </h1>
    </div>
</div>

<div class="whitespace"></div>

<!-- Introduction -->

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("introduction_title") ?> </h2>
            <h6> <?php the_field("introduction_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <div class="img" style="background-image: url(<?php the_field('introduction_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<!-- Booking -->

<div class="section line-top">
    <div class="row line-bottom">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("book_trainings_title") ?> </h2>
            <h6> <?php the_field("book_trainings_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <a class="button line-bottom" 
                role="button"
                href="<?php echo $buttonBook['url']; ?>" 
                >
                <?php echo $buttonBook['title']; ?>
				<div class="arrow-icon"></div>
            </a>
            <div class="img-wbutton line-top" style="background-image: url(<?php the_field('book_trainings_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<!-- Video -->

<video id="video" src="wp-content/themes/ETK Theme/assets/etk_final.mp4" playsinline loop muted autoplay width="100%" height="auto" style="margin:0;"></video>
<div id="mute-button">
    <a class="button" href="javascript:void(0);" onclick="toggleMute()">
        <div id="volume-icon"></div>
        Tap for sound!
    </a>
</div>

<div class="whitespace"></div>

<!-- Become a member -->

<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12 field line-right">
            <h2 style="margin-bottom:32px"> <?php the_field("become_a_member_title") ?> </h2>
            <h6> <?php the_field("become_a_member_text") ?> </h6>
        </div>
        <div class="col-md-6 col-sm-12 field-nopad line-left">
            <a class="button line-bottom" 
                role="button"
                href="<?php echo $buttonJoin['url']; ?>" 
                >
                <?php echo $buttonJoin['title']; ?>
				<div class="arrow-icon"></div>
            </a>
            <div class="img-wbutton line-top" style="background-image: url(<?php the_field('become_a_member_image'); ?>);"></div>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<!-- Facebook -->

<div class="section line-top">
    <div class="row line-bottom">
         <div class="col-md-6 col-sm-12 field-nopad line-right">
            <a class="button line-bottom"
                role="button"
                href="<?php echo $buttonFb['url']; ?>" 
                >
                <?php echo $buttonFb['title']; ?>
				<div class="arrow-icon"></div>
            </a>
            <div class="img-wbutton line-top" style="background-image: url(<?php the_field('facebook_image'); ?>);"></div>
        </div>
        <div class="col-md-6 col-sm-12 field line-left">
            <h2 style="margin-bottom:32px"> <?php the_field("facebook_title") ?> </h2>
            <h6> <?php the_field("facebook_text") ?> </h6>
        </div>
    </div>
</div>

<div class="whitespace"></div>

<!-- Functions -->

<script>
    function toggleMute() {
        let video = document.getElementById('video')
        video.muted = !video.muted;
    }
</script>

<?php get_footer() ?>
