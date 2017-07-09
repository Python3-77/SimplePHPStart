<?php
/**
 * Created by PhpStorm.
 * User: fimion
 * Date: 7/9/2017
 * Time: 6:07 PM
 */
$page_title = 'Example Page 1';

include('inc/header.php');
?>
<div class="main-container">
    <div class="main wrapper clearfix">

        <article>
            <header>
                <h1>This is the 1st Example Page</h1>
                <p>It still has the same header and footer as the other two pages.</p>
            </header>
            <section>
                <h2>Articles are different</h2>
                <p>As you can see, the articles are different.</p>
            </section>
            <footer>
                <h3>That's all folks</h3>
                <p>This is the end.</p>
            </footer>
        </article>

        <aside>
            <h3>Side Note:</h3>
            <p>This text is for the example page 1.</p>
        </aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php include('inc/footer.php'); ?>

