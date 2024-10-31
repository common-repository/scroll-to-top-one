<?php
     $abError = false;
    include_once ABSPATH.'wp-admin/includes/plugin.php';
    if (!is_plugin_active('admin-builder/admin-builder.php')) {
      if(!function_exists('sample_admin_notice__success'))
           {
        function sample_admin_notice__success()
        {
          $pluginInstalled = false;
          if (!function_exists('get_plugins')) {
            require_once ABSPATH.'wp-admin/includes/plugin.php';
          }
          $allPlugins = get_plugins();
          foreach ($allPlugins as $key => $value) {
            if ($key === 'admin-builder/admin_builder.php') {
              $pluginInstalled = true;
            }
           }
            if ($pluginInstalled){
              if (!is_plugin_active('admin-builder/admin_builder.php')) {
                $abError = true;
                $url = admin_url();
                echo '<div class="notice notice-error is-dismissible">';
                echo '<h3>Admin Builder Plugin is not ACTIVE!</h3>';
                echo '<p>';
                echo 'To get the full functionality , activate Admin Builder from the <a href="'.$url.'/plugins.php">plugins directory</a>.';
                echo '</p>';
                echo '</div>';
              } else {
                $theJson = '';
              }
             } else {
              $abError = true;
              echo '<div class="notice notice-error is-dismissible">';
              echo '<h3>Admin Builder Plugin is not installed!</h3>';
              echo '<p>';
              echo 'To get the full functionality , install Admin Builder.';
              echo '</p>';
              echo '<p>';
              $plugin_name = 'admin-builder';
              $install_link = '<a href="'.esc_url(network_admin_url('plugin-install.php?tab=plugin-information&amp;plugin='.$plugin_name.'&amp;TB_iframe=true&amp;width=600&amp;height=550')).'" class="thickbox" title="More info about '.$plugin_name.'">Install '.$plugin_name.'</a>';
              echo $install_link;
              echo '</p>';
              echo '</div>';
             }
            }
            add_action('admin_notices', 'sample_admin_notice__success');
           }
           }
           if (!$abError) {

    $theJson = '{\"menus\":[{\"label\":\"Posts\",\"type\":\"post\",\"name\":\"posts\",\"unique\":true,\"children\":[],\"$$hashKey\":\"object:1669\"},{\"label\":\"Pages\",\"type\":\"page\",\"name\":\"pages\",\"unique\":true,\"children\":[],\"$$hashKey\":\"object:1670\"},{\"label\":\"Scroll To Top One\",\"type\":\"cPage\",\"name\":\"sTTO\",\"unique\":false,\"children\":[{\"label\":\"Tab1\",\"name\":\"tab1\",\"context\":\"normal\",\"priority\":\"default\",\"fields\":[{\"name\":\"buttonStyle\",\"type\":\"select\",\"label\":\"Button Style\",\"description\":\"Select The style of the button background container that will show\",\"selectType\":\"custom\",\"oArr\":[{\"label\":\"Default\",\"value\":\"rEdges\",\"$$hashKey\":\"object:2002\"},{\"label\":\"Round\",\"value\":\"round\",\"$$hashKey\":\"object:2013\"},{\"label\":\"Rounded Edges\",\"value\":\"rEdges\",\"$$hashKey\":\"object:2022\"}],\"$$hashKey\":\"object:1911\"},{\"name\":\"buttonSize\",\"type\":\"select\",\"label\":\"Button Size\",\"description\":\"The size of the Scroll to top Button\",\"selectType\":\"custom\",\"oArr\":[{\"label\":\"Default\",\"value\":\"32x32\",\"$$hashKey\":\"object:604\"},{\"label\":\"64 x 64\",\"value\":\"64\",\"$$hashKey\":\"object:615\"},{\"label\":\"32 x 32\",\"value\":\"32\",\"$$hashKey\":\"object:624\"},{\"label\":\"24 x 24\",\"value\":\"24\",\"$$hashKey\":\"object:633\"},{\"label\":\"20 x 20\",\"value\":\"20\",\"$$hashKey\":\"object:642\"}],\"$$hashKey\":\"object:513\"},{\"name\":\"colorpicker1\",\"type\":\"colorpicker\",\"label\":\"Background Color\",\"description\":\"The background color of the button\",\"format\":\"hex\",\"opacity\":true,\"$$hashKey\":\"object:2064\"},{\"name\":\"customIcon\",\"type\":\"upload\",\"label\":\"Custom Icon\",\"description\":\"Upload a custom image for icon to use\",\"tSizes\":[],\"$$hashKey\":\"object:2173\"},{\"name\":\"cPadding\",\"type\":\"textbox\",\"label\":\"Container Padding\",\"description\":\"Integer. In Pixels. Default 5 (if left empty).\",\"$$hashKey\":\"object:2795\"}],\"$$hashKey\":\"object:1732\"}],\"capability\":\"manage_options\",\"handler\":\"ab_sTTO_handler\",\"pageTitle\":\"Scroll To Top One Settings\",\"$$hashKey\":\"object:1691\"}]}';
if(class_exists('generalFunctionality')){
    $abGeneral = new generalFunctionality();
    $abGeneral->loadNew($theJson,$plugin_folder[$plugin_file]);
    }
   }
