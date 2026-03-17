<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id){
    die("id niet gevonden");
}
include "db.php";
global $db;

$query = $db->prepare("SELECT * FROM users WHERE id=:id");
$query->bindParam('id', $id);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
include "header.php";
?>
<div class="container-lg">
    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-md-10 col-lg-8 p-0">
            <div class="row">
                <div class="col user-header rounded">
                    <img src="img/<?=$user['avatar'] ?>" alt="avatar" class="user-img">
                </div>
            </div>
            <div class="row bg-light mt-1">
                <div class="col pt-5 p-2 rounded">
                    <h2 class="pt-3"><b><?= $user['name'] ?></b></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
