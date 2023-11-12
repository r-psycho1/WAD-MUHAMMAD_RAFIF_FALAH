<?php
include 'header.php';
if (isset($_POST['create_book'])) {
    $student_obj->create_book_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View Book List</a> 
        <h3>Create Book Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="book_title">Title:</label>
                <input type="text" name="book_title" id="book_title" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="genre" class="form-control" name="genre" id="genre" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" id="author"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="choose_for">Choose For:</label>
                <select class="form-control" name="choose_for" id="choose_for">
                    <option value="" selected>Select</option>
                    <option value="sale" >Sale</option>
                    <option value="lend" >Lend</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit" onclick="return confirm('Data berhasil ditambahkan!')"/>
        </form> 
    </div>
</div>
<hr/>
<?php
?>

