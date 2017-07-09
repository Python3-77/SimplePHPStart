<?php
/**
 * Created by PhpStorm.
 * User: fimion
 * Date: 7/9/2017
 * Time: 5:51 PM
 */
$page_title = 'Home Page';

include('inc/header.php');
?>
<div class="main-container">
    <div class="main wrapper clearfix">

        <article>
            <header>
                <h1>Welcome to the home page!</h1>
                <p>You are at <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            </header>
            <section>
                <h2>This file includes a headr and a footer.</h2>
                <p>The content of these will stay the same regardless of page. only the title changes.</p>
            </section>
            <footer>
                <h3>The Title of the Page</h3>
                <p>it gets set before the header include.</p>
            </footer>
        </article>

        <aside>
            <h3>Side Note:</h3>
            <p>This text is for the home page.</p>
        </aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php include('inc/footer.php'); ?>
