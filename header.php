<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/static/style.css" type="text/css" media="screen" />
<script language="JavaScript" type="text/javascript"><!--
if  ((navigator.appName == "Microsoft Internet Explorer") && (navigator.userAgent.indexOf ("Opera") == -1))  {
    document.write ('<link href="<?php bloginfo('stylesheet_directory'); ?>/static/style_ie.css" rel="stylesheet" type="text/css" media="screen" />');
};
//-->
</script>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="page">
    <div id="header">
        <div id="headertitle">
            <h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
            <p><?php bloginfo('description') ?></p>
        </div> 
        <!-- Search box (If you prefer having search form as a sidebar widget, remove this block) -->
        <div class="search">
            <?php  include (TEMPLATEPATH . "/searchform.php"); ?>
        </div> 
        <!-- Search ends here-->
    </div>
    <div id="hmenu">
        <ul>
            <li class="hmenu1"><a href="http://www.gokmengorgen.net">Anasayfa</a></li>
            <li><a href="http://github.com/gkmngrgn">GitHub</a></li>
            <li><a href="http://gkmngrgn.tumblr.com">Tumblr</a></li>
            <li><a href="http://identi.ca/gkmngrgn">Identi.ca</a></li>
            <li><a href="http://twitter.com/gkmngrgn">Twitter</a></li>
        </ul>
    </div>
    <div id="wrapper">
