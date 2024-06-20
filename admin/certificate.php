<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div class="container-fluid cetificate">
        <form action="backend/certificatesend.php" method="POST">
            <select name="greet" id="">
                <option value="">Select</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
            </select>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Subject</label>
                <input type="text" name="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="message" id=""></textarea>
            </div>
            <button name="submit">send</button>
        </form>
    </div>

</div>
<?php
    include('includes/footer.php');
?>