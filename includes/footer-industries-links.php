<?php
/** Footer Industries links — requires paths.php ($footerIndustryNavItems, site_url). */
$footerIndustries = $footerIndustryNavItems ?? $industryNavItems;
foreach ($footerIndustries as $industryNavItem) : ?>
                <a href="<?= htmlspecialchars(site_url($industryNavItem['path']), ENT_QUOTES, 'UTF-8') ?>" class="footer-links"><?= htmlspecialchars($industryNavItem['label'], ENT_QUOTES, 'UTF-8') ?></a>
<?php endforeach; ?>
