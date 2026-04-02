<?php
include 'db.php';
global $db;
$query = $db->prepare('SELECT p.content, p.created_at, u.id AS user_id, u.name, u.avatar, u.headline, likes.like_count FROM posts p LEFT JOIN users u ON u.id = p.user_id LEFT JOIN (SELECT post_id, COUNT(*) as like_count FROM likes GROUP BY post_id) AS likes ON likes.post_id = p.id ORDER BY p.created_at DESC');
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
include "header.php";
?>
<div class="container mb-5">
    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-md-10 col-lg-8 p-0">
            <div class="row bg-white rounded">
                <div class="col p-0">
                    <form method="post">
                        <div class="form-floating">
                        <textarea class="form-control post" placeholder="Maak een nieuwe post" id="post"
                                  name="post"></textarea>
                            <label for="post">Nieuwe post</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary m-2" name="submit">verzenden</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row my-4">
                <div class="col p-0">
                    <h2>Recent post</h2>
                </div>
            </div>
            <!-- post -->
            <?php foreach ($posts as $post): ?>
                <div class="row mb-3">
                    <div class="col bg-white rounded">
                        <div class="row p-2">
                            <div class="col-1">
                                <a href="profile.php?id=<?= $post['user_id'] ?>"><img src="img/<?= $post['avatar'] ?>" alt="image" class="img-fluid rounded"></a>
                            </div>
                            <div class="col-6">
                                <p class="p-0 m-0"><a href="profile.php?id=<?= $post['user_id'] ?>" class="text-black link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><b><?= $post['name'] ?></b></a></p>
                                <p class="p-0 m-0 text-secondary"><?= $post['headline'] ?></p>
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
            <!-- /post -->
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>
