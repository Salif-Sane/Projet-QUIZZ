<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEBROOT?>/assets/css/classe.css">


</head>

<body>

    <header class="bgSecondary">
        <h1 class="text-center m-0">
            Le plaisir de jouer
        </h1>
    </header>
    <style> 
      body{
        background:url('<?=WEBROOT?>/assets/img/Background.png') ;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 10px;
        margin-top: -13px;
      }
      * {
  box-sizing: border-box;
}
.tabs {
  display: flex;
    flex-direction: row;
  justify-content: center;
  flex-wrap: wrap;
  max-width: 700px;
  background: #efefef;
  box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
}
.input {
  position: absolute;
  opacity: 0;
}
.label {
  width: 100%;
  padding: 20px 30px;
  background: #e5e5e5;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  color: #3addd6;
  transition: background 0.1s, color 0.1s;
}

.label:hover {
  background: #d8d8d8;
}

.label:active {
  background: #ccc;
}

.input:focus + .label {
  box-shadow: inset 0px 0px 0px 3px #2aa1c0;
  z-index: 1;
}

.input:checked + .label {
  background: #fff;
  color: #818181;
}

@media (min-width: 600px) {
  .label {
    width: auto;
  }
}
.panel {
  display: none;
  padding: 20px 30px 30px;
  background: #fff;
}

@media (min-width: 600px) {
  .panel {
    order: 99;
  }
}

.input:checked + .label + .panel {
  display: block;
}

      </style>