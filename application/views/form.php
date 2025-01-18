<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>


    <form id="formId" >

        <input type="text" placeholder="Enter username"  name="name">
        <span class="name-Error error"></span><br><br>

        <input type="text" placeholder="Enter email"  name="email">
        <span class="email-Error error"></span><br><br>

        <input type="password" placeholder="Enter password"  name="password">
        <span class="password-Error error"></span><br><br>

        <input type="file" name="image" ><br><br>
        <span class="image-Error error"></span>

        <button type="button" onclick="submitFormData()">Submit</button>

    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>


</body>

</html>