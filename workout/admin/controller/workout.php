<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET ['page']) {
    case 'add':
        $content="views/workout/tambah.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id_workout=$_SESSION['login']['id'];
            if(!empty($_POST['id_workout'])){
                $sql = "UPDATE workout SET workout_type = '$_POST[workout_type]', workout_duration = '$_POST[workout_duration]', 
                amount_sets = '$_POST[amount_sets]', amount_reps = '$_POST[amount_reps]' WHERE md5(id_workout) = '$_POST[id_workout]'";
            } else {
                $sql="INSERT INTO workout (workout_type, workout_duration, amount_sets, amount_reps)
                VALUES ('$_POST[workout_type]','$_POST[workout_duration]','$_POST[amount_sets]','$_POST[amount_reps]')";
            }
            if($conn->query($sql)==TRUE) {
                header('Location: '.$con->site_url().'/admin/index.php?mod=workout');
            } else {
                $err['msg']="Error: ". $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg']="Tidak diijinkan";
        }
        if (isset($err)){
            $content="views/workout/tambah.php";
            include_once 'views/template.php';
        break;
        }
        break;
    case 'edit':
        $workout="SELECT* FROM workout WHERE md5(id_workout)='$_GET[id]'";
        $workout=$conn->query($workout);
        $_POST=$workout->fetch_assoc();
        // $_POST['']=$_POST['workout_duration'];
        $_POST['id_workout']=md5($_POST['id_workout']);
        $content="views/workout/tambah.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $workout ="DELETE FROM workout WHERE md5(id_workout)='$_GET[id]'";
        $workout=$conn->query($workout);
        header('Location: '.$con->site_url().'/admin/index.php?mod=workout');
        break;
    default:
        $sql="SELECT* FROM workout";
        $workout=$conn->query($sql);
        $conn->close();
        $content="views/workout/tampil.php";
        include_once 'views/template.php';
}
?>