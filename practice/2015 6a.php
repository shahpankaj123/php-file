<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            border:2px solid red;
            color:red;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <form onsubmit="return validate()" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    <labe>name:</label>
    <input type="text" name="name" id="name">
    <span id="names" class="error" style="visibility:hidden;"></span><br>
    <labe>password:</label>
    <input type="password" name="password" id="password">
    <span id="passwords" class="error" style="visibility:hidden;"></span><br>
    <labe>age:</label>
    <input type="number" name="age" id="age">
    <span id="ages" class="error" style="visibility:hidden;"></span><br>
    <labe>email:</label>
    <input type="text" name="email" id="email">
    <span id="emails" class="error" style="visibility:hidden;"></span><br>
    <labe>phone:</label>
    <input type="number" name="phone" id="phone">
    <span id="phones" class="error" style="visibility:hidden;"></span><br>
    <input type="submit">
    </form>
</body>
<script>
    function validate()
    {
        var name=document.getElementById('name').value;
        var password=document.getElementById('password').value;
        var age=document.getElementById('age').value;
        var email=document.getElementById('email').value;
        var phone=document.getElementById('phone').value;

        if(name=="" || password=="" || age=="" || email=="" || phone=="")
        {
            alert("please fill all the data");
            return false;

        }

        var patern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if(patern.test(email))
        {
            
        }else
        {
            document.getElementById('emails').style.visibility="visible";
            document.getElementById('emails').innerHTML="please enter the email in correct format";
            return false;
        } 

        var patern1=/([0-9]{10})^$/;

        if(patern1.test(phone))
        {
            return true;
        }else
        {
            document.getElementById('phones').style.visibility="visible";
            document.getElementById('phones').innerHTML="please enter 10 digit number for phone number";
            return false;
        }

    }
</script>
</html>