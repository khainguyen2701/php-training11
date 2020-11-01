<?php 
include('functions.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($results);
?>
<html>
    <head>
        <title>Details</title>
        
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
		<link rel="stylesheet" href="public/css/styles.css">
    </head>
    <body>
		<div class="container">
        <div class="header">
            <h2>List User</h2>
        </div>
        <form >
            <?php echo display_error(); ?>	
            <table class="table">
                <thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Username</th>
						<th scope="col">Full name</th>
						<th scope="col">Email</th>
					</tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result): ?>
                    <tr scope="row">
                        <td><?php echo $result['id']; ?></td>   
                        <td><?php echo $result['username']; ?></td>   
                        <td><?php echo $result['fullname']; ?></td>   
                        <td><?php echo $result['email']; ?></td> 
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php } else {
    echo "không tìm thấy";
    }?>
        </form>
        <div class="back" style="text-align: center">
		<button type="button" class="btn btn-info" onClick="javascript:history.go(-1)">Back</button>
        </div>
        </div>
                        
    </body>
</html>