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

/* __string_template__f029a8f2537cc2feef30016f425bef0e668c585b51ed9be38f8040406234f3ed */
class __TwigTemplate_bdd86e29dc32b4c6229faae92dc3c37b2d1f2d9417fc55565fcf18a0fa0810f2 extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta/img/app_icon.png\" />

<title>Produits • vertivert</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
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
    var token = '78841785825e70d11f8581a05d86c31f';
    var token_admin_orders = tokenAdminOrders = '4a7c559014fcd455a690349069469817';
    var token_admin_customers = 'b6d8e5f05935246a5d7c998b58b78532';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '87023b04450a873f3a51121bb5da90dc';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '15c639a804e2f5d1057db0e068c862e5';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/presta/admin524p678jkkufbfctsng/index.php/improve/modules/manage?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg';
    var admin_notification_get_link = '/presta/admin524p678jkkufbfctsng/index.php/common/notif";
        // line 42
        echo "ications?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg';
    var admin_notification_push_link = adminNotificationPushLink = '/presta/admin524p678jkkufbfctsng/index.php/common/notifications/ack?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/presta/admin524p678jkkufbfctsng/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/presta/admin524p678jkkufbfctsng/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/admin524p678jkkufbfctsng/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta\\/admin524p678jkkufbfctsng\\/\";
var baseDir = \"\\/presta\\/\";
var changeFormLanguageUrl = \"\\/presta\\/admin524p678jkkufbfctsng\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currenc";
        // line 72
        echo "y_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta/admin524p678jkkufbfctsng/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta/admin524p678jkkufbfctsng/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/admin524p678jkkufbfctsng/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script typ";
        // line 90
        echo "e=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_mbo/views/js/recommended-modules.js?v=4.4.0\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/presta\\/admin524p678jkkufbfctsng\\/index.php?controller=AdminGamification&token=1b175f7bc4454975b6f285077ef8b82f\";
            var current_id_tab = 10;
        </script>

";
        // line 98
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/presta/admin524p678jkkufbfctsng/index.php\"  data-token=\"WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminDashboard&amp;token=af3731ef4468c4f374ac3677bdbc9d74\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/orders?token=64c55c8b309e6806b9fe9186f1a54143\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9dbdb38417712e81d6fc84507f60b902\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/improve/modules/manage?token=64c55c8b309e6806b9fe9186f1a54143\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4cda6fc6877c74f5a1f80c74257db85f\"
                 data-ite";
        // line 133
        echo "m=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/products/new?token=64c55c8b309e6806b9fe9186f1a54143\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/categories/new?token=64c55c8b309e6806b9fe9186f1a54143\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"196\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-ayr-Yrg\"
        data-post-link=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminQuickAccesses&token=bee15e74e5da467e08e810fcae787602\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminQuickAccesses&token=bee15e74e5da467e08e810fcae787602\">
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
      action=\"/presta/admin524p678jkkufbfctsng/index.php?controller=AdminSearch&amp;token=1b946713030a111d845119d3429269a3\"
      role=\"search\">
