<?php
/** Services dropdown — requires paths.php ($serviceNavItems, site_url). */
$servicesDropdownActive = false;
foreach ($serviceNavItems as $serviceNavItem) {
    if (nav_is_active($serviceNavItem['path'])) {
        $servicesDropdownActive = true;
        break;
    }
}
?>
<li class="nav-item dropdown app-header-services-dropdown app-header-nav-dropdown">
    <a class="nav-link dropdown-toggle<?= $servicesDropdownActive ? ' active' : '' ?>"
       href="#"
       id="navbarServicesDropdown"
       role="button"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">Services</a>
    <ul class="dropdown-menu" aria-labelledby="navbarServicesDropdown">
        <?php foreach ($serviceNavItems as $serviceNavItem) : ?>
            <li>
                <a class="dropdown-item<?= nav_is_active($serviceNavItem['path']) ? ' active' : '' ?>"
                   href="<?= htmlspecialchars(site_url($serviceNavItem['path']), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($serviceNavItem['label'], ENT_QUOTES, 'UTF-8') ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</li>
