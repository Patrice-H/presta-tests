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

/* __string_template__f5f964105c526206b70f08cf5d9dde8574fbd05ae2efa529487329dfdeb4c2a6 */
class __TwigTemplate_f61c63c53f7ff4f8b32d16870b51558aaec87a6b39ef5383037b461034de9323 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f5f964105c526206b70f08cf5d9dde8574fbd05ae2efa529487329dfdeb4c2a6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f5f964105c526206b70f08cf5d9dde8574fbd05ae2efa529487329dfdeb4c2a6"));

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

<title>Préférences • atout-charme</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPreferences';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a969f63e623264eda158a1c541ce4d9f';
    var currentIndex = 'index.php?controller=AdminPreferences';
    var employee_token = 'b17b20616899a1aec57481028fe67a2f';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE';
    var admin_notification_get_link = '/presta-tests/admin172ec8o5ouznni116bw/index.php/common/notifications?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE';
    var admin_notification_push_link = adminNotificationPushLink = '/presta-tests/admin172ec8o5ouznni116bw/index.php/common/notifications/ack?_token=zojr0";
        // line 40
        echo "w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta-tests\\/admin172ec8o5ouznni116bw\\/\";
var baseDir = \"\\/presta-tests\\/\";
var changeFormLanguageUrl = \"\\/presta-tests\\/admin172ec8o5ouznni116bw\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u20";
        // line 67
        echo "2f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/presta-tests/admin172ec8o5ouznni116bw/index.php/commo";
        // line 91
        echo "n/notifications?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpreferences developer-mode\"
  data-base-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php\"  data-token=\"zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8580b460134876917da0b5ca94828af\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d";
        // line 135
        echo "cec901e50bf877d8ac7f30315b543c6\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products-v2/create?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories/new?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"173\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences/preferences?-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
        data-post-link=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Param&egrave;tres...\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\">
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
      class=\"bo_search_form dropdown-form js-dropdown-form collapse";
        // line 172
        echo "d\"
      method=\"post\"
      action=\"/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminSearch&amp;token=2352ab435c0042311fe1a0ac1d20d097\"
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"mater";
        // line 190
        echo "ial-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8580b460134876917da0b5ca94828af\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=dcec901e50bf877d8ac7f30315b543c6\"
             data";
        // line 225
        echo "-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products-v2/create?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories/new?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"64\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/preferences/preferences?-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
      data-post-link=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Param&egrave;tres...\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode d";
        // line 266
        echo "ebug.</strong></p><p class=&quot;text-left&quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/performance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
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
              h";
        // line 311
        echo "ref=\"#customers-notifications\"
              role=\"tab\"
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
              Avez-vous consulté vos <strong><a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=163bc92f4802d63cbd2e64d7157007e3\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
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
  <";
        // line 356
        echo "/div>
