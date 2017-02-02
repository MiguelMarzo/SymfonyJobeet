<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_c74efd1def812ab0b364b954723c8c1e42a19f3c05d52054df6ad672cb0d50e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer_tag_start' => array($this, 'block_footer_tag_start'),
            'footer' => array($this, 'block_footer'),
            'footer_tag_end' => array($this, 'block_footer_tag_end'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'body_end_before_js' => array($this, 'block_body_end_before_js'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459b6c86b86bff1f41204127d24f64d1592a096b054a8b6ea89e471d69ade619 = $this->env->getExtension("native_profiler");
        $__internal_459b6c86b86bff1f41204127d24f64d1592a096b054a8b6ea89e471d69ade619->enter($__internal_459b6c86b86bff1f41204127d24f64d1592a096b054a8b6ea89e471d69ade619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::base.html.twig"));

        // line 1
        $context["__internal_7de95a7e8b8c5940436fab10373f367568e1fe16f2dbb474c5be54a69d204ccb"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle::base.html.twig", 1);
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body_tag', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body_start', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('body_end', $context, $blocks);
        // line 129
        echo "</body>
</html>
";
        
        $__internal_459b6c86b86bff1f41204127d24f64d1592a096b054a8b6ea89e471d69ade619->leave($__internal_459b6c86b86bff1f41204127d24f64d1592a096b054a8b6ea89e471d69ade619_prof);

    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        $__internal_e3c25a47d9e5f8bf8d9cc88ab3897a1f548f0f44fc68fc8e0fea307123d75cad = $this->env->getExtension("native_profiler");
        $__internal_e3c25a47d9e5f8bf8d9cc88ab3897a1f548f0f44fc68fc8e0fea307123d75cad->enter($__internal_e3c25a47d9e5f8bf8d9cc88ab3897a1f548f0f44fc68fc8e0fea307123d75cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_tag"));

        // line 6
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
";
        
        $__internal_e3c25a47d9e5f8bf8d9cc88ab3897a1f548f0f44fc68fc8e0fea307123d75cad->leave($__internal_e3c25a47d9e5f8bf8d9cc88ab3897a1f548f0f44fc68fc8e0fea307123d75cad_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fb16d453d368dc47f4aa904eafd91443ebed02b2dc01c123cea049c63d57b01 = $this->env->getExtension("native_profiler");
        $__internal_7fb16d453d368dc47f4aa904eafd91443ebed02b2dc01c123cea049c63d57b01->enter($__internal_7fb16d453d368dc47f4aa904eafd91443ebed02b2dc01c123cea049c63d57b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "<head>
    <meta charset=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 22
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 33
        $this->displayBlock('favicon', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 36
        echo "</head>
";
        
        $__internal_7fb16d453d368dc47f4aa904eafd91443ebed02b2dc01c123cea049c63d57b01->leave($__internal_7fb16d453d368dc47f4aa904eafd91443ebed02b2dc01c123cea049c63d57b01_prof);

    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_7bf17cbcb9bea78a74bd9fce0b6bee0b0a9e8fd6b3353a9baa47e6fecf8b43a1 = $this->env->getExtension("native_profiler");
        $__internal_7bf17cbcb9bea78a74bd9fce0b6bee0b0a9e8fd6b3353a9baa47e6fecf8b43a1->enter($__internal_7bf17cbcb9bea78a74bd9fce0b6bee0b0a9e8fd6b3353a9baa47e6fecf8b43a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 18
        echo "    ";
        
        $__internal_7bf17cbcb9bea78a74bd9fce0b6bee0b0a9e8fd6b3353a9baa47e6fecf8b43a1->leave($__internal_7bf17cbcb9bea78a74bd9fce0b6bee0b0a9e8fd6b3353a9baa47e6fecf8b43a1_prof);

    }

    // line 22
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_7a07f9bf989549d85b9f6441bd98558e3db7f8ba4c460c025ff960a36f914170 = $this->env->getExtension("native_profiler");
        $__internal_7a07f9bf989549d85b9f6441bd98558e3db7f8ba4c460c025ff960a36f914170->enter($__internal_7a07f9bf989549d85b9f6441bd98558e3db7f8ba4c460c025ff960a36f914170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 23
        echo "    ";
        // line 30
        echo "    ";
        
        $__internal_7a07f9bf989549d85b9f6441bd98558e3db7f8ba4c460c025ff960a36f914170->leave($__internal_7a07f9bf989549d85b9f6441bd98558e3db7f8ba4c460c025ff960a36f914170_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4dd54ff79fb2931b0c83e77e7389ab657770c4348074d7745a19030209a479 = $this->env->getExtension("native_profiler");
        $__internal_4a4dd54ff79fb2931b0c83e77e7389ab657770c4348074d7745a19030209a479->enter($__internal_4a4dd54ff79fb2931b0c83e77e7389ab657770c4348074d7745a19030209a479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mopa Bootstrap Bundle";
        
        $__internal_4a4dd54ff79fb2931b0c83e77e7389ab657770c4348074d7745a19030209a479->leave($__internal_4a4dd54ff79fb2931b0c83e77e7389ab657770c4348074d7745a19030209a479_prof);

    }

    // line 33
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_6744abe692aaa763a0b09827e39302af420354aa8f6b73a22f4c998cf411fbc5 = $this->env->getExtension("native_profiler");
        $__internal_6744abe692aaa763a0b09827e39302af420354aa8f6b73a22f4c998cf411fbc5->enter($__internal_6744abe692aaa763a0b09827e39302af420354aa8f6b73a22f4c998cf411fbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />";
        
        $__internal_6744abe692aaa763a0b09827e39302af420354aa8f6b73a22f4c998cf411fbc5->leave($__internal_6744abe692aaa763a0b09827e39302af420354aa8f6b73a22f4c998cf411fbc5_prof);

    }

    // line 34
    public function block_head_bottom($context, array $blocks = array())
    {
        $__internal_2233a0ecaa74b914dae942d7a642a7a4ac559d6244f78ce90e7850387ecab996 = $this->env->getExtension("native_profiler");
        $__internal_2233a0ecaa74b914dae942d7a642a7a4ac559d6244f78ce90e7850387ecab996->enter($__internal_2233a0ecaa74b914dae942d7a642a7a4ac559d6244f78ce90e7850387ecab996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_bottom"));

        // line 35
        echo "    ";
        
        $__internal_2233a0ecaa74b914dae942d7a642a7a4ac559d6244f78ce90e7850387ecab996->leave($__internal_2233a0ecaa74b914dae942d7a642a7a4ac559d6244f78ce90e7850387ecab996_prof);

    }

    // line 39
    public function block_body_tag($context, array $blocks = array())
    {
        $__internal_1002dd135889a045b49efff70baa22c91c978df526123db9e4b95188dd3f55ad = $this->env->getExtension("native_profiler");
        $__internal_1002dd135889a045b49efff70baa22c91c978df526123db9e4b95188dd3f55ad->enter($__internal_1002dd135889a045b49efff70baa22c91c978df526123db9e4b95188dd3f55ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_tag"));

        // line 40
        echo "<body>
";
        
        $__internal_1002dd135889a045b49efff70baa22c91c978df526123db9e4b95188dd3f55ad->leave($__internal_1002dd135889a045b49efff70baa22c91c978df526123db9e4b95188dd3f55ad_prof);

    }

    // line 43
    public function block_body_start($context, array $blocks = array())
    {
        $__internal_cdb2fce60bab3b60bfd65e6ccf25976ca3efdf78a0febed7d16bdcaa95a1332a = $this->env->getExtension("native_profiler");
        $__internal_cdb2fce60bab3b60bfd65e6ccf25976ca3efdf78a0febed7d16bdcaa95a1332a->enter($__internal_cdb2fce60bab3b60bfd65e6ccf25976ca3efdf78a0febed7d16bdcaa95a1332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_start"));

        
        $__internal_cdb2fce60bab3b60bfd65e6ccf25976ca3efdf78a0febed7d16bdcaa95a1332a->leave($__internal_cdb2fce60bab3b60bfd65e6ccf25976ca3efdf78a0febed7d16bdcaa95a1332a_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_22d143f2fe7a34442dc4f2eea71a2422f5303fda0e7b7eccdb060a3697fa03da = $this->env->getExtension("native_profiler");
        $__internal_22d143f2fe7a34442dc4f2eea71a2422f5303fda0e7b7eccdb060a3697fa03da->enter($__internal_22d143f2fe7a34442dc4f2eea71a2422f5303fda0e7b7eccdb060a3697fa03da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('body_end_before_js', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('foot_script', $context, $blocks);
        
        $__internal_22d143f2fe7a34442dc4f2eea71a2422f5303fda0e7b7eccdb060a3697fa03da->leave($__internal_22d143f2fe7a34442dc4f2eea71a2422f5303fda0e7b7eccdb060a3697fa03da_prof);

    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_05b113f334b3bca380d0a3fb235986872082e23f1cf40dfa3b32f7563ae57175 = $this->env->getExtension("native_profiler");
        $__internal_05b113f334b3bca380d0a3fb235986872082e23f1cf40dfa3b32f7563ae57175->enter($__internal_05b113f334b3bca380d0a3fb235986872082e23f1cf40dfa3b32f7563ae57175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 48
        echo "    <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->
    ";
        
        $__internal_05b113f334b3bca380d0a3fb235986872082e23f1cf40dfa3b32f7563ae57175->leave($__internal_05b113f334b3bca380d0a3fb235986872082e23f1cf40dfa3b32f7563ae57175_prof);

    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
        $__internal_d6f1e37ad4ee81d5f82a7d76f1cb89d289bffc728a8a9bca35934a6708a1dd56 = $this->env->getExtension("native_profiler");
        $__internal_d6f1e37ad4ee81d5f82a7d76f1cb89d289bffc728a8a9bca35934a6708a1dd56->enter($__internal_d6f1e37ad4ee81d5f82a7d76f1cb89d289bffc728a8a9bca35934a6708a1dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 52
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 57
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('flashes', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('content_row', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer_tag_start', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('footer_tag_end', $context, $blocks);
        // line 103
        echo "    ";
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 104
        echo "    ";
        
        $__internal_d6f1e37ad4ee81d5f82a7d76f1cb89d289bffc728a8a9bca35934a6708a1dd56->leave($__internal_d6f1e37ad4ee81d5f82a7d76f1cb89d289bffc728a8a9bca35934a6708a1dd56_prof);

    }

    // line 52
    public function block_container_div_start($context, array $blocks = array())
    {
        $__internal_d32f870f0f31ef5a734e84a2a77e1de7e0d985354278f5f0e187cbbfd024436b = $this->env->getExtension("native_profiler");
        $__internal_d32f870f0f31ef5a734e84a2a77e1de7e0d985354278f5f0e187cbbfd024436b->enter($__internal_d32f870f0f31ef5a734e84a2a77e1de7e0d985354278f5f0e187cbbfd024436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_div_start"));

        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
        
        $__internal_d32f870f0f31ef5a734e84a2a77e1de7e0d985354278f5f0e187cbbfd024436b->leave($__internal_d32f870f0f31ef5a734e84a2a77e1de7e0d985354278f5f0e187cbbfd024436b_prof);

    }

    public function block_container_class($context, array $blocks = array())
    {
        $__internal_7977fe2b39d0f599c55b9b4b0340679db54db04036b751ea04a04a56d970c5e9 = $this->env->getExtension("native_profiler");
        $__internal_7977fe2b39d0f599c55b9b4b0340679db54db04036b751ea04a04a56d970c5e9->enter($__internal_7977fe2b39d0f599c55b9b4b0340679db54db04036b751ea04a04a56d970c5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        echo "container";
        
        $__internal_7977fe2b39d0f599c55b9b4b0340679db54db04036b751ea04a04a56d970c5e9->leave($__internal_7977fe2b39d0f599c55b9b4b0340679db54db04036b751ea04a04a56d970c5e9_prof);

    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        $__internal_45ed6141da7332c4b652ce110e05f6f8860827b4882c0277b88186953ca43020 = $this->env->getExtension("native_profiler");
        $__internal_45ed6141da7332c4b652ce110e05f6f8860827b4882c0277b88186953ca43020->enter($__internal_45ed6141da7332c4b652ce110e05f6f8860827b4882c0277b88186953ca43020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "        ";
        
        $__internal_45ed6141da7332c4b652ce110e05f6f8860827b4882c0277b88186953ca43020->leave($__internal_45ed6141da7332c4b652ce110e05f6f8860827b4882c0277b88186953ca43020_prof);

    }

    // line 56
    public function block_content_div_start($context, array $blocks = array())
    {
        $__internal_0bb3faff15070cf16e77911b84298135fe007c820458d3c00e1adecbf4a75060 = $this->env->getExtension("native_profiler");
        $__internal_0bb3faff15070cf16e77911b84298135fe007c820458d3c00e1adecbf4a75060->enter($__internal_0bb3faff15070cf16e77911b84298135fe007c820458d3c00e1adecbf4a75060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_div_start"));

        echo "<div class=\"content\">";
        
        $__internal_0bb3faff15070cf16e77911b84298135fe007c820458d3c00e1adecbf4a75060->leave($__internal_0bb3faff15070cf16e77911b84298135fe007c820458d3c00e1adecbf4a75060_prof);

    }

    // line 57
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_484a2175b928be65c93ab88ca0ce2557c13136d062aeaada78104b2484b35561 = $this->env->getExtension("native_profiler");
        $__internal_484a2175b928be65c93ab88ca0ce2557c13136d062aeaada78104b2484b35561->enter($__internal_484a2175b928be65c93ab88ca0ce2557c13136d062aeaada78104b2484b35561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        // line 58
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 59
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
        
        $__internal_484a2175b928be65c93ab88ca0ce2557c13136d062aeaada78104b2484b35561->leave($__internal_484a2175b928be65c93ab88ca0ce2557c13136d062aeaada78104b2484b35561_prof);

    }

    public function block_headline($context, array $blocks = array())
    {
        $__internal_e2ce5e000760828848bc275dbc515ead5b82b0764b38b73df569d01321ed808e = $this->env->getExtension("native_profiler");
        $__internal_e2ce5e000760828848bc275dbc515ead5b82b0764b38b73df569d01321ed808e->enter($__internal_e2ce5e000760828848bc275dbc515ead5b82b0764b38b73df569d01321ed808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headline"));

        echo "Mopa Bootstrap Bundle";
        
        $__internal_e2ce5e000760828848bc275dbc515ead5b82b0764b38b73df569d01321ed808e->leave($__internal_e2ce5e000760828848bc275dbc515ead5b82b0764b38b73df569d01321ed808e_prof);

    }

    // line 63
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_def766793a22869168c5efb78bfef142de57a1a68955e417f934c2b68df16587 = $this->env->getExtension("native_profiler");
        $__internal_def766793a22869168c5efb78bfef142de57a1a68955e417f934c2b68df16587->enter($__internal_def766793a22869168c5efb78bfef142de57a1a68955e417f934c2b68df16587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 64
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 65
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
            // line 67
            echo $context["__internal_7de95a7e8b8c5940436fab10373f367568e1fe16f2dbb474c5be54a69d204ccb"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 71
        echo "            ";
        
        $__internal_def766793a22869168c5efb78bfef142de57a1a68955e417f934c2b68df16587->leave($__internal_def766793a22869168c5efb78bfef142de57a1a68955e417f934c2b68df16587_prof);

    }

    // line 73
    public function block_content_row($context, array $blocks = array())
    {
        $__internal_aa61a27eb61fb3a3eaa7aa3425fb4eec7e4f23a9c75f130aaa49854c69917b9b = $this->env->getExtension("native_profiler");
        $__internal_aa61a27eb61fb3a3eaa7aa3425fb4eec7e4f23a9c75f130aaa49854c69917b9b->enter($__internal_aa61a27eb61fb3a3eaa7aa3425fb4eec7e4f23a9c75f130aaa49854c69917b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_row"));

        // line 74
        echo "            <div class=\"row\">
                ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            ";
        
        $__internal_aa61a27eb61fb3a3eaa7aa3425fb4eec7e4f23a9c75f130aaa49854c69917b9b->leave($__internal_aa61a27eb61fb3a3eaa7aa3425fb4eec7e4f23a9c75f130aaa49854c69917b9b_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_72d9d7bc8a022157d84b5892f504a8d3a07efccd8c8d92162bcd65bcd82f8a44 = $this->env->getExtension("native_profiler");
        $__internal_72d9d7bc8a022157d84b5892f504a8d3a07efccd8c8d92162bcd65bcd82f8a44->enter($__internal_72d9d7bc8a022157d84b5892f504a8d3a07efccd8c8d92162bcd65bcd82f8a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "                <div class=\"col-sm-9\">
                    ";
        // line 77
        $this->displayBlock('content_content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 82
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 85
        echo "                </div>
                ";
        
        $__internal_72d9d7bc8a022157d84b5892f504a8d3a07efccd8c8d92162bcd65bcd82f8a44->leave($__internal_72d9d7bc8a022157d84b5892f504a8d3a07efccd8c8d92162bcd65bcd82f8a44_prof);

    }

    // line 77
    public function block_content_content($context, array $blocks = array())
    {
        $__internal_5f4f8642fe2510473e01e5a6eff9a3445bdbff9b0161eb6712e77cd3316be7b4 = $this->env->getExtension("native_profiler");
        $__internal_5f4f8642fe2510473e01e5a6eff9a3445bdbff9b0161eb6712e77cd3316be7b4->enter($__internal_5f4f8642fe2510473e01e5a6eff9a3445bdbff9b0161eb6712e77cd3316be7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_content"));

        // line 78
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
        
        $__internal_5f4f8642fe2510473e01e5a6eff9a3445bdbff9b0161eb6712e77cd3316be7b4->leave($__internal_5f4f8642fe2510473e01e5a6eff9a3445bdbff9b0161eb6712e77cd3316be7b4_prof);

    }

    // line 82
    public function block_content_sidebar($context, array $blocks = array())
    {
        $__internal_5d578964bb55462b0bba9f7c79b21ce2c32ae4a29f5e30cdc3e946944f58cf8d = $this->env->getExtension("native_profiler");
        $__internal_5d578964bb55462b0bba9f7c79b21ce2c32ae4a29f5e30cdc3e946944f58cf8d->enter($__internal_5d578964bb55462b0bba9f7c79b21ce2c32ae4a29f5e30cdc3e946944f58cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 83
        echo "                    <h2>Sidebar</h2>
                    ";
        
        $__internal_5d578964bb55462b0bba9f7c79b21ce2c32ae4a29f5e30cdc3e946944f58cf8d->leave($__internal_5d578964bb55462b0bba9f7c79b21ce2c32ae4a29f5e30cdc3e946944f58cf8d_prof);

    }

    // line 90
    public function block_content_div_end($context, array $blocks = array())
    {
        $__internal_60520b88805ccad37bf462edf88b54975f299e6579420e26aeae5ff729879a78 = $this->env->getExtension("native_profiler");
        $__internal_60520b88805ccad37bf462edf88b54975f299e6579420e26aeae5ff729879a78->enter($__internal_60520b88805ccad37bf462edf88b54975f299e6579420e26aeae5ff729879a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_div_end"));

        echo "</div>";
        
        $__internal_60520b88805ccad37bf462edf88b54975f299e6579420e26aeae5ff729879a78->leave($__internal_60520b88805ccad37bf462edf88b54975f299e6579420e26aeae5ff729879a78_prof);

    }

    // line 92
    public function block_footer_tag_start($context, array $blocks = array())
    {
        $__internal_cf2b9df8810415b214080d4819249c5d9bd752a70331b7e76d0394d98a6619ef = $this->env->getExtension("native_profiler");
        $__internal_cf2b9df8810415b214080d4819249c5d9bd752a70331b7e76d0394d98a6619ef->enter($__internal_cf2b9df8810415b214080d4819249c5d9bd752a70331b7e76d0394d98a6619ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_tag_start"));

        // line 93
        echo "        <footer>
        ";
        
        $__internal_cf2b9df8810415b214080d4819249c5d9bd752a70331b7e76d0394d98a6619ef->leave($__internal_cf2b9df8810415b214080d4819249c5d9bd752a70331b7e76d0394d98a6619ef_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_98f46272cbd1ba7fc0c50ef64c39c912e3fb46727353a4498751ac58b039e2ab = $this->env->getExtension("native_profiler");
        $__internal_98f46272cbd1ba7fc0c50ef64c39c912e3fb46727353a4498751ac58b039e2ab->enter($__internal_98f46272cbd1ba7fc0c50ef64c39c912e3fb46727353a4498751ac58b039e2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "        <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2015</p>
        ";
        
        $__internal_98f46272cbd1ba7fc0c50ef64c39c912e3fb46727353a4498751ac58b039e2ab->leave($__internal_98f46272cbd1ba7fc0c50ef64c39c912e3fb46727353a4498751ac58b039e2ab_prof);

    }

    // line 100
    public function block_footer_tag_end($context, array $blocks = array())
    {
        $__internal_7b6c965659ec7531a2ddeb38724e1b54b0bb5a95211b2c79ef02011f4d5a2c23 = $this->env->getExtension("native_profiler");
        $__internal_7b6c965659ec7531a2ddeb38724e1b54b0bb5a95211b2c79ef02011f4d5a2c23->enter($__internal_7b6c965659ec7531a2ddeb38724e1b54b0bb5a95211b2c79ef02011f4d5a2c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_tag_end"));

        // line 101
        echo "        </footer>
        ";
        
        $__internal_7b6c965659ec7531a2ddeb38724e1b54b0bb5a95211b2c79ef02011f4d5a2c23->leave($__internal_7b6c965659ec7531a2ddeb38724e1b54b0bb5a95211b2c79ef02011f4d5a2c23_prof);

    }

    // line 103
    public function block_container_div_end($context, array $blocks = array())
    {
        $__internal_c67446707d7439907edb77cadfb96d2053854db4dbb136a6b45d3ee807ef231f = $this->env->getExtension("native_profiler");
        $__internal_c67446707d7439907edb77cadfb96d2053854db4dbb136a6b45d3ee807ef231f->enter($__internal_c67446707d7439907edb77cadfb96d2053854db4dbb136a6b45d3ee807ef231f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_div_end"));

        echo "</div><!-- /container -->";
        
        $__internal_c67446707d7439907edb77cadfb96d2053854db4dbb136a6b45d3ee807ef231f->leave($__internal_c67446707d7439907edb77cadfb96d2053854db4dbb136a6b45d3ee807ef231f_prof);

    }

    // line 106
    public function block_body_end_before_js($context, array $blocks = array())
    {
        $__internal_aa156607704746ab6b44f7967a43df32c3f87acdfacefc9c30e9e6fb22118a4d = $this->env->getExtension("native_profiler");
        $__internal_aa156607704746ab6b44f7967a43df32c3f87acdfacefc9c30e9e6fb22118a4d->enter($__internal_aa156607704746ab6b44f7967a43df32c3f87acdfacefc9c30e9e6fb22118a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_end_before_js"));

        // line 107
        echo "    ";
        
        $__internal_aa156607704746ab6b44f7967a43df32c3f87acdfacefc9c30e9e6fb22118a4d->leave($__internal_aa156607704746ab6b44f7967a43df32c3f87acdfacefc9c30e9e6fb22118a4d_prof);

    }

    // line 109
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_79e10319a8e8ba94bb23776c87d0db8250fb47bbd3e2d7920640eb579f073da1 = $this->env->getExtension("native_profiler");
        $__internal_79e10319a8e8ba94bb23776c87d0db8250fb47bbd3e2d7920640eb579f073da1->enter($__internal_79e10319a8e8ba94bb23776c87d0db8250fb47bbd3e2d7920640eb579f073da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 110
        echo "    ";
        // line 114
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 117
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    ";
        
        $__internal_79e10319a8e8ba94bb23776c87d0db8250fb47bbd3e2d7920640eb579f073da1->leave($__internal_79e10319a8e8ba94bb23776c87d0db8250fb47bbd3e2d7920640eb579f073da1_prof);

    }

    // line 114
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        $__internal_8874872543956413580129723c65b2cb9bfc7f57e97235712525c708366091f4 = $this->env->getExtension("native_profiler");
        $__internal_8874872543956413580129723c65b2cb9bfc7f57e97235712525c708366091f4->enter($__internal_8874872543956413580129723c65b2cb9bfc7f57e97235712525c708366091f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_assetic"));

        // line 115
        echo "        ";
        // line 116
        echo "    ";
        
        $__internal_8874872543956413580129723c65b2cb9bfc7f57e97235712525c708366091f4->leave($__internal_8874872543956413580129723c65b2cb9bfc7f57e97235712525c708366091f4_prof);

    }

    // line 127
    public function block_body_end($context, array $blocks = array())
    {
        $__internal_e780c25283b318f70bc7458195a201a7f8e7c0dc42e01389527f42f65f08fa94 = $this->env->getExtension("native_profiler");
        $__internal_e780c25283b318f70bc7458195a201a7f8e7c0dc42e01389527f42f65f08fa94->enter($__internal_e780c25283b318f70bc7458195a201a7f8e7c0dc42e01389527f42f65f08fa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_end"));

        
        $__internal_e780c25283b318f70bc7458195a201a7f8e7c0dc42e01389527f42f65f08fa94->leave($__internal_e780c25283b318f70bc7458195a201a7f8e7c0dc42e01389527f42f65f08fa94_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 127,  645 => 116,  643 => 115,  637 => 114,  623 => 117,  620 => 114,  618 => 110,  612 => 109,  605 => 107,  599 => 106,  587 => 103,  579 => 101,  573 => 100,  565 => 97,  559 => 96,  551 => 93,  545 => 92,  533 => 90,  525 => 83,  519 => 82,  511 => 78,  505 => 77,  497 => 85,  495 => 82,  491 => 80,  489 => 77,  486 => 76,  480 => 75,  472 => 87,  470 => 75,  467 => 74,  461 => 73,  454 => 71,  447 => 67,  443 => 65,  440 => 64,  434 => 63,  413 => 59,  410 => 58,  404 => 57,  392 => 56,  385 => 54,  379 => 53,  354 => 52,  347 => 104,  344 => 103,  342 => 100,  339 => 99,  337 => 96,  334 => 95,  332 => 92,  329 => 91,  327 => 90,  324 => 89,  322 => 73,  319 => 72,  317 => 63,  314 => 62,  311 => 57,  309 => 56,  306 => 55,  303 => 53,  300 => 52,  294 => 51,  286 => 48,  280 => 47,  273 => 109,  270 => 108,  268 => 106,  265 => 105,  263 => 51,  260 => 50,  257 => 47,  251 => 46,  240 => 43,  232 => 40,  226 => 39,  219 => 35,  213 => 34,  199 => 33,  187 => 32,  180 => 30,  178 => 23,  172 => 22,  165 => 18,  163 => 14,  161 => 13,  155 => 12,  147 => 36,  144 => 34,  142 => 33,  138 => 32,  135 => 31,  133 => 22,  128 => 19,  126 => 12,  122 => 11,  119 => 10,  113 => 9,  103 => 6,  97 => 5,  88 => 129,  86 => 127,  83 => 126,  81 => 46,  78 => 45,  76 => 43,  73 => 42,  71 => 39,  68 => 38,  66 => 9,  63 => 8,  61 => 5,  56 => 2,  54 => 1,);
    }
}
/* {% from 'MopaBootstrapBundle::flash.html.twig' import session_flash %}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* {% block html_tag %}*/
/* <html lang="{{ app.request.locale }}">*/
/* {% endblock html_tag %}*/
/* */
/* {% block head %}*/
/* <head>*/
/*     <meta charset="{{ _charset }}" />*/
/*     {% block head_style %}*/
/*     {# Override this block to add your own files! #}*/
/*     {# To use this without less or sass use the base.html.twig template as your base*/
/*      # Be sure you understand whats going on: have a look into*/
/*      # https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/css-vs-less.md*/
/*      #}*/
/*     {% endblock head_style %}*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {% block head_script %}*/
/*     {# Overwrite this block to add your own js here, to get them generated into final files*/
/*     {% javascripts*/
/*         'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'*/
/*     %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*      #}*/
/*     {% endblock head_script %}*/
/* */
/*     <title>{% block title %}Mopa Bootstrap Bundle{% endblock title %}</title>*/
/*     {% block favicon %}<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />{% endblock %}*/
/*     {% block head_bottom %}*/
/*     {% endblock head_bottom %}*/
/* </head>*/
/* {% endblock head %}*/
/* */
/* {% block body_tag %}*/
/* <body>*/
/* {% endblock body_tag %}*/
/* */
/* {% block body_start %}*/
/* {% endblock body_start %}*/
/* */
/* {% block body %}*/
/*     {% block navbar %}*/
/*     <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->*/
/*     {% endblock navbar %}*/
/* */
/*     {% block container %}*/
/*     {% block container_div_start %}<div class="{% block container_class %}container{% endblock container_class %}">{% endblock container_div_start %}*/
/*         {% block header %}*/
/*         {% endblock header %}*/
/* */
/*         {% block content_div_start %}<div class="content">{% endblock content_div_start %}*/
/*             {% block page_header %}*/
/*             <div class="page-header">*/
/*                   <h1>{% block headline %}Mopa Bootstrap Bundle{% endblock headline %}</h1>*/
/*             </div>*/
/*             {% endblock page_header %}*/
/* */
/*             {% block flashes %}*/
/*             {% if app.session.flashbag.peekAll|length > 0 %}*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                 {{ session_flash() }}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endblock flashes %}*/
/* */
/*             {% block content_row %}*/
/*             <div class="row">*/
/*                 {% block content %}*/
/*                 <div class="col-sm-9">*/
/*                     {% block content_content %}*/
/*                     <strong>Hier könnte Ihre Werbung stehen ... </strong>*/
/*                     {% endblock content_content %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                     {% block content_sidebar %}*/
/*                     <h2>Sidebar</h2>*/
/*                     {% endblock content_sidebar %}*/
/*                 </div>*/
/*                 {% endblock content %}*/
/*             </div>*/
/*             {% endblock content_row %}*/
/* */
/*         {% block content_div_end %}</div>{% endblock content_div_end %}*/
/* */
/*         {% block footer_tag_start %}*/
/*         <footer>*/
/*         {% endblock footer_tag_start %}*/
/* */
/*         {% block footer %}*/
/*         <p>&copy; <a href="http://www.mohrenweiserpartner.de" target="_blank">Mohrenweiser & Partner</a> 2011-2015</p>*/
/*         {% endblock footer %}*/
/* */
/*         {% block footer_tag_end %}*/
/*         </footer>*/
/*         {% endblock footer_tag_end %}*/
/*     {% block container_div_end %}</div><!-- /container -->{% endblock container_div_end %}*/
/*     {% endblock container %}*/
/* */
/*     {% block body_end_before_js %}*/
/*     {% endblock body_end_before_js %}*/
/* */
/*     {% block foot_script %}*/
/*     {# To only use a subset or add more js overwrite and copy paste this block*/
/*     To speed up page loads save a copy of jQuery in your project and override this block to include the correct path*/
/*     Otherwise the regeneration is done on every load in dev more with use_controller: true*/
/*      #}*/
/*     {% block foot_script_assetic %}*/
/*         {# Please add the javascripts you need in your project #}*/
/*     {% endblock foot_script_assetic %}*/
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('[data-toggle="tooltip"]').tooltip();*/
/*             $('[data-toggle="popover"]').popover();*/
/*         });*/
/*     </script>*/
/*     {% endblock foot_script %}*/
/* {% endblock body %}*/
/* */
/* {% block body_end %}*/
/* {% endblock body_end %}*/
/* </body>*/
/* </html>*/
/* */
