<?php 

function wcd_social_share_script() {
    ?>
    <script type="text/javascript">
        function windowPopup(url, width, height) {
          // Calculate the position of the popup so
          // it’s centered on the screen.
          var left = (screen.width / 2) - (width / 2),
              top = (screen.height / 2) - (height / 2);

          window.open(
            url,
            "",
            "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
          );
        }
        var jsSocialShares = document.querySelectorAll(".wcd-social-share");
        if (jsSocialShares) {
          [].forEach.call(jsSocialShares, function(anchor) {
            anchor.addEventListener("click", function(e) {
              e.preventDefault();

              windowPopup(this.href, 500, 300);
            });
          });
        }
    </script>
    <?php 
}
add_action( 'wp_footer', 'wcd_social_share_script' );

function wcd_social_share_style() {
    ?>
    <style>
        .social-share-links {
            list-style: none;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .wcd-social-share {
            margin: 0 0.5rem;
        }
        .wcd-social-share .icon{
            font-size: 2rem;
        }
        .wcd-social-share .icon.facebook{
            color: rgba( 59, 89, 152, 1);
        }
        .wcd-social-share .icon.facebook:hover{
            color: rgba( 59, 89, 152, 0.8);
        }
        .wcd-social-share .icon.google{
            color: rgba( 221, 75, 57, 1);
        }
        .wcd-social-share .icon.google:hover{
            color: rgba( 221, 75, 57, 0.8);
        }
        .wcd-social-share .icon.twitter{
            color: rgba( 85, 172, 238, 1);
        }
        .wcd-social-share .icon.twitter:hover{
            color: rgba( 85, 172, 238, 0.8);
        }
        .wcd-social-share .icon.linkedin{
            color: rgba( 0, 123, 181, 1);
        }
        .wcd-social-share .icon.linkedin:hover{
            color: rgba( 0, 123, 181, 0.8);
        }
        .wcd-social-share .icon.pinterest{
            color: rgba( 203, 32, 39, 1);
        }
        .wcd-social-share .icon.pinterest:hover{
            color: rgba( 203, 32, 39, 0.8);
        }
        .wcd-social-share .icon.reddit{
            color: rgba( 255, 69, 0, 1);
        }
        .wcd-social-share .icon.reddit:hover{
            color: rgba( 255, 69, 0, 0.8);
        }
        .wcd-social-share .icon.email{
            color: rgba( 255, 252, 0, 1);
        }
        .wcd-social-share .icon.email:hover{
            color: rgba( 255, 252, 0, 0.8);
        }
    </style>
    <?php 
}
add_action( 'wp_head', 'wcd_social_share_style' );

function wcd_social_share_links() {

	    $url = get_permalink();
	    $title = get_the_title();
	    $image = get_the_post_thumbnail_url();
	    
	    $facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode( $url );
	    $facebookicon = '<i class="fa fa-facebook-square" aria-hidden="true"></i>';
	    
	    $google = 'https://plus.google.com/share?url=' . urlencode( $url );
	    $googleicon = '<i class="fa fa-google-plus-square" aria-hidden="true"></i>';
	    
	    $twitter = 'http://twitter.com/share?text=' . $title . '&url=' . $url;
	    $twittericon = '<i class="fa fa-twitter-square" aria-hidden="true"></i>';
	    
	    $linkedin = 'http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode( $url );
	    $linkedinicon = '<i class="fa fa-linkedin-square" aria-hidden="true"></i>';
	    
	    $pinterest = 'http://pinterest.com/pin/create/button/?url=' . urlencode( $url ) .'&media=' . $image;
	    $pinteresticon = '<i class="fa fa-pinterest-square" aria-hidden="true"></i>';
	        
	    $reddit = 'http://www.reddit.com/submit?url=' . urlencode( $url );
	    $redditicon = '<i class="fa fa-reddit-square" aria-hidden="true"></i>';

	    $email = 'mailto:?subject=' . $title . '&body=Check out this site: ' . $url;
	    $emailicon = '<i class="fa fa-envelope-square" aria-hidden="true"></i>';
	    
	    $social_share .= '<ul class="social-share-links">';
	    $social_share .= '<li class="wcd-social-share"><a class="icon facebook" href="' . $facebook . '" target="_blank">' . $facebookicon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon google" href="' . $google . '" target="_blank">' . $googleicon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon twitter" href="' . $twitter . '" target="_blank">' . $twittericon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon linkedin" href="' . $linkedin . '" target="_blank">' . $linkedinicon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon pinterest" href="' . $pinterest . '" target="_blank">' . $pinteresticon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon reddit" href="' . $reddit . '" target="_blank">' . $redditicon . '</a></li>';
	    $social_share .= '<li class="wcd-social-share"><a class="icon email" href="' . $email . '" target="_blank">' . $emailicon . '</a></li>';
	    $social_share .= '</ul>';
	    
	    return $social_share;

}
add_shortcode( 'social_share', 'wcd_social_share_links' );
