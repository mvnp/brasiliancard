<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* welcome.twig */
class __TwigTemplate_4001f7d329c9dd9a483fce5bdc0676e95cbb49ab8a5f3a26b31b8495241c5f34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>

\t<style type=\"text/css\">

\t::selection { background-color: #E13300; color: white; }
\t::-moz-selection { background-color: #E13300; color: white; }

\tbody {
\t\tbackground-color: #fff;
\t\tmargin: 40px;
\t\tfont: 13px/20px normal Helvetica, Arial, sans-serif;
\t\tcolor: #4F5155;
\t}

\ta {
\t\tcolor: #003399;
\t\tbackground-color: transparent;
\t\tfont-weight: normal;
\t}

\th1 {
\t\tcolor: #444;
\t\tbackground-color: transparent;
\t\tborder-bottom: 1px solid #D0D0D0;
\t\tfont-size: 19px;
\t\tfont-weight: normal;
\t\tmargin: 0 0 14px 0;
\t\tpadding: 14px 15px 10px 15px;
\t}

\tcode {
\t\tfont-family: Consolas, Monaco, Courier New, Courier, monospace;
\t\tfont-size: 12px;
\t\tbackground-color: #f9f9f9;
\t\tborder: 1px solid #D0D0D0;
\t\tcolor: #002166;
\t\tdisplay: block;
\t\tmargin: 14px 0 14px 0;
\t\tpadding: 12px 10px 12px 10px;
\t}

\t#body {
\t\tmargin: 0 15px 0 15px;
\t}

\tp.footer {
\t\ttext-align: right;
\t\tfont-size: 11px;
\t\tborder-top: 1px solid #D0D0D0;
\t\tline-height: 32px;
\t\tpadding: 0 10px 0 10px;
\t\tmargin: 20px 0 0 0;
\t}

\t#container {
\t\tmargin: 10px;
\t\tborder: 1px solid #D0D0D0;
\t\tbox-shadow: 0 0 8px #D0D0D0;
\t}
\t</style>
</head>
<body>

<div id=\"container\">
\t<h1>Welcome to CodeIgniter!</h1>

\t<div id=\"body\">
\t\t<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

\t\t<p>If you would like to edit this page you'll find it located at:</p>
\t\t<code>application/views/welcome_message.php</code>

\t\t<p>The corresponding controller for this page is found at:</p>
\t\t<code>application/controllers/Welcome.php</code>

\t\t<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href=\"user_guide/\">User Guide</a>.</p>
\t</div>

\t<p class=\"footer\">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<title>Welcome to CodeIgniter</title>

\t<style type=\"text/css\">

\t::selection { background-color: #E13300; color: white; }
\t::-moz-selection { background-color: #E13300; color: white; }

\tbody {
\t\tbackground-color: #fff;
\t\tmargin: 40px;
\t\tfont: 13px/20px normal Helvetica, Arial, sans-serif;
\t\tcolor: #4F5155;
\t}

\ta {
\t\tcolor: #003399;
\t\tbackground-color: transparent;
\t\tfont-weight: normal;
\t}

\th1 {
\t\tcolor: #444;
\t\tbackground-color: transparent;
\t\tborder-bottom: 1px solid #D0D0D0;
\t\tfont-size: 19px;
\t\tfont-weight: normal;
\t\tmargin: 0 0 14px 0;
\t\tpadding: 14px 15px 10px 15px;
\t}

\tcode {
\t\tfont-family: Consolas, Monaco, Courier New, Courier, monospace;
\t\tfont-size: 12px;
\t\tbackground-color: #f9f9f9;
\t\tborder: 1px solid #D0D0D0;
\t\tcolor: #002166;
\t\tdisplay: block;
\t\tmargin: 14px 0 14px 0;
\t\tpadding: 12px 10px 12px 10px;
\t}

\t#body {
\t\tmargin: 0 15px 0 15px;
\t}

\tp.footer {
\t\ttext-align: right;
\t\tfont-size: 11px;
\t\tborder-top: 1px solid #D0D0D0;
\t\tline-height: 32px;
\t\tpadding: 0 10px 0 10px;
\t\tmargin: 20px 0 0 0;
\t}

\t#container {
\t\tmargin: 10px;
\t\tborder: 1px solid #D0D0D0;
\t\tbox-shadow: 0 0 8px #D0D0D0;
\t}
\t</style>
</head>
<body>

<div id=\"container\">
\t<h1>Welcome to CodeIgniter!</h1>

\t<div id=\"body\">
\t\t<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

\t\t<p>If you would like to edit this page you'll find it located at:</p>
\t\t<code>application/views/welcome_message.php</code>

\t\t<p>The corresponding controller for this page is found at:</p>
\t\t<code>application/controllers/Welcome.php</code>

\t\t<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href=\"user_guide/\">User Guide</a>.</p>
\t</div>

\t<p class=\"footer\">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>", "welcome.twig", "/var/www/brasiliancard/app/views/welcome.twig");
    }
}
