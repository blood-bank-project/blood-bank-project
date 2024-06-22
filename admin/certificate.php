<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <h1 class="text-center p-2 " style="color:#666;"> Send Certificate</h1>
        <div class="container cetificate">
            <form action="backend/certificatesend.php" method="POST">
                <select name="greet" class="form-select form-select-lg mb-3" aria-label="Default select example">
                    <option value="" selected>Select</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
                <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <input type="text" class="form-control" name="message">
                </div>
                <button name="submit" class="btn btn-info">send</button>
            </form>
        </div>
    </div>

</div>
<?php
    include('includes/footer.php');
?>