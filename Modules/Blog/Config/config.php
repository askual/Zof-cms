<?php

return [
    'name' => 'Blog',
    'name-text' => 'Blogs',
    'version' => 0.1,
    'nametext' => 'Blogs',
    'admin-routes' => [
    	(object)['r'=>url('/admin/blog'), 'n' => 'New' ],
    	(object)['r'=>url('/admin/blog/all'), 'n' => 'All' ],
    ],
];
