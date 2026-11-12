
<!-- ==========================
     Shared Site Header
     File: header.php
     Description: Logo and navigation
========================== -->

<?php
    // Determine which page is currently being viewed.
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

<header class="testheader">

    <!-- Portfolio Logo -->

    <img src="images/logo.png"
         alt="Coleman Mallicoat Portfolio Logo"
         class="site-logo">

    <!-- Mobile Navigation Toggle -->

    <input type="checkbox"
           id="menu-toggle"
           class="menu-toggle">

    <label for="menu-toggle"
           class="hamburger">

        <span class="visually-hidden">
            Toggle navigation menu
        </span>

        &#9776;

    </label>

    <!-- Main Navigation Menu -->

    <nav aria-label="Main navigation">

        <ul>

            <li>
                <a href="index.php"
                   <?php if ($currentPage === 'index.php') echo 'aria-current="page"'; ?>>
                    Home
                </a>
            </li>

            <li>
                <a href="about.php"
                   <?php if ($currentPage === 'about.php') echo 'aria-current="page"'; ?>>
                    About Me
                </a>
            </li>

            <!-- Projects Dropdown Menu -->

            <li class="dropdown">

                <a href="projects.php"
                   <?php if ($currentPage === 'projects.php') echo 'aria-current="page"'; ?>>
                    Projects &#9662;
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a href="projects.php">
                            All Projects
                        </a>
                    </li>

                    <li>
                        <a href="projects.php#web-development">
                            Web Development
                        </a>
                    </li>

                    <li>
                        <a href="projects.php#instructional-design">
                            Instructional Design
                        </a>
                    </li>

                    <li>
                        <a href="projects.php#it-leadership">
                            IT Leadership
                        </a>
                    </li>

                </ul>

            </li>

            <li>
                <a href="reflection.php"
                   <?php if ($currentPage === 'reflection.php') echo 'aria-current="page"'; ?>>
                    Reflection
                </a>
            </li>

            <li>
                <a href="contact.php"
                   <?php if ($currentPage === 'contact.php') echo 'aria-current="page"'; ?>>
                    Contact
                </a>
            </li>

        </ul>

    </nav>

</header>
