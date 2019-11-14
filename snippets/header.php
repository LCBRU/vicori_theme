<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/packages/vicori/css/vicori.css?v=1">

    <title>@{ sitename } / @{ title | def('404') }</title>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">
            <img src="/pages/vicori_logo_150.png" />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <@ newPagelist {
              type: 'children', 
              parent: '/' 
            } @>
            <@ foreach in pagelist @>
              <li>
                <a class="nav-link <@ if @{ :current } @>active<@ end @>" title="@{ title }" href="@{ url }">@{ title }</a>
              </li>
            <@ end @>
          </li>
          </div>
      </div>
    </nav>

    <div class="container">
