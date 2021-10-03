<?php
	require_once('../private/initialize.php');
	$conn = $pdo->open();


	$output = array('count'=>0);

	if(isset($_SESSION['user'])){
		try{
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id");
			$stmt->execute(['user_id'=>$user['id']]);
			$row = $stmt->fetch();

			if($row['numrows'] < 1){
				$output['count'] = 0;
			}else{
				$output['count'] = $row['numrows'];
			}
		}catch(PDOException $e){
			$output['message'] = $e->getMessage();
		}
	}

	$pdo->close();
	echo json_encode($output);

?>

