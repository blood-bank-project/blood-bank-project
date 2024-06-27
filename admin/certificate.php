<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<div class="content-wrapper">
    <div class="container">
        <h1 class="text-center p-2" style="color:#666;">Top Donor</h1>
        <?php
        require_once "backend/connect.php";
        $sql = "SELECT name, email, count(name) as totalDonation 
                FROM donation 
                GROUP BY user_id 
                ORDER BY totalDonation DESC 
                LIMIT 1";
        $result = $conn->query($sql);
    ?>
        <table class="table table-striped table-bordered text-center w-40">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>No. of times</td>
                </tr>
            </thead>
            <?php
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
        ?>
            <tbody>
                <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['totalDonation']; ?></td>
                </tr>
            </tbody>
        </table>
        <?php
        } else {
            echo "No data found";
        }
    ?>
    </div>

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