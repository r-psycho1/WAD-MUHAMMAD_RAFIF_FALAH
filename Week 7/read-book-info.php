<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $book_info=$book_obj->view_book_by_book_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-purple mt-12 pull-right">View Book List</a> 
     
 <h3>View Book Info</h3>
       
    
     <hr/>
   
   
 
      
    <label >Title:</label>
   <?php  if(isset($book_info['title_book'])){echo $book_info['title_book']; }?>

<br/>
    <label>Genre:</label>
  <?php  if(isset($book_info['genre'])){echo $book_info['genre'];} ?>
    
    <br/>
    <label >Author:</label>
      <?php  if(isset($book_info['author'])){echo $book_info['author'];} ?>
    <br/>

  <label >Choose For:</label>
   <?php  if(isset($student_info['choose_for'])){echo $student_info['choose_for'];} ?>
  <br/>
    <label >Country:</label>
      <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
    <br/>

          

    <a href="<?php echo 'update-book-info.php?id='.$book_info["book_id"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

