<?php
$page = basename($_SERVER['PHP_SELF'], ".php");
?>

<?php
$index_active = '';
$index_show = '';
$index_true = '';
$users_profile_active = '';
$users_profile_show = '';
$users_profile_true = '';

switch ($page) {
    case 'index':
        $index_active = 'active';
        $index_show = 'show';
        $index_true = 'true';
        break;
    case 'users-profile':
        $users_profile_active = 'active';
        $users_profile_show = 'show';
        $users_profile_true = 'true';
        break;
    default:
        $index_active = 'active';
        $index_show = 'show';
        $index_true = 'true';
        break;
}


?>
<?php echo '
<div class="sidebar py-3" id="sidebar">
    <h6 class="sidebar-heading">Main</h6>
    <ul class="list-unstyled">
        <li class="sidebar-list-item"><a class="sidebar-link text-muted ' . $index_active . '" href="#" data-bs-target="#dashboardsDropdown" role="button" aria-expanded="' . $index_true . '" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#real-estate-1"> </use>
                </svg><span class="sidebar-link-title">Dashboards </span></a>
            <ul class="sidebar-menu list-unstyled collapse ' . $index_show . '" id="dashboardsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link ' . $index_active . ' text-muted" href="index.php">Default</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="index-cms.html">CMS</a>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="index-e-commerce.html">E-commerce</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="index-projects.html">Projects</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="index-charts.html">Charts</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cmsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#reading-1"> </use>
                </svg><span class="sidebar-link-title">CMS </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="cmsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-post.html">Posts</a>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-post-new.html">Add
                        new post</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-category.html">Categories</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-media.html">Media
                        library</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#widgetsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#statistic-1"> </use>
                </svg><span class="sidebar-link-title">Widgets </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="widgetsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="widgets-stats.html">Stats</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="widgets-data.html">Data</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#e-commerceDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#delivery-truck-1"> </use>
                </svg><span class="sidebar-link-title">E-commerce </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="e-commerceDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-products.html">Products</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-product-new.html">Products - New</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-orders.html">Orders</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-order.html">Order - Detail</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-customers.html">Customers</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#pagesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#paper-stack-1"> </use>
                </svg><span class="sidebar-link-title">Pages </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="pagesDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-profile.html">Profile</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-pricing.html">Pricing table</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-contacts.html">Contacts</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-invoice.html">Invoice</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-knowledge-base.html">Knowledge base</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-knowledge-base-topic.html">Knowledge base - Topic</a></li>
            </ul>
        </li>
        <!-- Users -->
        <li class="sidebar-list-item"><a class="sidebar-link text-muted ' . $users_profile_active . '" href="#" data-bs-target="#userDropdown" role="button" aria-expanded="' . $users_profile_true . '" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#man-1"> </use>
                </svg><span class="sidebar-link-title">Users</span></a>
            <ul class="sidebar-menu list-unstyled collapse ' . $users_profile_show . '" id="userDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="login.html">All Users</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="login.html">Add New</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted ' . $users_profile_active . '" href="users-profile.php">Profile</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#componentsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#sorting-1"> </use>
                </svg><span class="sidebar-link-title">Components </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="componentsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-cards.html">Cards</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-calendar.html">Calendar</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-gallery.html">Gallery</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-loading-buttons.html">Loading buttons</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-map.html">Maps</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-notifications.html">Notifications</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-preloader.html">Preloaders</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#chartsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#pie-chart-1"> </use>
                </svg><span class="sidebar-link-title">Charts </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="chartsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="charts.html">Charts</a>
            </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#formsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#file-storage-1"> </use>
                </svg><span class="sidebar-link-title">Forms </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="formsDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms.html">Basic
                        forms</a></li>
                        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-advanced.html">Advanced forms</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-dropzone.html">Files upload</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-texteditor.html">Text editor</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-validation.html">Validation</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#tablesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#grid-1"> </use>
                </svg><span class="sidebar-link-title">Tables </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="tablesDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="tables.html">Bootstrap
                    tables</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="tables-datatable.html">Datatable</a></li>
            </ul>
        </li>
    </ul>
    <h6 class="sidebar-heading">Docs</h6>
    <ul class="list-unstyled">
        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/introduction.html">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#angle-brackets-1"> </use>
                </svg><span class="sidebar-link-title">Introduction</span></a></li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/directory-structure.html">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#table-content-1"> </use>
                </svg><span class="sidebar-link-title">Directory structure</span></a></li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/gulp.html">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#keyboard-1"> </use>
                </svg><span class="sidebar-link-title">Gulp.js</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cssDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg><span class="sidebar-link-title">CSS </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="cssDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/components-theme.html">CSS Components</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/customizing-css.html">Customizing CSS</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/credits.html">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#star-medal-1"> </use>
                </svg><span class="sidebar-link-title">Credits</span></a></li>
        <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/changelog.html">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#new-1"> </use>
                </svg><span class="sidebar-link-title">Changelog</span></a></li>
    </ul>
</div>
'; ?>