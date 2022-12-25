<?php 
$general_title_sub = 'Click Photography ';
$general_desc_sub = '';

$full_current_page_actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

$meta_author = "Ceylon Travel Consultancy";
$meta_content_type = "Travel & Consultancy";
?>

<title><?php echo $meta_arr['title'].$general_title_sub ?>  </title>

<meta name="description" content="<?php echo $meta_arr['description'].$general_desc_sub ?>">
<meta name="image" content="<?php echo $meta_arr['image'] ?>" />
<meta name="author" content="<?php $meta_author ?>">
<meta name="copyright" content="<?php echo Date("Y") ?>">

<!-- Linked in & Fb -->
<meta property='og:title' content='<?php echo $meta_arr['og:title'].$general_title_sub ?>'/>
<meta property='og:image' content='<?php echo $meta_arr['og:image'] ?>'/>
<meta property='og:description' content='<?php echo $meta_arr['og:description'].$general_desc_sub ?>'/>
<meta property='og:url' content='<?php echo $full_current_page_actual_link ?>' />
<meta property="og:type" content="<?php echo $meta_content_type ?>" />


<meta property="twitter:title" content="<?php echo $meta_arr['twitter:title'].$general_title_sub ?>"/>
<meta property="twitter:url" content="<?php echo $full_current_page_actual_link ?>" />
<meta property="twitter:image" content="<?php echo $meta_arr['twitter:image'] ?>" />
<meta property="twitter:type" content="<?php echo $meta_content_type ?>" />