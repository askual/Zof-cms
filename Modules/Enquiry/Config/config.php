<?php

return [
    'name' => 'Enquiry',
    'name-text' => 'Enquiry',
    'admin-routes' => [
    	(object)['r'=>url('/admin/enquiry'), 'n' => 'All' ],
    	(object)['r'=>url('/admin/enquiry/new'), 'n' => 'New' ],
    ],
];
