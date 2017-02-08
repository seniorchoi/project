<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | <?php echo config::get('site_title');?></title>
</head>
<body>
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