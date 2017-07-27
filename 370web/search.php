<?php require_once 'header.php'; ?>

<?php /*

    $data = null;
if (isset($_POST['search'])) {
    extract($_POST);
    include_once 'db.php';
   
    $search = $link->real_escape_string($search);
   // $password = $link->real_escape_string($password);
   // $password = md5($password);

    $sql = "SELECT * FROM users WHERE blood ='$search' AND address ='$search'  ";

    //$result = mysqli_query($link, $sql);
    //$num_result = $result->num_rows;

    if ($sql->num_rows > 0) {
        while ($rows = $result->fetch_assoc()){
        	$data[] = $rows;
        //$data = $rows;
       // $_SESSION['login'] = true;
       // $_SESSION['name'] = $data['name'];
       // header('Location:http://localhost/370web/brac_12/day_20');
      }
    }
   // else{
    //  echo 'Searching is not working';
   // }
  } */

?> 










<h3><a href="add.php"> Donors </a></h3>
<div class="row">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">List of Donors</div>
        <div class="panel-body">

        </div>
        <?php
//        echo '<pre>';


    $data = null;
if (isset($_POST['search'])) {
    extract($_POST);
    include_once 'db.php';
   
    $search = $link->real_escape_string($search);

    $sql = "SELECT * FROM users WHERE blood ='$search' AND address ='$search'  ";

    $result = mysqli_query($link, $sql);
    

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()){
          $data[] = $rows;
        //$data = $rows;
       
      }
    }
   // else{
    //  echo 'Searching is not working';
   // }
  }


















       // require_once 'list.php';
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

                </tr>

                <?php
                $counter_list++;
            endforeach;
            ?>

        </table>
    </div>
</div>

<?php require_once 'footer.php'; ?>


