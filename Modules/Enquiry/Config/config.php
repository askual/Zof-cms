<?php

return [
    'name' => 'Enquiry',
    'name-text' => 'Enquiry',
    'admin-routes' => [
    	(object)['r'=>url('/admin/enquiry'), 'n' => 'New' ],
    	(object)['r'=>url('/admin/enquiry/all'), 'n' => 'All' ],
    ],
];