</div>

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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/1/edit?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminLo";
        // line 404
        echo "gin&amp;logout=1&amp;token=e776d1e266b49d3cf1af401de7285d70\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/toggle-navigation?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/";
        // line 452
        echo "sell/orders/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
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
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/invoices/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/pr";
        // line 482
        echo "esta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/credit-slips/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/delivery-slips/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarts&amp;token=163bc92f4802d63cbd2e64d7157007e3\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      <";
        // line 513
        echo "/span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/monitoring/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Suivi
                                </a>
                              </li>

         ";
        // line 543
        echo "                                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminAttributesGroups&amp;token=2276f36668417876a7a1bb390dffab49\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/brands/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/attachments/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a h";
        // line 571
        echo "ref=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;token=dcec901e50bf877d8ac7f30315b543c6\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/stocks/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customers/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                    ";
        // line 602
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customers/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/addresses/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCustomerThreads&amp;token=ceedb1d9c7092921a81b2f748ef387dd\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                   ";
        // line 632
        echo "                           <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCustomerThreads&amp;token=ceedb1d9c7092921a81b2f748ef387dd\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customer-service/order-messages/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminReturn&amp;token=fe9e84cc17e63de1d36b4b13645fb80e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  ";
        // line 662
        echo "
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;token=c8580b460134876917da0b5ca94828af\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"su";
        // line 698
        echo "bmenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/themes/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a h";
        // line 728
        echo "ref=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/themes/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/mail_theme/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/cms-pages/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/modules/positions/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                          ";
        // line 757
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminImages&amp;token=7e8887206dc3397f4fe9573ee6621983\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/modules/link-widget/list?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarriers&amp;token=a7b8e93cad904f88552312bfb128427d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                         ";
        // line 787
        echo "   </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarriers&amp;token=a7b8e93cad904f88552312bfb128427d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/shipping/preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/payment_methods?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
           ";
        // line 818
        echo "                                                         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/payment_methods?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/localization/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language";
        // line 846
        echo "</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/localization/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/zones/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/taxes/?_token=";
        // line 875
        echo "zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/translations/settings?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                            ";
        // line 911
        echo "                                </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/order-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/product-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                     ";
        // line 940
        echo "                                       
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/customer-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/contacts/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/seo-urls/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminSearchConf&amp;token=c402808e344f11b4e4e2abd2dc557fb0\" class=\"link\"> Re";
        // line 966
        echo "chercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/system-information/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
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
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/system-information/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-lev";
        // line 998
        echo "eltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/performance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/administration/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/emails/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/import/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Importer
                                </a>
                              </li>

                            ";
        // line 1027
        echo "                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/sql-requests/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/logs/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/";
        // line 1055
        echo "advanced/webservice-keys/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/feature-flags/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/security/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Sécurité
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
                      <li class=\"breadcrumb-item\">Paramètres généraux</li>
          
                  </ol>
      </nav>
    

    <div class=\"";
        // line 1098
        echo "title-row\">
      
          <h1 class=\"title\">
            Préférences          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ";
        // line 1129
        echo "                                                                          <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"73\">
                      Paramètres généraux
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/maintenance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-me";
        // line 1153
        echo "nu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
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
        // line 1181
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
  <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1215
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1181
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1215
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f5f964105c526206b70f08cf5d9dde8574fbd05ae2efa529487329dfdeb4c2a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1468 => 1215,  1399 => 1181,  1364 => 101,  1349 => 1215,  1309 => 1181,  1279 => 1153,  1253 => 1129,  1220 => 1098,  1175 => 1055,  1145 => 1027,  1114 => 998,  1080 => 966,  1052 => 940,  1021 => 911,  983 => 875,  952 => 846,  922 => 818,  889 => 787,  857 => 757,  826 => 728,  794 => 698,  756 => 662,  724 => 632,  692 => 602,  659 => 571,  629 => 543,  597 => 513,  564 => 482,  532 => 452,  482 => 404,  432 => 356,  385 => 311,  338 => 266,  295 => 225,  258 => 190,  238 => 172,  199 => 135,  160 => 101,  148 => 91,  122 => 67,  93 => 40,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta-tests/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta-tests/img/app_icon.png\" />

