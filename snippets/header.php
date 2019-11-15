<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/packages/vicori/css/vicori.css?v=1">

    <title>@{ sitename } / @{ title | def('404') }</title>
  </head>

<body>

  <div id="page_header" class="fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/pages/vicori_logo_150.png" />
      </a>
      <nav id="first_nav" class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarNavDropdown" class="navbar-collapse collapse">
              <ul class="navbar-nav mr-auto">
                <@ newPagelist {
                  context: '/',
                  type: 'children',
                  excludeHidden: true,
                } @>
                <@ set { %top_level: 'nothing' } @>
                <@ foreach in pagelist @>
                  <@ if @{ :currentPath } @>
                    <@ set { %top_level: @{ url } } @>
                  <@ end @>
                    <li class="nav-item <@ if @{ :currentPath } @>active<@ end @>">
                      <a class="nav-link" title="@{ title }" href="@{ url }">@{ title }</a>
                    </li>
                <@ end @>
              </ul>
          </div>
      </nav>
      <nav id="second_nav" class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarNavDropdown" class="navbar-collapse collapse">
              <ul class="navbar-nav mr-auto">
                <@ newPagelist {
                  context: @{ %top_level },
                  type: 'children',
                } @>
                <@ foreach in pagelist @>
                  <li class="nav-item <@ if @{ :current } @>active<@ end @>">
                    <a class="nav-link" title="@{ title }" href="@{ url }">@{ title }</a>
                  </li>
                <@ end @>
              </ul>
          </div>
          <div class="navbar-nav">
            <form class="form-inline" method="get" action="@{ urlSearchResults }" onsubmit="return (this.search.value.length > 0)">
              <input class="form-control" type="text" name="search" placeholder="Search" value="" autocomplete="off" />
            </form>
          </div>
      </nav>
    </div>
  </div>

  <div id="main_container" class="container">
