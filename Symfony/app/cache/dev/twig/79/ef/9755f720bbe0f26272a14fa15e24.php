<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_79ef9755f720bbe0f26272a14fa15e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = new Twig_Markup("        <a href=\"http://symfony.com/\"><img width=\"26\" height=\"28\" alt=\"Symfony\" style=\"border-width: 0; margin: 0 5px 0 10px; vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABRZJREFUeNqkVnlM03cUb38tFFqKB4UyGZccYrZyVpnGEQzngAlOQATcFMiWJcZFOZzb4pYNFTYnmYh4/OVEFCSIYAYIbhzCNpm0BMjCBAqFUsohMHrQFmTvbf2RDosWfc3L93rf76e/d1MXFxcp+uTj5bc0F3Q8oiXuS942JpMdVKs1nnK5nK8vy2Qy/2IwGF2WlpZ3KirLb8BdLdyhGCKqISAQpgNA1ODAYK5SqXSnGEEAOGrDtcmtrKq4AEvNi4CoJ7NPb2j4paFgYmIimvISxGazH8XERO8+mnFkGJaLhoCoFwsvOV4vKq4HFblQXoHodLpiq//W6IIL+Q2wXMA9Qh+k+PqN+68KgjQ/P89qe9hWWXKzFN+i6gMx6+vun5mdnd242kcDAt7WItvachdyvj09/k5EuAr3tVot88rlK2WoTRKInpV5LK6vr2/PakHCwsPk/m/5i5uamk1GR2U08L5WXz/fDvJ8cvIJ78O0j9Jhaoo24oSHRjTLZDKP1YC4uLhoyspLb0dF7AqVSCTrcG/N2jV/q+fUZnNzc6aknIWFxZPmlkYebZO7R+C92nufrPRg/N44ZVBwkHy91XqKJZtNlUpH/1X3seNZDebmZm2XLl6OIGUBhAH2oenf12g05qJ+0STR2toauxJI9qlv+oNDgn8990P+uuqfaswlkhGKm5vrvJOzkzIsLPROTXWtOSkL8TPk6uqiNfSOWCyOImamZ3iGDp03Os9FRkYUT01NdZJ7oF76yIiUiI+Pa4HlY4FAuHS3rq5eJpVKCUNvgSpfJ8DTuIYOR6WjqILfQ0NDGiOjIsXkvkKhINzc3RBo0tTUhMHjvSlHzj93nq9QKGmG3hoYGHQgaDQ63dChSqUySTmQmoRy2Se/vsrz5Clxn8PhzPH5fkI0SVdnN6+zs8sC+UXOQ1Cp/wUUSbav2T5FfVtbW6tBNQngnrthuxnU+BDPHRzsp2CYQJcdHx+3NdZLn9GpGYOhsnewr1nU5abhYUkCDFNDQ0P4OGWDnZ0ENXj2TF6gsSBWHCsV4bF58/AyfbJSD6b5czhWShaLuQCR3g9eF3LrVlkUnnt5e6JzLPb29u4wFsjB3n6K7u3t1X236u7/6kx7u8ATRzTy7fKKHeB54eTZli38dhhovb19/sYCbfLwEBF7Yt/7Ge1hSACNDCBLhkZHcHR0FOfmfBewGvsk70+sRRv17k2IFxpzwY/vN4Rpv7Gh8WNjQQJ3Bkrt7OwECDSQmpZSggG6XKig8PxITu4pGbne/35Sw4EPUg5DYBpVdVks1tNPj2eVYnATOlf9LTMroxYS4FIVtLGx0Wzfvq1EJBr4E9e7ot+VXrta5NEh7Ag19muOph/5g8vl1sFUQlZYK8z6134s+uzs93lvkIKQ17oJgkaHn+2YbIwB5d3MWJCMzPTHScmJeZgGgUdIIEwdDsBRoP+0Lz4/wYNKS33ZCgva6UtM2lcI0ypgEdZB/Z7BVAe2EwpWzJcnvgpsedDCXA2Aj4+39tDhQwJfX5+bsKwG7ic7ouVdEOY9a3Qw4CChsGNnaUmpW3PTA/OVvhC6HgrEojo2PlYEJb0JthrR5phU9NuuZ/o6XTOBseMEjIHrjTEHTuA0Oytn9fT0sCHj0/h8/jSbbaHw8vbCzN4H3KFjVNUM2f08D4gkmq6xsMFcq/tSLNlrdTlyGkuFzmvHdIwA80Z1qs8BZWDO1TF+NcYddjzq5f/eEP0jwAAGCybA1KhGOwAAAABJRU5ErkJggg==\"/></a>
    ", $this->env->getCharset());
        // line 7
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false, "text" => $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"))));
        // line 8
        echo "
    ";
        // line 9
        if ($this->getContext($context, "verbose")) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            ob_start();
            // line 12
            echo "                <span>PHP ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
            echo "</span>
                <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
                <span style=\"color: ";
            // line 14
            echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("#759e1a") : ("#a33"));
            echo "\">xdebug</span>
                <span style=\"margin: 0; padding: 0; color: #979696\">|</span>
                <span style=\"color: ";
            // line 16
            echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("#759e1a") : ("#a33"));
            echo "\">accel</span>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 18
            echo "        ";
            $context["text"] = new Twig_Markup(ob_get_clean(), $this->env->getCharset());
            // line 19
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false, "icon" => "")));
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["icon"] = new Twig_Markup("        <img width=\"21\" height=\"28\" alt=\"Environment\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZNJREFUeNpi/P//PwO1ARMDDcCooWDA4+npeRiEQWw0NTweHh4nQZhYORYoLf39+3cbGBuIbyJplPnx44cZjA3ENwjJwQzljoqKOghjo7lGBAcbBLiA+g7B2DBBRqCXj3/79s0CRSUX14lt27a5AplfgNgBCPaDxA8cOOAIokBe9fLy2o1LHxO6BAhAxWTwxIUMPn0seDTCvPotLi7uJIyNIxhQ9OEzVADoRZSgWbRo0UmoF1vx6GPBl06l8XhRmtzEL0KmHF5DWcmUo1E21dLSeo0uCBX7jUffb3z6GIGFdC2QYXPp0iVw4Ovp6T0FUkeA+BUw0c/AZiIwE2QAKTEc+laBktQqIL6al5e3FqqhDsQHYhU8Ln0CzVnY9D1hghYeD5E0PISKfcDjxQ949H2FJX5eJEkY+820adMm4/DiGzz6GFgIeBFX0DzBF/swQ/8oKCi8h7Gh9FeodzikpKSeQ8XuopW12PQxMEKraE0gDoSKrQfi60gaSZaDGQqqCiShks+h5Si8yiBVjnFkNyYAAgwAQGPBFLF65f4AAAAASUVORK5CYII=\"/>
    ", $this->env->getCharset());
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        ob_start();
        // line 27
        echo "            ";
        if ($this->getContext($context, "verbose")) {
            // line 28
            echo "                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
            echo "</span>
                <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
                <span>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
            echo "</span>
                <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
                <span>";
            // line 32
            echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("debug") : ("no-debug"));
            echo "</span>
                <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            ";
        }
        // line 35
        echo "            <span>
                ";
        // line 36
        if ($this->getContext($context, "profiler_url")) {
            // line 37
            echo "                    <a style=\"color: #2f2f2f\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "profiler_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 39
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "
                ";
        }
        // line 41
        echo "            </span>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo "    ";
        $context["text"] = new Twig_Markup(ob_get_clean(), $this->env->getCharset());
        // line 44
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 47
    public function block_menu($context, array $blocks = array())
    {
        // line 48
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/config.png"), "html", null, true);
        echo "\" alt=\"Configuration\" /></span>
    <strong>Config</strong>
</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>Symfony version</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Application name</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Environment</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Debug</th>
            <td>";
        // line 75
        echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 91
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 95
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 99
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 103
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 107
        echo (($this->getAttribute($this->getContext($context, "collector"), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </table>

    <h2>Active bundles</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Path</th>
        </tr>
        ";
        // line 117
        $context["bundles"] = $this->getAttribute($this->getContext($context, "collector"), "bundles");
        // line 118
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "bundles"))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 119
            echo "        <tr>
            <th>";
            // line 120
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</th>
            <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bundles"), $this->getContext($context, "name"), array(), "array"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 124
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
