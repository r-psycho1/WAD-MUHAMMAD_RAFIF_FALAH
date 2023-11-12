<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $book_info=$book_obj->delete_book_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: index.php');
 }
 
 ?>
