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

$skills = explode(', ', $user['skills']);
$interests = explode(', ', $user['interests']);
include "header.php";
?>
<div class="container-lg mb-5">
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
                    <p><?= $user['headline']?></p>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <a href="edit-profile.php?id=<?= $id ?>"><button class="btn btn-outline-primary">Edit profile</button> </a>
                </div>
            </div>
            <div class="row">
                <div class="col bg-light">
                    <p class="fs-5">About</p>
                    <p><?= $user['about'] ?></p>
                </div>
            </div>
            <div class="row mt-2 bg-light rounded">
                <div class="col p-2 pb-3">
                    <h5 class="mb-3"><i class="bi bi-tools fs-6"></i> Skills</h5>
                    <?php foreach ($skills as $skill): ?>
                        <div class="badge bg-primary p-2 rounded"><?= $skill ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row mt-2 bg-light rounded">
                <div class="col p-2 pb-3">
                    <h5 class="mb-3"><i class="bi bi-heart fs-6"></i> Interests</h5>
                    <?php foreach ($interests as $interest): ?>
                        <div class="badge bg-secondary p-2 rounded"><?= $interest ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row mt-2 bg-light rounded">
                <div class="col">
                    <div class="row">
                        <div class="col p-2">
                            <h5 class="mb3"><i class="bi bi-file-earmark-post"></i> Post</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
