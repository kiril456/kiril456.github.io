<header class="cotainer-fluid">
        <div  class="container">
            <div class="row">
                <div class= "col-4">
                    <h1>
                        <a href="<?php echo BASE_URL ?>">Fast Coffe</a>
                    </h1>
                </div>
                <nav class = "col-8">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="menu.php">Menu</a></li>
      
                        <li>
                            <?php if(isset($_SESSION['id'])): ?>

                                <a href="#">
                                    <?php echo $_SESSION['login']; ?>
                                </a>
                                <ul>
                                    <?php if($_SESSION['admin']): ?>

                                    <li><a href="log.php">Account</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Exit</a></li>
                                </ul>
                            <?php else: ?>
                                <a href="log.php">Log in</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div> 
        </div>
    </header>