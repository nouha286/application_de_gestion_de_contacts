<?php 
session_start();
if(isset($_SESSION['name']))
{
    header('location:page_contact.php');
}