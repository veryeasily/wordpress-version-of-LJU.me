  <head>
    <meta charset="utf-8">
	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="row">
	<div class="span2">
	</div>
	<div class="span8">
	  <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
		  <div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
			<div class="nav-collapse collapse">
			  <ul class="nav">

				  <?php wp_list_pages(array('title_li' => '', 'exclude' => 19)); ?>

			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		  <div id="widgetized-header">

			  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header')) : else : ?>

			  <div class="pre-widget">
				  <p><strong>Widgetized Header</strong></p>
				  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
			  </div>

			  <?php endif; ?>

		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="container">
