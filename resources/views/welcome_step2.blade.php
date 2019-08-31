<!DOCTYPE html>
<html>
<title>Quantar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Segoe UI">
<style>
    body,h1 {font-family: "Segoe UI", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('{{asset("assets/img/backpic.png")}}');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    * {box-sizing: border-box;}
    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }
    #myForm.form-popup{
        right: 15px;
    }
    #myFormS.form-popup {
        left: 15px;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }

</style>

<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

    <div class="w3-display-topleft w3-padding-large w3-xlarge">
        <img style="height:58px;width:208px" src="{{ asset("/assets/img/whitelogo.png")  }}">
    </div>

    <div class="w3-display-left w3-padding w3-hide-small" style="width:45%">
        <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
            <h1 class="w3-xlarge">Join the community</h1>
            <hr class="w3-opacity">
            <p>For Scientists</p>
            <p><button class="w3-button w3-block w3-green w3-round" onclick="openForm('myFormS')">Join Now <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
        </div>
    </div>
    <div class="form-popup" id="myFormS">
        <form method="POST" action="{{url("scientists_auth")}}" class="form-container">
            @csrf
            <label for="psw"><b>Access Code</b></label>
            <input type="password" placeholder="Enter your Access Code" name="psw" required>
            <input type="hidden" name="type" value="scientists" required>

            <button type="submit" class="btn">Join</button>
            <button type="button" class="btn cancel" onclick="closeForm('myFormS')">Close</button>
        </form>
    </div>

    <div class="w3-display-right w3-padding w3-hide-small" style="width:45%">
        <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
            <h1 class="w3-xlarge">Analyse your Data</h1>
            <hr class="w3-opacity">
            <p>For companies</p>
            <p><button class="w3-button w3-block w3-green w3-round" onclick="openForm('myForm')">Join Now <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
        </div>
    </div>

    <div class="form-popup" id="myForm">
        <form method="POST" action="{{url("client_auth")}}" class="form-container">
        @csrf

            <label for="psw"><b>Access Code</b></label>
            <input type="password" placeholder="Enter your Access Code" name="psw" required>
            <input type="hidden" name="type" value="client" required>

            <button type="submit" class="btn">Join</button>
            <button type="button" class="btn cancel" onclick="closeForm('myForm')">Close</button>
        </form>
    </div>

</div>
</div>

<script>
    function openForm(elem) {
        document.getElementById(elem).style.display = "block";
    }

    function closeForm(elem) {
        document.getElementById(elem).style.display = "none";
    }
</script>
</body>
</html>
