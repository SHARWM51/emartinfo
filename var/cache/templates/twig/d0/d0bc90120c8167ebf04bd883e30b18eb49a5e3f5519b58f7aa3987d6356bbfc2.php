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

/* __string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf */
class __TwigTemplate_5d89efcc9a79bbc0994338c1f8881a685afc9bd512f65fd0a69f66cef2320f5c extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "update_profile_notification")]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["user_data"] ?? null), "firstname", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["user_data"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <strong>
      ";
        // line 7
        if ((($context["api_access_status"] ?? null) == "enabled")) {
            // line 8
            echo "        <br>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "api_access_has_been_enabled");
            echo "<br>
      ";
        } elseif ((        // line 9
($context["api_access_status"] ?? null) == "disabled")) {
            // line 10
            echo "        <br>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "api_access_has_been_disabled");
            echo "<br>
      ";
        }
        // line 12
        echo "    </strong>
    <br>
    <h4 class=\"with-subline\">";
        // line 14
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 17
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 18
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 21
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 22
        echo $this->getAttribute(($context["user_data"] ?? null), "email", []);
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 25
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 26
        echo ($context["forgot_pass_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
  ";
        // line 29
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  104 => 26,  100 => 25,  94 => 22,  90 => 21,  82 => 18,  78 => 17,  72 => 14,  68 => 12,  62 => 10,  60 => 9,  55 => 8,  53 => 7,  47 => 4,  44 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf", "");
    }
}
