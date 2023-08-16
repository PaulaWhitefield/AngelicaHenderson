<!DOCTYPE html>
<html lang="en" style="min-height: 100vh;<?php if( isset( $background_image ) && $background_image ): ?> background-image: url('<?php echo $background_image; ?>'); background-size: cover; background-repeat: no-repeat;<?php endif; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Angelica Henderson</title>
        
        <link rel="stylesheet" type="text/css" href="https://w3css.staticly.ict.rocks/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.ict.rocks/nunito/nunito.css">
    </head>
    
    <body class="font-nunito<?php if( isset( $body_class ) && $body_class ) echo ' ' . $body_class; ?>">
        <div class="w3-content w3-section w3-round-large w3-padding-large w3-padding-24 w3-text-light-gray" style="background-color: rgba( 0, 0, 0, 0.5 );">
            <h1 class="font-nunito w3-center w3-text-pink w3-xxxlarge"><b class="w3-padding w3-bottombar w3-border-deep-purple">Angelica Henderson</b></h1>
            <p class="w3-center w3-text-white w3-xlarge"><b>It's Time To Relax!</b></p>
            
            <div class="w3-bar w3-deep-purple w3-section w3-round-large">
                <a href="/" class="w3-bar-item w3-button w3-hover-pink<?php if( isset( $current_page ) && $current_page == "home" ) echo ' w3-pink'; ?>">Home</a>
                <a href="/massage" class="w3-bar-item w3-button w3-hover-pink<?php if( isset( $current_page ) && $current_page == "massage" ) echo ' w3-pink'; ?>">Massage</a>
                <a href="/contact" class="w3-bar-item w3-button w3-hover-pink<?php if( isset( $current_page ) && $current_page == "contact" ) echo ' w3-pink'; ?>">Contact</a>
            </div>
            
            <div class="w3-padding">
                <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
            </div>
        </div>
    </body>
</html>
