<?php
require_once get_template_directory() . '/functions.php';
if (file_exists(COMPANY_DATA_PATH)) {
    $json_data = file_get_contents(COMPANY_DATA_PATH);
    $company_data = json_decode($json_data, true);
}
?>

<img
    width="25%" 
    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" 
    alt="Acerca de RFA"
/>
<?php if (!empty($company_data['description']) && is_array($company_data['description'])) : ?>
    <p class="mb-0"><?php echo esc_html($company_data['description'][0]); ?></p>
    <a href="<?php echo get_permalink( get_page_by_path('quienes-somos') ); ?>" class="btn btn-primary">
        Saber más <i class="fa-solid fa-chevron-right"></i>
    </a>
<?php endif; ?>