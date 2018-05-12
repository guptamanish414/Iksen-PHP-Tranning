<html>
<head>
<title>Tutorial theme</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h1>HEADER</h1>
	  				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    </div>