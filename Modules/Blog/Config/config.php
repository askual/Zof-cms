<?php

return [
    'name' => 'Blog',
    'name-text' => 'Blog',
    'admin-routes' => [
    	(object)['r'=>url('/admin/blog'), 'n' => 'New' ],
    	(object)['r'=>url('/admin/blog/all'), 'n' => 'All' ],
    ],
];
