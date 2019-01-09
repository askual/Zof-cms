<?php

return [
    'name' => 'Media',
    'name-text' => 'Theme',
    'admin-routes' => [
    	(object)['r'=>url('/admin/media/file'), 'n' => 'File Zone' ],
    	(object)['r'=>url('/admin/media/image'), 'n' => 'Image Zone' ],
    	// (object)['r'=>url('/admin/blog/all'), 'n' => 'All' ],
    ],
];
