<html>
<head>
    <title>Blog with Platzi</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >
            <h2>Posts</h2>
            <p>
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">New Post</a>
            </p>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($blogPosts as $blogPost) {
                    echo '<tr>';
                    echo '<td>' . $blogPost['title'] . '</td>';
                    echo '<td>Edit</td>';
                    echo '<td>Delete</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer>
                This is a footer<br>
                <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
            </footer>
        </div>
    </div>
</div>
</body>
</html>