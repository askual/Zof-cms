<?php

return [
    'name' => 'Theme',
    'name-text' => 'Theme',
    'admin-routes' => [
    	(object)['r'=>url('/admin/theme/setting'), 'n' => 'Setting' ],
    	(object)['r'=>url('/admin/theme/pages'), 'n' => 'Pages' ],
    	// (object)['r'=>url('/admin/blog/all'), 'n' => 'All' ],
    ],
];
