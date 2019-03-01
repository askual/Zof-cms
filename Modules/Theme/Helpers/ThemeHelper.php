<?php

namespace Modules\Theme\Helpers;

class ThemeHelper {
	public static function httpException($code){
        if ($code==404) {
            // Theme Urls

            // Redirection submodule aboutus => about
            
            $ee = explode("/", url()->current());
            if(isset($ee[3])){
                if ($ee[3]=="admin") {
                    return redirect()->route('admin.theme.page.404');
                }
            }
            
            return redirect()->route('theme.page.404');
        }elseif ($code == 500) {
            return redirect()->route('theme.page.500');
        }
	}
}