<?php $id = get_the_ID(); ?>

<?php if( have_rows('flexible_sections', $id) ): ?>

    <?php while( have_rows('flexible_sections', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php if (have_rows('flexible_sections')) : ?>
                <?php while (have_rows('flexible_sections')) : the_row(); ?>

                    <?php if (get_row_layout() == 'faqs_section') : ?>
                        <section class="faqs-section">
                            <div class="container">
                                <?php if ($title = get_sub_field('title')) : ?>
                                    <h2 class="title-section one-line">
                                        <span class="line-text"><?php echo esc_html($title); ?></span>
                                        <span class="line line-2"></span>
                                    </h2>
                                <?php endif; ?>

                                <?php if ($intro_text = get_sub_field('intro_text')) : ?>
                                    <div class="faqs-content">
                                        <?php echo wp_kses_post($intro_text); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('faq_items')) : ?>
                                    <div class="faqs-accordion">
                                        <?php while (have_rows('faq_items')) : the_row(); ?>
                                            <div class="faqs-item">
                                                <?php if ($question = get_sub_field('question')) : ?>
                                                    <div class="faqs-item-title">
                                                        <?php echo esc_html($question); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($answer = get_sub_field('answer')) : ?>
                                                    <div class="faqs-item-content" style="display: none;">
                                                        <?php echo wp_kses_post($answer); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($outro_text = get_sub_field('outro_text')) : ?>
                                    <div class="faqs-content">
                                        <?php echo wp_kses_post($outro_text); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php elseif (get_row_layout() == 'algorithm_section') : ?>
                        <section class="algorithm-section">
                            <div class="container">
                                <?php if ($title = get_sub_field('title')) : ?>
                                    <h2 class="title-section">
                                        <span class="line line-1"></span>
                                        <span class="line-text"><?php echo wp_kses_post($title); ?></span>
                                        <span class="line line-2"></span>
                                    </h2>
                                <?php endif; ?>

                                <div class="algorithm-wrap">
                                    <?php if ($intro_text = get_sub_field('intro_text')) : ?>
                                        <div class="algorithm-info">
                                            <?php echo wp_kses_post($intro_text); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (have_rows('algorithm_steps')) : ?>
                                        <div class="algorithm-content">
                                            <?php while (have_rows('algorithm_steps')) : the_row(); ?>
                                                <?php
                                                $step_number = get_sub_field('step_number');
                                                $step_title = get_sub_field('step_title');
                                                $step_content = get_sub_field('step_content');
                                                $step_note = get_sub_field('step_note');
                                                $is_last = ($step_number === '*');
                                                ?>
                                                <div class="algorithm-item <?php echo $is_last ? 'algorithm-item-last' : ''; ?>">
                                                    <?php if ($step_number) : ?>
                                                        <div class="algorithm-item-number"><?php echo esc_html($step_number); ?></div>
                                                    <?php endif; ?>

                                                    <div class="algorithm-item-content">
                                                        <?php if ($step_title) : ?>
                                                            <div class="algorithm-item-title"><?php echo esc_html($step_title); ?></div>
                                                        <?php endif; ?>

                                                        <?php if ($step_content) : ?>
                                                            <?php echo wp_kses_post($step_content); ?>
                                                        <?php endif; ?>

                                                        <?php if (have_rows('step_list')) : ?>
                                                            <ul>
                                                                <?php while (have_rows('step_list')) : the_row(); ?>
                                                                    <?php if ($list_item = get_sub_field('list_item')) : ?>
                                                                        <li><?php echo wp_kses_post($list_item); ?></li>
                                                                    <?php endif; ?>
                                                                <?php endwhile; ?>
                                                            </ul>
                                                        <?php endif; ?>

                                                        <?php if ($step_note) : ?>
                                                            <p class="note"><?php echo esc_html($step_note); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; endif; ?>

<?php get_footer(); ?>