";
        // line 173
        echo "  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
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
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i c";
        // line 188
        echo "lass=\"material-icons\">shopping_cart</i> Paniers</a>
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
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/orders?token=64c55c8b309e6806b9fe9186f1a54143\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9dbdb38417712e81d6fc84507f60b902\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/improve/modules/manage?token=64c55c8b309e6806b9fe9186f1a54143\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4cda6fc6877c74f5a1f80c74257db85f\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/catalo";
        // line 225
        echo "g/products/new?token=64c55c8b309e6806b9fe9186f1a54143\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/categories/new?token=64c55c8b309e6806b9fe9186f1a54143\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"22\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products?-ayr-Yrg\"
      data-post-link=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminQuickAccesses&token=bee15e74e5da467e08e810fcae787602\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminQuickAccesses&token=bee15e74e5da467e08e810fcae787602\">
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
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en maintenance.</strong></p><p class=&quot;text-left&quot;>Vos clients et visiteurs ne peuvent y accéder actuellement. &amp;lt;br /&amp;gt; Vous pouvez gérer les paramètres de maintenance dans l&#039;onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/prest";
        // line 264
        echo "a/admin524p678jkkufbfctsng/index.php/configure/shop/maintenance/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"
          >
            <i class=\"material-icons\">build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/presta/\" target= \"_blank\">
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
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
      ";
        // line 315
        echo "        class=\"nav-link \"
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
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=a6a8770fb72685f2a21b5c0504680371\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
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
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <stro";
        // line 359
        echo "ng class=\"float-sm-right\">_total_paid_</strong>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/presta/img/pr/default.jpg\" alt=\"Patrice\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Patrice</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/employees/1/edit?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.pres";
        // line 402
        echo "tashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminLogin&amp;logout=1&amp;token=4aa4118fa00e17759724191e515e4000\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/employees/toggle-navigation?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminDashboard&amp;token=af3731ef4468c4f374ac3677bdbc9d74\"></a>
          <";
        // line 433
        echo "span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminDashboard&amp;token=af3731ef4468c4f374ac3677bdbc9d74\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/orders/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
 ";
        // line 475
        echo "                               <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/orders/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/orders/invoices/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/orders/credit-slips/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/orders/delivery-slips/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                 ";
        // line 505
        echo "                           
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCarts&amp;token=a6a8770fb72685f2a21b5c0504680371\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/products?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/products?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Produits
                            ";
        // line 533
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/categories?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/monitoring/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminAttributesGroups&amp;token=791aa279045e610ca6f2674b7ba94774\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
         ";
        // line 564
        echo "                       <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/brands/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/attachments/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCartRules&amp;token=4cda6fc6877c74f5a1f80c74257db85f\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/stocks/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
 ";
        // line 594
        echo "                                             
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/customers/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
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
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/customers/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/addresses/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Adresses
                                </a>
                              </li>

        ";
        // line 625
        echo "                                                                                                                            </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCustomerThreads&amp;token=87023b04450a873f3a51121bb5da90dc\" class=\"link\">
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
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCustomerThreads&amp;token=87023b04450a873f3a51121bb5da90dc\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/pr";
        // line 654
        echo "esta/admin524p678jkkufbfctsng/index.php/sell/customer-service/order-messages/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminReturn&amp;token=bedb7d6a6476ddfc43a9fbb32c056e15\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/metrics/legacy/stats?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                           ";
        // line 685
        echo "                                 
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/metrics/legacy/stats?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/metrics?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/modules/catalog/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                 ";
        // line 721
        echo "   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/modules/catalog/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/modules/manage?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta/admin524";
        // line 749
        echo "p678jkkufbfctsng/index.php/improve/design/themes/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
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
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/design/themes/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/themes/catalog/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=";
        // line 778
        echo "\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/design/mail_theme/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/design/cms-pages/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/design/modules/positions/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminImages&amp;token=1925cc6748e37dfc4eaa185491eed8ff\" class=\"link\"> Images
                                </a>
                              </li>

                                                                            ";
        // line 807
        echo "      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/link-widget/list?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCarriers&amp;token=81f52abcc40e545749c00f09c5ef42eb\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminCarriers&amp;token=81f52abcc40e545749c00f09c5ef42e";
        // line 836
        echo "b\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/shipping/preferences/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminMbeShipping&amp;token=cdbe025bbb40ac34c7451aab4dd1cc2d\" class=\"link\"> Expéditions MBE
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/payment/payment_methods?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-a";
        // line 868
        echo "rrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/payment/payment_methods?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/payment/preferences?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/international/localization/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language<";
        // line 897
        echo "/i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/international/localization/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/international/zones/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/international/taxes/?_token=WnD9t6RzcYGZSd2QGju";
        // line 926
        echo "PMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/improve/international/translations/settings?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"130\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=d1f9c163bc0555d9c9327553b4b1733f\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" dat";
        // line 958
        echo "a-submenu=\"131\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=d1f9c163bc0555d9c9327553b4b1733f\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminPsfacebookModule&amp;token=aa50cce6719c9e2fdb0bf250865a2891\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/preferences/preferences?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
      ";
        // line 994
        echo "                                                              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/preferences/preferences?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/order-preferences/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/product-preferences/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Produits
                                </a>
                              </li>

                                                       ";
        // line 1022
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/customer-preferences/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/contacts/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/shop/seo-urls/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminSearchConf&amp;";
        // line 1050
        echo "token=ed988160342560adb30086e5dfa21ff6\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/system-information/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/system-information/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
     ";
        // line 1082
        echo "                         <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/performance/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/administration/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/emails/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/import/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Importer
                                </a>
                              </li>

        ";
        // line 1111
        echo "                                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/employees/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/sql-requests/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/logs/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/adva";
        // line 1139
        echo "nced/webservice-keys/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/feature-flags/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/presta/admin524p678jkkufbfctsng/index.php/configure/advanced/security/?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" class=\"link\"> Sécurité
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
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/produ";
        // line 1179
        echo "cts?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" aria-current=\"page\">Produits</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produits          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/products/new?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"                  title=\"Créer un nouveau produit : CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nouveau produit
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta/admin524p678jkkufbfctsng/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
            ";
        // line 1228
        echo "                  <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/presta/admin524p678jkkufbfctsng/index.php/sell/catalog/products/new?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"              title=\"Créer un nouveau produit : CTRL+P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Nouveau produit
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/presta/admin524p678jkkufbfctsng/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Optimiser le catalogue de produits',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/modules/recommended/?tabClassName=AdminProducts&recommendation_format=modal&_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1274
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
  <a href=\"http://localhost/presta/admin524p678jkkufbfctsng/index.php?controller=AdminDashboard&amp;token=af3731ef4468c4f374ac3677bdbc9d74\" class=\"btn btn-primary py-1 mt-3\">
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
                      Si vous avez créé votre compte avec Google, veuillez suivre la procédure de mot de passe oublié de Addons Marketplace p";
        // line 1316
        echo "our créer votre mot de passe : 
                      <a href=\"https://auth.prestashop.com/fr/mot-de-passe/demande-de-reinitialisation\" target=\"_blank\">Réinitialiser votre mot de passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/addons/login?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\"
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
          </";
        // line 1348
        echo "div>
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
          <a class=\"btn btn-primary uppercase\" href=\"/presta/admin524p678jkkufbfctsng/index.php/modules/mbo/addons/logout?_token=WnD9t6RzcYGZSd2QGjuPMHMWuYD6j8IvTlW-ayr-Yrg\" id=\"module-modal-addons-logout-ack\">Oui, me déconnecter</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1386
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 98
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1274
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

    // line 1386
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
        return "__string_template__f029a8f2537cc2feef30016f425bef0e668c585b51ed9be38f8040406234f3ed";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1563 => 1386,  1542 => 1274,  1531 => 98,  1522 => 1386,  1482 => 1348,  1448 => 1316,  1400 => 1274,  1352 => 1228,  1301 => 1179,  1259 => 1139,  1229 => 1111,  1198 => 1082,  1164 => 1050,  1134 => 1022,  1104 => 994,  1066 => 958,  1032 => 926,  1001 => 897,  970 => 868,  936 => 836,  905 => 807,  874 => 778,  843 => 749,  813 => 721,  775 => 685,  742 => 654,  711 => 625,  678 => 594,  646 => 564,  613 => 533,  583 => 505,  551 => 475,  507 => 433,  474 => 402,  429 => 359,  383 => 315,  330 => 264,  289 => 225,  250 => 188,  233 => 173,  191 => 133,  151 => 98,  141 => 90,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f029a8f2537cc2feef30016f425bef0e668c585b51ed9be38f8040406234f3ed", "");
    }
}
