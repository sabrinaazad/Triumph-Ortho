<section class="section section--faqs" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb ?></div>
            <?php endif; ?> 
        </div>
       
        <?php if (have_rows('faqs')) : ?>
            <div class="faq-wrapper">  
                <?php while (have_rows('faqs')) : the_row(); ?>
                    <div class="faq">
                        <div class="question" style="color: <?php the_sub_field('question_color'); ?>;">
                            <div class="arrow-down"></div>
                            <?php the_sub_field("question") ?>
                        </div>
                        <div class="answer" style="color: <?php the_sub_field('answer_color'); ?>;"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
</section>