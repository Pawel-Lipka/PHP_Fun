<?php

function getFromRequest($request){
   return isset($_REQUEST [$request]) ? $_REQUEST [$request] : null;
}