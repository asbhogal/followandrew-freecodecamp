<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
            <span class="date"><?php the_date();?>
            <?php
                the_tags(                                           // EACH TAG IS WRAPPED BY A span TAG
                    '<span class="tag"><i class="fa fa-tag"></i>', 
                    '</span><span class="tag"><i class="fa fa-tag"></i>', 
                    '</span>'
                );
            ?>

            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span></div>
    </header>

    <?php
        the_content()              //WRAPPING IN DIV MEANS CONTENT INHERITS CONTAINER ATTRIBUTES
    ?>

    <?php
        comments_template()     // N.B. LOGIC CAN BE USED TO DECLARE WHEN AND WHERE COMMENTS SHOULD APPEAR BASED ON CONTENT TYPE E.G. PLOG, PAGE ETC.
    ?>
</div>