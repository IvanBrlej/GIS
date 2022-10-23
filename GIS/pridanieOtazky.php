<?php
session_start();
require 'connection.php';
$kategoria = $_POST['kategoria'];
$typOtazky = $_POST['typOtazky'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pridanie otazky</title>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function(){
        var skuska = document.getElementById("typOtazky").value;
        if(skuska === "text"){
            $('#questionTitleDiv').hide();
            $('#question1Div').show();
            $('#question2Div').hide();
            $('#question3Div').hide();
        }else{
            $('#questionTitleDiv').show();
            $('#question1Div').show();
            $('#question2Div').show();
            $('#question3Div').show();
        }
    });
</script>

<form id="pridanieOtazkyForm" action="pridanieOtazkyHandler.php" method="post" name="pridanieOtazkyForm">
    <div class="card-body p-5">
        <input type="hidden" id="kategoria" name="kategoria" value="<?php echo $kategoria; ?>">
        <input type="hidden" id="typOtazky" name="typOtazky" value="<?php echo $typOtazky; ?>">
        <div class="container col-sm-8" id="questionTitleDiv">
            <label>Question Title</label>
            <input type="text" id="questionTitle" name="questionTitle" /><br>
        </div>
        <div class="container col-sm-8" id="question1Div">
            <label>question1</label>
            <input type="text" id="question1" name="question1" /><br>
        </div>
        <div class="container col-sm-8" id="question2Div">
            <label>question2</label>
            <input type="text" id="question2" name="question2"/><br>
        </div>
        <div class="container col-sm-8" id="question3Div">
            <label>question3</label>
            <input type="text" id="question3" name="question3"/> <br>
        </div>
        <button type="submit" class="pridanieOtazky_btn" id="pridanieOtazkyButton" name="pridanieOtazkyButton">Pridať otázku</button>
    </div>
</form>

</body>
</html>