<title>Préférences • atout-charme</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPreferences\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'8.1.1\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a été passée sur votre boutique.\\';
    var order_number_msg = \\'Numéro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique.\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a été posté sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'a969f63e623264eda158a1c541ce4d9f\\';
    var currentIndex = \\'index.php?controller=AdminPreferences\\';
    var employee_token = \\'b17b20616899a1aec57481028fe67a2f\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\\';
    var admin_notification_get_link = \\'/presta-tests/admin172ec8o5ouznni116bw/index.php/common/notifications?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/presta-tests/admin172ec8o5ouznni116bw/index.php/common/notifications/ack?_token=zojr0' | raw }}{{ 'w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Mise à jour réussie\\';
    var search_product_msg = \\'Rechercher un produit\\';
  </script>



<link
      rel=\"preload\"
      href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-tests/admin172ec8o5ouznni116bw/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/presta-tests\\\\/admin172ec8o5ouznni116bw\\\\/\";
var baseDir = \"\\\\/presta-tests\\\\/\";
var changeFormLanguageUrl = \"\\\\/presta-tests\\\\/admin172ec8o5ouznni116bw\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u20' | raw }}{{ '2f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/admin172ec8o5ouznni116bw/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta-tests/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/presta-tests/admin172ec8o5ouznni116bw/index.php/commo' | raw }}{{ 'n/notifications?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr adminpreferences developer-mode\"
  data-base-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php\"  data-token=\"zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8580b460134876917da0b5ca94828af\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d' | raw }}{{ 'cec901e50bf877d8ac7f30315b543c6\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products-v2/create?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories/new?token=f55a92a667b4330dc9ef702122e041cd\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"173\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences/preferences?-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
        data-post-link=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Param&egrave;tres...\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l\\'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\">
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
      class=\"bo_search_form dropdown-form js-dropdown-form collapse' | raw }}{{ 'd\"
      method=\"post\"
      action=\"/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminSearch&amp;token=2352ab435c0042311fe1a0ac1d20d097\"
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"mater' | raw }}{{ 'ial-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c8580b460134876917da0b5ca94828af\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=dcec901e50bf877d8ac7f30315b543c6\"
             data' | raw }}{{ '-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products-v2/create?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories/new?token=f55a92a667b4330dc9ef702122e041cd\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"64\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/preferences/preferences?-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
      data-post-link=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Param&egrave;tres...\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l\\'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminQuickAccesses&token=64d264ba1e0195dd196cd2ab304c097b\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode d' | raw }}{{ 'ebug.</strong></p><p class=&quot;text-left&quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/performance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
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
              h' | raw }}{{ 'ref=\"#customers-notifications\"
              role=\"tab\"
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
              Avez-vous consulté vos <strong><a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=163bc92f4802d63cbd2e64d7157007e3\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  <' | raw }}{{ '/div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/1/edit?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminLo' | raw }}{{ 'gin&amp;logout=1&amp;token=e776d1e266b49d3cf1af401de7285d70\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/toggle-navigation?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/' | raw }}{{ 'sell/orders/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
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
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/invoices/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/pr' | raw }}{{ 'esta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/credit-slips/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/orders/delivery-slips/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarts&amp;token=163bc92f4802d63cbd2e64d7157007e3\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      <' | raw }}{{ '/span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/products?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/categories?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/monitoring/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Suivi
                                </a>
                              </li>

         ' | raw }}{{ '                                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminAttributesGroups&amp;token=2276f36668417876a7a1bb390dffab49\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/catalog/brands/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/attachments/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a h' | raw }}{{ 'ref=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCartRules&amp;token=dcec901e50bf877d8ac7f30315b543c6\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/stocks/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customers/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                    ' | raw }}{{ '                        
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customers/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/addresses/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCustomerThreads&amp;token=ceedb1d9c7092921a81b2f748ef387dd\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                   ' | raw }}{{ '                           <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCustomerThreads&amp;token=ceedb1d9c7092921a81b2f748ef387dd\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/sell/customer-service/order-messages/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminReturn&amp;token=fe9e84cc17e63de1d36b4b13645fb80e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  ' | raw }}{{ '
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminStats&amp;token=c8580b460134876917da0b5ca94828af\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"su' | raw }}{{ 'bmenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/modules/manage?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/themes/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a h' | raw }}{{ 'ref=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/themes/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/mail_theme/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/cms-pages/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/design/modules/positions/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                          ' | raw }}{{ '    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminImages&amp;token=7e8887206dc3397f4fe9573ee6621983\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/modules/link-widget/list?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarriers&amp;token=a7b8e93cad904f88552312bfb128427d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                         ' | raw }}{{ '   </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminCarriers&amp;token=a7b8e93cad904f88552312bfb128427d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/shipping/preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/payment_methods?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
           ' | raw }}{{ '                                                         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/payment_methods?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/payment/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/localization/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language' | raw }}{{ '</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/localization/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/zones/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/taxes/?_token=' | raw }}{{ 'zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/improve/international/translations/settings?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                            ' | raw }}{{ '                                </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/order-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/product-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                     ' | raw }}{{ '                                       
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/customer-preferences/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/contacts/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/seo-urls/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminSearchConf&amp;token=c402808e344f11b4e4e2abd2dc557fb0\" class=\"link\"> Re' | raw }}{{ 'chercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/system-information/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\">
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
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/system-information/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-lev' | raw }}{{ 'eltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/performance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/administration/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/emails/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/import/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Importer
                                </a>
                              </li>

                            ' | raw }}{{ '                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/employees/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/sql-requests/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/logs/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/' | raw }}{{ 'advanced/webservice-keys/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/feature-flags/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/advanced/security/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" class=\"link\"> Sécurité
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
                      <li class=\"breadcrumb-item\">Paramètres généraux</li>
          
                  </ol>
      </nav>
    

    <div class=\"' | raw }}{{ 'title-row\">
      
          <h1 class=\"title\">
            Préférences          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ' | raw }}{{ '                                                                          <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/preferences/preferences?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"73\">
                      Paramètres généraux
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/configure/shop/maintenance/?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-me' | raw }}{{ 'nu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/presta-tests/admin172ec8o5ouznni116bw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=zojr0w-oFLfSbVLxM-RJakDtziks03SJ1srkNKL5EbE\"
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


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n\\'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/presta-tests/admin172ec8o5ouznni116bw/index.php?controller=AdminDashboard&amp;token=956c5852907ee6935eb1493b3a50d824\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__f5f964105c526206b70f08cf5d9dde8574fbd05ae2efa529487329dfdeb4c2a6", "");
    }
}
