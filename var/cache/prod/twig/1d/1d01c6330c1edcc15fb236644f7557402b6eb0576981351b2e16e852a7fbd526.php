<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__497b8b527a5a560684334e8b66002c1face25519e17a697502221490fe2eb048 */
class __TwigTemplate_70b419b7c685a45390670393621e91fa7470934f62d83343459f74eb290c62be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta-tests/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta-tests/img/app_icon.png\" />

<title>Gestionnaire de modules • Atout-Charme</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'daa1f45af0fca313b1059cb1a2fab6dd';
    var token_admin_orders = tokenAdminOrders = '3fada9326d8df8169093af943b78ef6f';
    var token_admin_customers = '8237e8a99470936704316db9738fbb1a';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '51828e99f4836b7480030617b0c04204';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '6fac93cc891483ee7b66131145a6479d';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14';
    var admin_notification_get_link = '/presta-t";
        // line 42
        echo "ests/admin011bwfh8frhkvy2mszu/index.php/common/notifications?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14';
    var admin_notification_push_link = adminNotificationPushLink = '/presta-tests/admin011bwfh8frhkvy2mszu/index.php/common/notifications/ack?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta-tests\\/admin011bwfh8frhkvy2mszu\\/\";
var baseDir = \"\\/presta-tests\\/\";
var changeFormLanguageUrl = \"\\/";
        // line 71
        echo "presta-tests\\/admin011bwfh8frhkvy2mszu\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"t";
        // line 88
        echo "ext/javascript\" src=\"/presta-tests/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin011bwfh8frhkvy2mszu/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.4.0\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_mbo/views/js/recommended-modules.js?v=4.4.0\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_mbo/views/js/addons-connector.js?v=4.4.0\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/presta-tests\\/admin011bwfh8frhkvy2mszu\\/index.php?controller=AdminGamification&token=fad021eb6c92b72e7519bfcbd9a5a6ed\";
            var current_id_tab = 40;
        </script>

";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php\"  data-token=\"QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminDashboard&amp;token=491f4d9994913f8e335ce8684f39264a\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders?token=4730197db3054b808784200c64758c9b\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3ab2b1739ed1ba3832040414b32658b0\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link active\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?token=4730197db3054b808784200c64758c9b\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=17c02157787";
        // line 136
        echo "b84d736e1b22ddda96396\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/products/new?token=4730197db3054b808784200c64758c9b\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/categories/new?token=4730197db3054b808784200c64758c9b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"19\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminQuickAccesses&token=1b8d7557b6a7945057df4f4dd4fa1ff2\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminQuickAccesses&token=1b8d7557b6a7945057df4f4dd4fa1ff2\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/presta-tests/admin011bwfh8frhkvy2m";
        // line 176
        echo "szu/index.php?controller=AdminSearch&amp;token=8e79f1a588f0c45afd7e16f84860e3a4\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-i";
        // line 193
        echo "tem=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders?token=4730197db3054b808784200c64758c9b\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3ab2b1739ed1ba3832040414b32658b0\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?token=4730197db3054b808784200c64758c9b\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=17c02157787b84d736e1b22ddda96396\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction<";
        // line 228
        echo "/a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/products/new?token=4730197db3054b808784200c64758c9b\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/categories/new?token=4730197db3054b808784200c64758c9b\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"129\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminQuickAccesses&token=1b8d7557b6a7945057df4f4dd4fa1ff2\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Supprimer de l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminQuickAccesses&token=1b8d7557b6a7945057df4f4dd4fa1ff2\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en maintenance.</strong></p><p class=&quot;text-left&quot;>Vos clients et visiteurs ne peuvent y ";
        // line 270
        echo "accéder actuellement. &amp;lt;br /&amp;gt; Vous pouvez gérer les paramètres de maintenance dans l&#039;onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/maintenance/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\"
          >
            <i class=\"material-icons\">build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/presta-tests/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              rol";
        // line 314
        echo "e=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=adba05b64dc8722a2d8836c6ecb74f06\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</di";
        // line 359
        echo "v>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/presta-tests/img/pr/default.jpg\" alt=\"Patrice\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Patrice</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/employees/1/edit?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=traini";
        // line 405
        echo "ng-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminLogin&amp;logout=1&amp;token=590a12fa8d13d03d6db9035dceb2b027\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/employees/toggle-navigation?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\">
    <i class=\"material-ic";
        // line 432
        echo "ons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminDashboard&amp;token=491f4d9994913f8e335ce8684f39264a\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminDashboard&amp;token=491f4d9994913f8e335ce8684f39264a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                ";
        // line 475
        echo "                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders/invoices/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders/credit-slips/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                      ";
        // line 505
        echo "          <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/orders/delivery-slips/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCarts&amp;token=adba05b64dc8722a2d8836c6ecb74f06\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/products?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                 ";
        // line 536
        echo "                           
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/products?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/categories?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/monitoring/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminAttributesGroups&amp;token=014c585e26fa8aa76d04ecb677ec6e50\" class=\"link\"> Attributs et caractéristiques
           ";
        // line 563
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/catalog/brands/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/attachments/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCartRules&amp;token=17c02157787b84d736e1b22ddda96396\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement";
        // line 593
        echo "\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/stocks/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/customers/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/customers/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                         ";
        // line 625
        echo "                                   
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/addresses/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCustomerThreads&amp;token=51828e99f4836b7480030617b0c04204\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCustomerThreads&amp;token=51828e99f4836b7480030617b0c04204\" cla";
        // line 652
        echo "ss=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/sell/customer-service/order-messages/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminReturn&amp;token=18a09bb3144ac96498bd1b26e9e1f373\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/metrics/legacy/stats?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons ";
        // line 684
        echo "sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/metrics/legacy/stats?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/metrics?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                    ";
        // line 720
        echo "      
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/mbo/modules/catalog/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/mbo/modules/catalog/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Gestionnaire de modules 
";
        // line 745
        echo "                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/design/themes/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/design/themes/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=";
        // line 776
        echo "\"145\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/mbo/themes/catalog/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/design/mail_theme/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/design/cms-pages/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/design/modules/positions/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Positions
                                </a>
                              </li>

                           ";
        // line 805
        echo "                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminImages&amp;token=082d6c4701909dda08e4078b710c3881\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/link-widget/list?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCarriers&amp;token=bbcf76708b5963f79a2d3fee3bd85e47\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                        ";
        // line 835
        echo "                                    </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminCarriers&amp;token=bbcf76708b5963f79a2d3fee3bd85e47\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/shipping/preferences/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminMbeShipping&amp;token=0347422e96f5003e08a69e7fd29cfed3\" class=\"link\"> Expéditions MBE
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                           ";
        // line 864
        echo "   
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/payment/payment_methods?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/payment/payment_methods?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/payment/preferences?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Préférences
                                </a>
                ";
        // line 893
        echo "              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/international/localization/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/international/localization/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=";
        // line 924
        echo "\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/international/zones/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/international/taxes/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/international/translations/settings?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"130\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1d7b49c1b5db1c7f2772258447f74958\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                 ";
        // line 953
        echo "     <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1d7b49c1b5db1c7f2772258447f74958\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminPsfacebookModule&amp;token=5883ce46e39b6eb4605d6f92e007b469\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </l";
        // line 987
        echo "i>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/preferences/preferences?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/preferences/preferences?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/order-preferences/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A";
        // line 1016
        echo "14\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/product-preferences/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/customer-preferences/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/contacts/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d";
        // line 1047
        echo "ata-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/shop/seo-urls/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminSearchConf&amp;token=7c5790e01901f2a952c81ca2bdcadd53\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/system-information/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9";
        // line 1076
        echo "2\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/system-information/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/performance/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/administration/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=";
        // line 1105
        echo "\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/emails/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/import/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/employees/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/sql-requests/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
      ";
        // line 1135
        echo "                                                      
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/logs/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/webservice-keys/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/feature-flags/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/presta-t";
        // line 1161
        echo "ests/admin011bwfh8frhkvy2mszu/index.php/configure/advanced/security/?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn addons_connect btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pst";
        // line 1209
        echo "ooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/manage?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
