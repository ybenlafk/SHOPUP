<?php
session_start();
if(empty($_SESSION)){
    header('location: /ecommerceit/');
}