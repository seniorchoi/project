<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | <?php echo config::get('site_title');?></title>
</head>
<body>
    <nav>
        <a href="<?php echo url::to(''); ?>">Home</a>
        <a href="<?php echo url::to('contact'); ?>">Contact page</a>
        <a href="<?php echo url::to('products'); ?>">Product page</a>
        


    </nav>

    Home page<br/>

    The URL of this project is <?php echo config::get('base_url','unknown'); ?>

    admin for project is <?php echo config::get('administrator', 'not found');

    if(config::get('administrator')=='not found')
    {
        echo" admin is not set yet";
    }
?>

</body>
</html>