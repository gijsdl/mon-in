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

$postQuery = $db->prepare('SELECT p.content, p.created_at, likes.like_count FROM posts p LEFT JOIN (SELECT post_id, COUNT(*) as like_count FROM likes GROUP BY post_id) AS likes ON likes.post_id = p.id WHERE p.user_id = :id ORDER BY p.created_at DESC');
$postQuery->bindParam('id', $id);
$postQuery->execute();
$posts = $postQuery->fetchAll(PDO::FETCH_ASSOC);

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
                            <?php foreach ($posts as $post): ?>
                                <div class="row mb-3">
                                    <div class="col bg-white rounded">
                                        <div class="row p-2">
                                            <div class="col-1">
                                                <a href="profile.php?id=<?= $user['id'] ?>"><img src="img/<?= $user['avatar'] ?>" alt="image" class="img-fluid rounded"></a>
                                            </div>
                                            <div class="col-6">
                                                <p class="p-0 m-0"><a href="profile.php?id=<?= $user['id'] ?>" class="text-black link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><b><?= $user['name'] ?></b></a></p>
                                                <p class="p-0 m-0 text-secondary"><?= $user['headline'] ?></p>
                                                <p class="fs-6 text-secondary"> <?= $post['created_at'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col p-3">
                                                <?= $post['content'] ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <p><i class="bi bi-hand-thumbs-up"></i><?= $post['like_count'] ?></p>
                                            </div>
                                            <div class="col-2"><i class="bi bi-trash"></i> delete</div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
