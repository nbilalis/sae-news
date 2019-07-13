<?php
require_once("includes/conn-start.php");

$sql = "SELECT p.id, p.title, p.views, p.likes, c.title AS category
        FROM `posts` p
        INNER JOIN `categories` c ON p.category_id = c.id";

if ($result = $conn->query($sql)):
?>
<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">
                    <?php
                    $count = 0;
                    while ($row = $result->fetch_assoc()):
                        $count++;
                    ?>
                    <div class="tab-pane fade <?= ($count === 1) ? "show active" : "" ?>" id="post-<?= $count ?>" role="tabpanel" aria-labelledby="post-<?= $count ?>-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/<?= rand(1, 49) ?>.jpg);">
                            <!-- Play Button -->
                            <a href="video-post.php?id=<?= $row["id"] ?>" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata"><?= $row["category"] ?></a>
                                <a href="single-post.html" class="post-title"><?= $row["title"] ?></a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?= $row["views"] ?></a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?= $row["likes"] ?></a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">
                    <?php
                    $result->data_seek(0);

                    $count = 0;
                    while ($row = $result->fetch_assoc()):
                        $count++;
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($count === 1) ? "active" : "" ?>" id="post-<?= $count ?>-tab" data-toggle="pill" href="#post-<?= $count ?>" role="tab" aria-controls="post-1" aria-selected="true">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">Boys 'doing well' after Thai cave rescue</h6>
                                    <div class="post-meta d-flex justify-content-between">
                                        <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                    endwhile;

                    $result->close();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
else:
    die("Query failed: " . $conn->error);
endif;
?>