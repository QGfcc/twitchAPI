<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


    <script src= "http://player.twitch.tv/js/embed/v1.js"></script>

    <title></title>

    <!--to delete-->
    <!--<script src="js/autoReload.js" type="text/javascript"></script>-->
    <!--END to delete-->

    <!--custom pages-->
<!--    <script src="js/twitchAPI.js" type="text/javascript"></script>-->
    <script src="angular/NG_twitchAPI.js" type="text/javascript"></script>
    <!--<script src="angular/NG_app.js" type="text/javascript"></script>-->
    <script src="angular/NG_app_1.js" type="text/javascript"></script>
    <link href="css/twitchAPI.css" rel="stylesheet" type="text/css"/>

    <!--END custom pages-->

  </head>
  <body>
    <div class="container-fluid"  ng-app="twitchApp" ng-controller="mainCtrl">
      <div class="text-center headerContainer">
        <h1 class="text-center"> Twitch.tv API Viewer</h1>
      </div>
      <!--<ul class="nav nav-pills text-center">-->
      <nav class="text-center">
        <ul class="pagination">
          <li class="" role="presentation" ng-class="{active : curTab == 0}">
            <a href="" ng-click="goToTab(0)">
              <!--<a href="#topGame" id="topGame" ng-click="goToTab(0)" ng-focus="goToTab(0)">-->
              <!--<a href="#topGame" id="topGame" ng-focus="goToTab(0)">-->
              Top Games
            </a>
          </li>
          <li class="" role="presentation" ng-class="{active : curTab == 1}">
            <a href="" ng-click="goToTab(1)">
              <!--<a href="#searchGame" id="searchGame" ng-click="goToTab(1)"  ng-focus="goToTab(1)">-->
              <!--<a href="#searchGame" id="searchGame"  ng-focus="goToTab(1)">-->
              Search
            </a>
          </li>
          <li class="" role="presentation" ng-class="{active : curTab == 2,disabled : curGame == ''}" >
            <a href="" ng-click="goToTab(2)">
              <!--<a href="#searchStream" id="searchStream" ng-click="goToTab(2)"  ng-focus="goToTab(2)">-->
              <!--<a href="#searchStream" id="searchStream"   ng-focus="goToTab(2)">-->
              Streams
            </a>
          </li>
          <li class="" role="presentation" ng-class="{active : curTab == 3,disabled : curStream == ''}" >
            <a href="" ng-click="goToTab(3)">
              <!--<a href="#searchStream" id="searchStream" ng-click="goToTab(2)"  ng-focus="goToTab(2)">-->
              <!--<a href="#searchStream" id="searchStream"   ng-focus="goToTab(2)">-->
              Stream
            </a>
          </li>
        </ul>
      </nav>
      <form class="form-inline text-center" ng-show="curTab == 1">
        <input type="text" class="form-control" ng-model="curSearch" placeholder="Search Game here">
        <label ng-show="curSearchType == 'games'">
          <!--<input type="radio" class="form-control" ng-model="curSearchType" value="game" ng-selected="true">-->
          <input type="checkbox" class="form-control" ng-model="searchLive">
          Live
        </label>
        <label>
          <!--<input type="radio" class="form-control" ng-model="curSearchType" value="game" ng-selected="true">-->
          <input type="radio" class="form-control" ng-model="curSearchType" value="games">
          Game
        </label>
        <label>
          <input type="radio" class="form-control" ng-model="curSearchType" value="channels">
          Channel
        </label>
        <label>
          <input type="radio" class="form-control" ng-model="curSearchType" value="streams">
          Stream
        </label>
      </form>
      <div id="displayer">



        <div class="row" ng-controller="topGameCtrl" ng-show="curTab == 0" top-game>
        </div>



        <!--<div class="row" ng-controller="searchGameCtrl" ng-show="curTab == 1" game-search>-->
        <div ng-controller="searchGameCtrl" ng-show="curTab == 1" >
          <div class="row"  ng-if="curSearchType == 'games'" game-search>
          </div>
          <div class="row" ng-if="curSearchType == 'channels'" channel-search >
            <!--<h1>dqsfqsdf</h1>-->
          </div>
        </div>



        <div class="row" ng-controller="searchStreamCtrl" ng-show="curTab == 2" streams>
          <!--        <div class="" ng-controller="searchStreamCtrl" ng-show="curTab == 2">
                    <div class="row"  streams>
                    </div>-->
        </div>

        <!--<div class="row" ng-controller="streamCtrl" ng-show="curTab == 3" ng-if="curTab == 3">-->
        <div class="row" ng-controller="streamCtrl" ng-show="curTab == 3" >
          <h1> test </h1>
          <div id="twitchPlayerDiv"></div>
        </div>
      </div>
    </div>
  </body>
</html>
