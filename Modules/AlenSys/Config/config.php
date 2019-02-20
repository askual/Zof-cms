<?php

return [
    'name' => 'AlenSys',
    'name-text' => 'Alen Registration System',
    'admin-routes' => [
    	(object)['r'=>url('/admin/alensys/members'), 'n' => 'Members' ],
    	(object)['r'=>url('/admin/alensys/payment'), 'n' => 'Payment' ],
    	(object)['r'=>url('/admin/alensys/setting'), 'n' => 'Setting' ],
    ],
];


/*
    Member
        name
    Payment
        month [1,2,3,4,...,12]
        member
s*/

        

    
