<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <?php echo form_open_multipart('myform/success');?>

    <input type="text" placeholder="Enter username" value='<?php echo set_value('name') ?>' name="name" >
    <?php echo form_error('name') ?><br><br>

    <input type="text" placeholder="Enter email" value='<?php echo set_value('email') ?>'  name="email" >
    <?php echo form_error('email') ?><br><br>

    <input type="password" placeholder="Enter password" value='<?php echo set_value('password') ?>'  name="password" >
    <?php echo form_error('password') ?><br><br>

    <input type="file" name="image" ><br><br>

    <input type="submit" value="Submit"><br><br>

    <?php echo form_close();?>

</body>
</html>

<script>

function alertMe(e){
    console.log("hello")
}

1  

</script>