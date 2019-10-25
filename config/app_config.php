<?php
/*
  IMPORTANT
    All  Dev . Add Comment above  the adding code
*/
return  [
  //Author AKT Nov-15-2017
    'blade' =>  [ 
                'single_master' =>'layouts.admin_master',
                'user_blade' => 'layouts.user_master',
                'login' => 'layouts.user.login_view',
                ],
    'css' =>[
             "datepicker_css"=>"public/plugin/datepicker/bootstrap-datepicker.min.css",
             "datatable_css"=>"public/plugin/datatables/css/jquery.dataTables.min.css",
             
          ],
    'js'=>['datatable_js'=>'public/plugin/datatables/js/jquery.dataTables.min.js',
           
            "datepicker2_js"=>"public/plugin/datepicker2/js/datepicker.js",
          
        ],
];
