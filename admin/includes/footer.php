<?php
$page_name = basename($_SERVER['PHP_SELF'], ".php");

// Switch statement to determine which page is loaded
// Include different footer depending on the page
switch ($page_name) {
    case 'index':
        echo '<!-- JavaScript files-->
        <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <!-- Data Tables-->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
        <!-- Init Charts on Homepage-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
        <script src="dist/vendor/chart.js/Chart.min.js"></script>
        <script src="dist/js/charts-defaults.js"></script>
        <script src="dist/js/index-default.js"></script>
        <!-- Main Theme JS File-->
        <script src="dist/js/theme.js"></script>
        <!-- Prism for syntax highlighting-->
        <script src="dist/vendor/prismjs/prism.js"></script>
        <script src="dist/vendor/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
        <script type="text/javascript">
            // Optional
            Prism.plugins.NormalizeWhitespace.setDefaults({
                \'remove-trailing\': true,
                \'remove-indent\': true,
                \'left-trim\': true,
                \'right-trim\': true,
            });
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn\'t block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="dist/vendor/fontawesom/v5.7.1-all.css"> -->
        </body>
        
        </html>';
        break;
    case 'login':
        echo '<!-- JavaScript files-->
        <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="dist/js/forms-validation.js"></script>
        <!-- Main Theme JS File-->
        <script src="dist/js/theme.js"></script>
        <!-- Prism for syntax highlighting-->
        <script src="dist/vendor/prismjs/prism.js"></script>
        <script src="dist/vendor/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
        <script type="text/javascript">
            // Optional
            Prism.plugins.NormalizeWhitespace.setDefaults({
                \'remove-trailing\': true,
                \'remove-indent\': true,
                \'left-trim\': true,
                \'right-trim\': true,
            });
        </script>
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn\'t block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        </body>
        </html>';
        break;
    case 'register':
        echo '<!-- JavaScript files-->
        <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="dist/js/forms-validation.js"></script>
        <!-- Main Theme JS File-->
        <script src="dist/js/theme.js"></script>
        <!-- Prism for syntax highlighting-->
        <script src="dist/vendor/prismjs/prism.js"></script>
        <script src="dist/vendor/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
        <script type="text/javascript">
            // Optional
            Prism.plugins.NormalizeWhitespace.setDefaults({
                "remove-trailing": true,
                "remove-indent": true,
                "left-trim": true,
                "right-trim": true,
            });
        </script>
        <!-- Don\'t submit the form again if it is already submitted-->
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn\'t block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        </body>
        </html>';
        break;
    case 'users-profile':
        echo '<!-- JavaScript files-->
        <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="dist/js/forms-validation.js"></script>
        <!-- Dropzone.JS-->
        <script src="dist/vendor/dropzone/dropzone.js"></script>
        <!-- User Profile JS-->
        <script src="dist/js/user-profile.js"></script>
        <!-- Main Theme JS File-->
        <script src="dist/js/theme.js"></script>
        <!-- Prism for syntax highlighting-->
        <script src="dist/vendor/prismjs/prism.js"></script>
        <script src="dist/vendor/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="dist/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
        <script type="text/javascript">
            // Optional
            Prism.plugins.NormalizeWhitespace.setDefaults({
                \'remove-trailing\': true,
                \'remove-indent\': true,
                \'left-trim\': true,
                \'right-trim\': true,
            });
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn\'t block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        </body>
        
        </html>';
        break;
    case 'page':
        echo '';
        break;
    default:
        echo 'Page 1';
        break;
}
