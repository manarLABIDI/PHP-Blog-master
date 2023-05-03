<?php include "assest/head.php"; 
include "assest/header.php"; 
$stmt = $conn->prepare("SELECT * FROM `comment`");
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
 

<div class="float-left" >

    <div class="comments" >
        <h2 class="text-center text-muted py-3">Comments</h2>

                            <?php foreach ($comments as $comment) :?>
                                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 pr-0 text-center">
                                <img src="img/avatar/<?= $comment['comment_avatar'] ?>" class="img img-rounded img-fluid w-50" />
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left" href="#"><strong><?= "User-" . $comment['comment_username'] ?></strong></a>
                                    <span class="float-right px-2 text-muted"><?= date_format(date_create($comment['comment_date']), "d F Y h:i") ?></span>
                                </p>
                                <div class="clearfix"></div>
                                <p class="text-secondary mt-2"><?= $comment['comment_content'] ?></p>
                            </div>
                        </div>
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                            <td>
                                <a class="btn btn-danger" href="assest/delete.php?type=comment&id=<?= $comment['comment_id'] ?> ">
                                    <i class="fa fa-trash " aria-hidden="true"></i>
                                </a>
                            </td>
                    </div>
         </div>
                   <?php
                    endforeach;?>

                
         
