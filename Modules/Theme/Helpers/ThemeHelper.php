<?php

namespace Modules\Theme\Helpers;

class ThemeHelper {
	public static function httpException(){
		$code = $exception->getStatusCode();
        if ($code==404) {
            // Theme Urls

            // Redirection submodule aboutus => about
            
            $s = explode("/", url()->current())[3];
            if ($s!="admin") {
                return redirect()->route('theme.page.404');
            }else{
                return redirect()->route('admin.theme.page.404');
            }
        }elseif ($code == 500) {
            return redirect()->route('theme.page.500');
        }
	}
}