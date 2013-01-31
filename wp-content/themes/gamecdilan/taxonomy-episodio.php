<?php get_header(); ?>
            <section id="lista-atividades">
                <div class="container">

                    <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy')); ?>
                
                    <div class="row">
                        <div class="span12">
                            <div id="episodio">                                
                                <h1><?php echo $term->name; ?></h1>
                                <p class="lead"><?php echo $term->description; ?></p>
                                <div class="well well-small"><strong><?php echo $term->count; ?></strong> atividade(s) no total</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12">
                            <ul class="thumbnails">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                    <?php $status_atividade = get_user_meta(get_current_user_id(),$post->ID, true); ?>
                                    <?php if($status_atividade=="visited") {$bgcor="#E6FFCC";} elseif ($status_atividade=="completed") {$bgcor="#FFDBB8";} else {$bgcor="transparent";} ?>
                                        <li class="span6 ">
                                            <div class="thumbnail" style="background:<?php echo $bgcor; ?>">
                                                <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?>
                                                
                                                <h2><?php the_title(); ?></h2>
                                                <div><?php echo substr(get_the_excerpt(), 0, 180); ?>...</div>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Fazer atividade</a>
                                                <?php 
                                                //icon-check icon-eye-open
                                                //PEGADA - Sistema para salvar o rastro, regasta informação no banco de dados se usuário já visitou página 
                                                if($status_atividade=="visited") {
                                                    echo '<a class="btn pull-right" href="#"><i class="icon-eye-open"></i> visitada</a>';
                                                } elseif($status_atividade=="completed") {
                                                    echo '<a class="btn pull-right" href="#"><i class="icon-check"></i> completada</a>';
                                                }

                                                ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

<?php get_footer(); ?>