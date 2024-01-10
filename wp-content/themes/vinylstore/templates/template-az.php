<?php
/**
 * Template Name: A-Z
 */
global $wpdb;
$table_name = $wpdb->prefix. "postmeta";
get_header();
?>
<main class="page flexible" id="main">
    <section class="pageTitle">
        <div class="container">
            <?php if(get_field('page_title')) { ?>
                <h1><?php the_field('page_title'); ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>
        </div>
    </section>
    <section class="azList">
        <div class="container">
            <div class="listing">
                <?php foreach (range('A', 'Z') as $char) { ?>
                    <div>
                        <h3><?php echo $char;?></h3>
                        <ul>
                            <?php
                            $results = "SELECT * FROM $table_name WHERE meta_value LIKE '$char%' and meta_key LIKE 'artist_name' GROUP BY meta_value order by meta_value ASC";
                            $result = $wpdb->get_results($results);
                            //$result = array_unique($result);
                            foreach($result as $row) { ?>
                                <?php  $ttt = urlencode($row->meta_value);?>
                                <li><a href="<?php echo home_url()?>/artist/?artistname=<?php echo $ttt;?>"><?php echo $row->meta_value;?></a></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="baseBlocks">
        <div class="container">
            <div class="blocks">
                <?php while ( have_rows( 'base_blocks','options' ) ) : the_row(); ?>
                    <div>
                        <span class="icon">
                            <?php the_sub_field('icon'); ?>
                        </span>
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                <?php endwhile; ?>
            </div>    
        </div>
    </section>
    <section class="baseImage">
        <span class="image">
            <img src="<?php the_field('base_image','options'); ?>" alt="Metropolis Touring Company" />
        </span>
        <span class="title"><h4>Metropolis Touring Company</h4></span>
    </section>
</main>
<?php get_footer(); ?>