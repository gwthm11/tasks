<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        session_start();
        require_once('html_head.php');
        require_once('db.php'); 
        $sql = "call sp_select('".$_GET['ID']."','".$_GET['name']."',@id,@Name,@email,@Gender,@Location)";
        $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body>
    <div class="container-fluid">
<?php require_once('header.php'); ?>
        <div class = "row">
            <div class="col-md-6">
			    <table class="table">
                    <thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Name
								</th>
								<th>
									Email
								</th>
								<th>
									Gender
								</th>
                                <th>
									Location
								</th>
							</tr>
						</thead>
						<tbody>
<?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr class='active'><td>".$row['id']."</td>
            <td>".$row['Name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['Gender']."</td>
            <td>".$row['Location']."</td></tr>";
                }
?>
				    </tbody>
				</table>
            </div>
        </div>
            <?php require_once('footer.php'); ?>
    </div>
</body>
</html>