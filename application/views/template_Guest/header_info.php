<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home-Pasien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    h3{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
    }
    body{
      background: url("<?php echo base_url()?>assets/watercolor.png") repeat;
       width: 100%;
      height: 100%;
    }
    .footer {
    position: static;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #f5f5f5;
    text-align: center;
    margin-top: 40%;
  }


.map {
  height: 500px;
  position: relative;
}
.map iframe {
  width: 100%;
}
.map .icon-list {
  position: absolute;
  left: 0;
  top: 0;
}
.map .icon-list .icon {
  font-size: 18px;
  color: #ffffff;
  width: 34px;
  height: 34px;
  background: #2cbdb8;
  text-align: center;
  line-height: 34px;
  display: inline-block;
  border-radius: 50%;
  z-index: 1;
  position: relative;
}
.map .icon-list .icon.icon-2 {
  position: absolute;
  left: 185px;
  top: 145px;
}
.map .icon-list .icon.icon-1 {
  position: absolute;
  left: 425px;
  top: 225px;
}
.map .icon-list .icon.icon-3 {
  position: absolute;
  left: 670px;
  top: 145px;
}
.map .icon-list .icon.icon-4 {
  position: absolute;
  left: 550px;
  top: 355px;
}
.map .icon-list .icon.icon-5 {
  position: absolute;
  left: 900px;
  top: 335px;
}
.map .icon-list .icon:after {
  position: absolute;
  left: -3px;
  top: -3px;
  width: 40px;
  height: 40px;
  background: rgba(44, 189, 184, 0.4);
  content: "";
  z-index: -1;
  border-radius: 50%;
}
h1{
  font-size: 70px;
  text-align: center;
  font-style: times;
}


  </style>
</head>
<body>