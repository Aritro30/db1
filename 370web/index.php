<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}

require_once 'header.php';
?>

<h3><a href="add.php">Managerial part</a></h3>
<div class="row">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">List of Donors</div>
        <div class="panel-body">

        </div>
        <?php
  //       echo '<pre>';
        require_once 'list.php';
        ?>



 <!-- Table -->
        <table class="table table-bordered">
            <tr> 
                <th>#</th> 
                <th>Name</th>
                <th>Age</th> 
                <th>Email</th>
                <th>Phone</th> 
                <th>Blood Group </th>
                <th>Location</th>
                <th>Action</th>
            </tr>
            <?php
            $counter_list = 1;
            foreach ($data as $value):
                ?>
                <tr>
                    <td><?php echo $counter_list; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['age']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['blood']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                    
                    <td>
                        <a href="edit.php\?id=<?php echo $value['id']; ?>"> <input type="button" value="EDIT" />   </a>
                        <a href="delete.php\?id=<?php echo $value['id']; ?>">
                            <input type="button" value="DELETE" />
                        </a>  
                    </td>

                </tr>

                <?php
                $counter_list++;
            endforeach;
            ?>

        </table>
    </div>
</div>

<?php require_once 'footer.php'; ?>

