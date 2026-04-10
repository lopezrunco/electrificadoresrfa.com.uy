<?php
require_once get_template_directory() . '/functions.php';
if (file_exists(COMPANY_DATA_PATH)) {
    $json_data = file_get_contents(COMPANY_DATA_PATH);
    $company_data = json_decode($json_data, true);
}
?>

<section class="company-description bg-light">
    <article class="container fade-in delay-level2">
        <div class="row">
            <div class="d-none d-md-block col-md-5">
                <img
                    width="100%" 
                    class="border-radius hard-shadow" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/rfa-nosotros.png" 
                    alt="Nosotros"
                />
            </div>
            <div class="col-md-7">
                <div class="section-title">
                    <h2>Empresa</h2>
                </div>    
            
                <?php if (!empty($company_data['description']) && is_array($company_data['description'])) : ?>
                    <?php foreach($company_data['description'] as $pharagraph) : ?>
                        <p><?php echo esc_html($pharagraph); ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                <h4>¡RFA ELECTRIFICADORES, tu mejor opción!</h4>
            </div>
        </div>
    </article>
</section>