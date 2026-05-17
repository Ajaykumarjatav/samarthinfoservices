<?php
/** Industries dropdown — requires paths.php ($industryNavItems, site_url). */
$industriesDropdownActive = false;
foreach ($industryNavItems as $industryNavItem) {
    if (nav_is_active($industryNavItem['path'])) {
        $industriesDropdownActive = true;
        break;
    }
}
?>
<li class="nav-item dropdown app-header-industries-dropdown app-header-nav-dropdown">
    <a class="nav-link dropdown-toggle<?= $industriesDropdownActive ? ' active' : '' ?>"
       href="#"
       id="navbarIndustriesDropdown"
       role="button"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">Industries</a>
    <ul class="dropdown-menu" aria-labelledby="navbarIndustriesDropdown">
        <?php foreach ($industryNavItems as $industryNavItem) : ?>
            <li>
                <a class="dropdown-item<?= nav_is_active($industryNavItem['path']) ? ' active' : '' ?>"
                   href="<?= htmlspecialchars(site_url($industryNavItem['path']), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($industryNavItem['label'], ENT_QUOTES, 'UTF-8') ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</li>
