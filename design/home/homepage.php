<?php

if (!isset($_COOKIE['user_id'])) {
    header("location: ../login/login.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facebook Home Page</title>
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook Logo">
        </div>
        <div class="search">
            <input type="text" placeholder="Search Facebook">
            <button>Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="profile/profile.php">Profile</a></li>
                <li><a href="friends/friends.php">Friends</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="left-column">
            <h2>News Feed</h2>
            <div class="post">
                <div class="post-header">
                    <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="User Avatar">
                    <div class="post-info">
                        <h3>John Doe</h3>
                        <p>Posted 2 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed odio vel arcu hendrerit ultrices. Donec cursus convallis mauris, eu ultrices nisi ultricies ac.</p>
                </div>
                <div class="post-footer">
                    <button>Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>