";
        // line 1236
        echo "                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/alerts?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/improve/modules/updates?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ";
        // line 1258
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                               </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Se connecter à la marketplace Addons\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Se connecter à la marketplace Addons
              <i class=\"material-icons\">vpn_key</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdm";
        // line 1285
        echo "inModules%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1306
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/presta-tests/admin011bwfh8frhkvy2mszu/index.php?controller=AdminDashboard&amp;token=491f4d9994913f8e335ce8684f39264a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Se connecter à la marketplace Addons</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Liez votre boutique à votre compte Addons pour recevoir automatiquement les mises à jour importantes des modules que vous avez achetés. Vous n&#039;avez pas encore de compte ?
                      <a href=\"https://accounts.distribution.prestashop.net/fr/sign-up?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Inscrivez-vous maintenant</a>
                  </p>
                  <p>
                      Si vous avez créé votre compte avec Google, veuillez suivre la procédure de mot de passe oublié de Addons Marketp";
        // line 1348
        echo "lace pour créer votre mot de passe : 
                      <a href=\"https://auth.prestashop.com/fr/mot-de-passe/demande-de-reinitialisation\" target=\"_blank\">Réinitialiser votre mot de passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/mbo/addons/login?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Adresse e-mail</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Mot de passe</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Se souvenir de moi
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">C&#039;est parti !</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://auth.prestashop.com/fr/mot-de-passe/demande-de-reinitialisation\" target=\"_blank\">Mot de passe oublié ?</a>
                </p>
              </div>
";
        // line 1380
        echo "          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmer la déconnexion</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Vous êtes sur le point de vous déconnecter de votre compte Addons. Vous pourriez rater d&#039;importantes mises à jour pour les modules que vous avez achetés.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Annuler\">
          <a class=\"btn btn-primary uppercase\" href=\"/presta-tests/admin011bwfh8frhkvy2mszu/index.php/modules/mbo/addons/logout?_token=QSHPvNrtnyta6ZmcjvkCiHMRL_J3xGnuJrWimvX6A14\" id=\"module-modal-addons-logout-ack\">Oui, me déconnecter</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1418
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1306
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1418
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__497b8b527a5a560684334e8b66002c1face25519e17a697502221490fe2eb048";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1601 => 1418,  1580 => 1306,  1569 => 102,  1560 => 1418,  1520 => 1380,  1486 => 1348,  1438 => 1306,  1415 => 1285,  1386 => 1258,  1362 => 1236,  1333 => 1209,  1283 => 1161,  1255 => 1135,  1223 => 1105,  1192 => 1076,  1161 => 1047,  1128 => 1016,  1097 => 987,  1061 => 953,  1030 => 924,  997 => 893,  966 => 864,  935 => 835,  903 => 805,  872 => 776,  839 => 745,  812 => 720,  774 => 684,  740 => 652,  711 => 625,  677 => 593,  645 => 563,  616 => 536,  583 => 505,  551 => 475,  506 => 432,  477 => 405,  429 => 359,  382 => 314,  336 => 270,  292 => 228,  255 => 193,  236 => 176,  194 => 136,  155 => 102,  139 => 88,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__497b8b527a5a560684334e8b66002c1face25519e17a697502221490fe2eb048", "");
    }
}
