<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="imagengo1.png" alt="logo" >
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="imagengo1.png" alt="logo" width="50px" height="50px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href=" index.php#about_area" class="nav-link">
                                    About
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href=" index.php#trending_causes" class="nav-link">
                                    Causes
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href=" index.php#partner_area" class="nav-link">
                                    User Login
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                    <a href=" index.php#partner_area" class="nav-link">
                                        Gallery
                                    </a>
                                </li> -->
                            <li class="nav-item">
                                <a href=" index.php#footer_area" class="nav-link">Contact</a>
                            </li>
                            <?php if(!empty($_SESSION['user_name'])) : ?>
                                <li class="nav-item">
                                    <a href="my-account.php" class="nav-link" >
                                        <i class="fas fa-sign-in-alt fa-xl"></i>
                                        <span class="mt-2">
                                            My Account
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link" >
                                        <i class="fas fa-sign-in-alt fa-xl"></i>
                                        <span class="mt-2">
                                            logout
                                        </span>
                                    </a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a href="registration.php#register" class="nav-link" >
                                        <i class="fas fa-sign-in-alt fa-xl"></i>
                                        <span class="mt-2">
                                            Sign Up
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php#login" class="nav-link">
                                        Login
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.php#login" class="nav-link">Subscriber Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="employee/index.php" class="nav-link">Employee Login</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                            <input type="text" placeholder="Search NGOs">
                            </li>
                            <button type="button" class="btn btn-success">Search</button>
                            <!-- <?php endif; ?>
                            <li class="nav-item">
                                <form method="POST" action="">
                                    <select class="lang" onchange="this.form.submit()" name="lang">
                                        <option value="1" <?php if ($_SESSION["lang"] == 1) {
                                                                echo "selected";
                                                            } ?>>En</option>
                                        <option value="2" <?php if ($_SESSION["lang"] == 2) {
                                                                echo "selected";
                                                            } ?>>हि</option>
                                    </select>
                                </form>
                            </li> -->
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <form method="POST" action="">
                            <select class="lang" onchange="this.form.submit()" name="lang">
                                <option value="1" <?php if ($_SESSION["lang"] == 1) {
                                                        echo "selected";
                                                    } ?>>En</option>
                                <option value="2" <?php if ($_SESSION["lang"] == 2) {
                                                        echo "selected";
                                                    } ?>>हि</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</header>