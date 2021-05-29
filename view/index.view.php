<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
    <title>Forma</title>
</head>
<body>
<ul>
<?php
if(isset($_POST['send'])){
    foreach($_POST as $label =>$item){
        if($item!==""){
            echo "<li>$label:$item</li>";
        }
    }
}
?>
</ul>
<div class="container" style="height: 1000px">
    <form method="post">
        <h4>Duomenų informacija</h4>
        <div class="row mt-3 mb-2">
            <div class="col-2">
                <label for="inputEmail">El. pašto adresas: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="password">Slaptažodis: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="password" class="form-control" name="password" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="rePassword">Patvirtinti slaptažodį: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="password" class="form-control" name="rePassword" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-5">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" required>
                <label class="form-check-label" >Sutinku su taisyklėmis</label>
            </div>
        </div>
        <h4>Pasitikrinkite sąskaitos adresą</h4>
        <div class="row mt-3 mb-2">
            <div class="col-2">
                <label for="inputGender">Lytis: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <select class="custom-select custom-select-sm" name="gender" required>
                    <option value="woman">Moteris</option>
                    <option value="man">Vyras</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputName">Vardas: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="name" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputLastname">Pavardė: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="lastname" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputAddress">Gatvė, namo(buto)nr <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="street" required>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="number" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputPostCode">Pašto kodas: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="postCode" required>
            </div>
            <div class="col-2 mt-2">
                <a href="https://www.post.lt/pasto-kodu-ir-adresu-paieska" class="card-link"><span style="color: black;"><u>Pašto kodo paieška</u></span></a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputCity">Miestas: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" name="city" required>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col-2">
                <label for="inputCountry">Šalis: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <select class="custom-select custom-select-sm" name="country" required>
                    <option selected>-</option>
                    <option value="LT">Lietuva</option>
                    <option value="US">JAV</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputPhoneNumber">Telefonas: <span style="color: red; font-weight: bold;">*</span></label>
            </div>
            <div class="col-5">
                <input type="tel" class="form-control" name="phone" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label for="inputMessage">Papildoma informacija:<br><span style="color: grey;">Pavyzdžiui, vartelių/durų</span><br><span style="color: grey;">kodas:</span></label>
            </div>
            <div class="col-5">
                <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2"></div>
            <div class="col-5">
                <label><span style="color: grey;">Prašome užpildyti visus pažymėtus laukus</span><span style="color: red; font-weight: bold;">*</span></label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2"></div>
            <div class="col-5">
                <button type="submit" class="btn btn-secondary" name="send">Registruotis</button>
            </div>
        </div>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>