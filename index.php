<?php 
     $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     $lang = substr($actual_link, 0, strpos($actual_link, '.'));
     $file = file_get_contents('md/content.md');
      if($file == ""){
        // 404 page or smth
    }
?>
<?php include 'mdtophp.php';?>
<!DOCTYPE html>
<html lang="<?php getMdField('seo_locale');?>">
<head>
    <title><?php getMdField('seo_title');?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body id="body">
<div class="wrapper">
    <header>
        <a href="/"><img src="<?php getMdField('logo');?>" alt="<?php getMdField('head_logo_alt');?>" class="logo" title="<?php getMdField('head_logo_title');?>"></a>
        <div class="nav">
            <a href="<?php getMdField('head_menulink1_anchor');?>"><?php getMdField('header_menu1');?></a>
            <div class="vertical_line"></div>
            <a href="<?php getMdField('head_menulink2_anchor');?>"><?php getMdField('header_menu2');?></a>
            <div class="vertical_line"></div>
            <a href="<?php getMdField('head_menulink3_anchor');?>"><?php getMdField('header_menu3');?></a>
        </div>
        <div class="burger" id="burger">☰</div>
        <a href="<?php getMdField('head_button_anchor');?>" class="nav_btn"><?php getMdField('head_button_title');?></a>
        <div class="burger_overlay" id="burger_overlay">
            <p id="burger_close">×</p>
            <a href="<?php getMdField('head_menulink1_anchor');?>"><?php getMdField('header_menu1');?></a>
            <a href="<?php getMdField('head_menulink2_anchor');?>"><?php getMdField('header_menu2');?></a>
            <a href="<?php getMdField('head_menulink3_anchor');?>"><?php getMdField('header_menu3');?></a>
        </div>
    </header>
    <div class="horizontal_line"></div>
    <div class="face_block">
        <div class="face_block_col">
            <h1><?php getMdField('h1');?></h1>
            <h2><?php getMdField('h1_subtitle');?></h2>
            <p><?php getMdField('block1_content');?></p>
            <div class="face_block_btns">
                <a href="<?php getMdField('block1_btn1_anchor');?>" class="face_block_btn1"><?php getMdField('block1_btn1');?></a>
                <a href="<?php getMdField('block1_btn2_anchor');?>" class="face_block_btn2"><?php getMdField('block1_btn2');?></a>
            </div>
        </div>
        <div class="face_block_img"></div>
    </div> 
    <div class="horizontal_line"></div>
    <div class="content">
        <h2><?php getMdField('block3_title');?></h2>
        <div class="bold_line"></div>
        <?php getContent(); ?>
    </div>
    <footer>
    </footer>
</div>
</body>
</html>