<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/forum.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <title>Forum</title>
</head>
<body>
    <?php 
        session_start();
        include('nav.php'); 
    ?>
    <div class="main_">
        <div class="problem">
            <h2>Problem: </h2>
            <hr>
            <h1>How to Fix Drive Is Not Accessible in Windows 11</h1>
            <br><br>
        </div>
        <div class="comments">
            <!-- <h2>Comments: </h2> -->
            <hr>
            <div class="comments-container">
                <h1>Comments <a href=""></a></h1>

                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <div class="comment-avatar"><img src="https://avatars.githubusercontent.com/u/63579101?v=4" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Monir</a></h6>
                                    <span>20 mins ago</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                        <ul class="comments-list reply-list">
                            <li>
                                <div class="comment-avatar"><img src="https://avatars.githubusercontent.com/u/50224886?v=4" alt=""></div>
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a href="http://creaticode.com/blog">Samir</a></h6>
                                        <span>10  mins ago</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="comment-avatar"><img src="https://avatars.githubusercontent.com/u/63579101?v=4" alt=""></div>
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Monir</a></h6>
                                        <span>10  mins ago</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="comment-main-level">
                            <div class="comment-avatar"><img src="https://avatars.githubusercontent.com/u/68655623?v=4" alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Kabir</a></h6>
                                    <span>10 mins ago</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>