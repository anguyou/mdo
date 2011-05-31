<?php
  // Figure out the browser the user is running in
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('/Firefox/i', $user_agent)) {
    $browser = "ff";
  } else if (preg_match('/MSIE.9/i', $user_agent)) {
    $browser = "ie ie9";
  } else if (preg_match('/MSIE.8/i', $user_agent)) {
    $browser = "ie ie8";
  } else if (preg_match('/MSIE.7/i', $user_agent)) {
    $browser = "ie ie7";
  } else if (preg_match('/MSIE.6/i', $user_agent)) {
    $browser = "ie ie6";
  } else if (preg_match('/Chrome/i', $user_agent)) {
    $browser = "chrome";
  } else if (preg_match('/Safari/i', $user_agent)) {
    $browser = "safari";
  } else {
    $browser = "in_unknown";
  }
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <!-- // RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS for <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

    <!-- // Less.js at the ready! -->
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style.less" />
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/less-1.0.40.min.js"></script>
    
    <!-- jQuery -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
		<script type="text/javascript">
      $(document).ready(function(){
        $(".copy-code").focus(function() {
          $(this).select();
        });
        $(".copy-code").mouseup(function(e) {
          e.preventDefault();
        });
      });
		</script>
		
		<!-- @anywhere -->
		<script src="http://platform.twitter.com/anywhere.js?id=Bil8FuG70FBQMHJrqB0Qlw&v=1" type="text/javascript"></script>
		<script type="text/javascript">
  		twttr.anywhere(function (T) {
        T.hovercards();
      });
		</script>

    <!-- Google Webmaster Tools & Analytics -->
    <meta name="google-site-verification" content="i2l3RBLrWFm3JY5fXIug2_83I6muZwPlIF5e4j13-o8" />
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    	wp_head();
    ?>
  </head>

  <body class="<?php echo $browser ?>">
    
    <div id="sidebar">
		  <p>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">
		      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hells-yeah-rounded.png" alt="Mark Otto" id="hellsYeah" />
		    </a>
		  </p>
		  
		  <div class="wrapper">
  		  <h4>What's Here</h4>
  			<?php wp_nav_menu(array(
  			 'menu' => 'mainNav',
  			  'container' => '',
  			  'depth' => '1'
  			)); ?>
  			
  			<?php get_search_form(); ?>
  			
  		  <h4>Elsewhere</h4>
        <ul>
          <li>
            <a href="http://twitter.com/mdo" title="Follow me on Twitter">Twitter</a>
          </li>
          <li>
            <a href="http://dribbble.com/players/mdo" title="Follow my work on Dribbble">Dribbble</a>
          </li>
          <li>
            <a href="http://flickr.com/photos/markdotto" title="View my photos and screenshots on Flickr">Flickr</a>
          </li>
          <li>
            <a href="http://rdio.com/people/mdo/" title="Follow me and my musical tastes on Rdio">Rdio</a>
          </li>
        </ul>
        <h4>Contact</h4>
        <ul>
          <li>
            <a href="mailto:hi@markdotto.com?subject=Oh hai!" title="Email Me">hi@markdotto.com</a>
          </li>
        </ul>
        <h4>Subscribe</h4>
        <ul>
          <li>
            <a href="http://feeds.feedburner.com/mdo">RSS Feed</a>
          </li>
        </ul>
  		<p>&copy; <?php echo date("Y") ?>. All rights reserved.</p>
      </div>
    </div>
    
    <div id="content"> <!-- /closes in footer -->
      
      <?php if (is_home()) { ?>
      <div class="oh-hai">
        <h1>This is the website of one Mark Otto,<br /> a designer living in California and<br /> working at Twitter.</h1>
      </div>
      
      <hr />
      <?php } ?>