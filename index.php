<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>WIFI Casablanca | Cadastro MAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/wifi.ico">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container formCadMAC">
    <h3>Cadastro de MAC ADDRESS</h3>
    <p>Formulário para liberação de uso da rede Wireless (WLAN) Casablanca. Essa rede permite maior flexibilidade e mobilidade, idela para quem utiliza dispositivos móveis.</p>
    <form class="row g-3">
        <div class="col-12">
          <label class="form-label">Nome e Sobrenome</label>
          <input type="text" class="form-control" id="nome_mac" placeholder="Ex. João Silva" required autocomplete="off">
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="mail_mac" placeholder="exemplo@exemplo.com" required autocomplete="off">
        </div>

        <div class="col-md-6">
          <label class="form-label">Ramal</label>
          <input type="number" class="form-control" id="ramal_mac" placeholder="ex. 7777" required autocomplete>
        </div>

        <?php
         $m =  exec("getmac");
         $mac = $m;
        ?>

        <div class="col-12">
          <label for="inputAddress" class="form-label">MAC Address</label>
          <input type="text" class="form-control" id="address_mac" disabled value="<?php echo $mac ?>">
        </div>

        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

    </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>