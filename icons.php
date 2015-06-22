<?php        
       defined('MOODLE_INTERNAL') || die;

       /**
         Mapping of Moodle Icons with Font Awesome Icons
        */
       $awesomeicons = array(
            /* /pix/a/ File Manager/Picker Icons */
            //'a/add_file' => 'fa-file',
            //'a/create_folder' => 'fa-folder',
            'a/download_all' => 'fa-sign-in fa-rotate-90',
            'a/help' => 'fa-question-circle',
            'a/logout' => 'fa-sign-out',
            'a/refresh' => 'fa-repeat',
            'a/search' => 'fa-search',
            'a/setting' => 'fa-cog',
            'a/view_icon_active' => 'fa-th-large',
            'a/view_list_active' => 'fa-bars',
            'a/view_tree_active' => 'fa-align-right fa-flip-vertical',
            /* /pix/b/ Big Icons - Used ? */
            /* /pix/c/ Calendar Icons - Used ? */
            'c/event' => 'fa-calendar-o',
            /* /pix/i/ */
            //'i/agg_mean' => 'fa-user',
            //'i/agg_sum' => 'fa-user',
            'i/ajaxloader' => 'fa-spinner fa-spin',
            'i/assignroles' => 'fa-user',
            'i/backup' => 'fa-sign-out fa-rotate-270',
            'i/badge' => 'fa-shield',
            'i/calc' => 'fa-building fa-flip-vertical',
            'i/caution' => 'fa-check text-warning',
            'i/checkpermissions' => 'fa-user',
            'i/cohort' => 'fa-group',
            //'i/completion-auto-enabled' => 'fa-check-square-o',
            //'i/completion-auto-fail' => 'fa-square-o fa-times',
            //'i/completion-auto-n' => 'fa-square-o',
            //'i/completion-auto-pass' => 'fa-check-square-o text-success',
            //'i/completion-auto-y' => 'fa-check-square-o text-info',
            'i/completion-manual-enabled' => 'fa-check-square-o',
            'i/completion-manual-n' => 'fa-square-o',
            'i/completion-manual-y' => 'fa-check-square-o text-info',
            'i/configlock' => 'fa-lock',
            'i/course' => 'fa-graduation-cap',
            'i/courseevent' => 'fa-graduation-cap',
            'i/down' => 'fa-arrow-down',
            'i/dragdrop' => 'fa-arrows',
            'i/edit' => 'fa-pencil',
            'i/enrolmentsuspended' => 'fa-times-circle-o',
            'i/enrolusers' => 'fa-user',
            'i/export' => 'fa-sign-out fa-rotate-270',
            'i/files' => 'fa-folder',
            'i/filter' => 'fa-filter',
            'i/flagged' => 'fa-flag',
            'i/folder' => 'fa-folder',
            'i/grade_correct' => 'fa-check text-success',
            'i/grade_incorrect' => 'fa-times text-danger',
            'i/grade_partillycorrect' => 'fa-check text-warning',
            'i/grades' => 'fa-list-alt fa-flip-horizontal',
            'i/group' => 'fa-group',
            'i/groupevent' => 'fa-group',
            'i/groupn' => 'fa-user',
            //'i/groups' => 'fa-user',
            'i/groupv' => 'fa-group',
            'i/hide' => 'fa-eye',
            'i/hierarchylock' => 'fa-warning',
            'i/import' => 'fa-sign-in fa-rotate-270',
            'i/info' => 'fa-info-circle',
            'i/invalid' => 'fa-times text-danger',
            'i/item' => 'fa-dot-circle-o',
            'i/loading_small' => 'fa-spinner',
            'i/mahara_host' => 'fa-spoon fa-flip-vertical text-success',
            'i/manual_item' => 'fa-pencil-square-o',
            'i/marked' => 'fa-lightbulb',
            'i/marker' => 'fa-lightbulb-o',
            'i/menu' => 'fa-list-alt',
            'i/mnet_host' => 'fa-share-alt',
            'i/moodle_host' => 'fa-share-alt',
            'i/move_2d' => 'fa-arrows',
            'i/navigationitem' => 'fa-dot-circle-o',
            'i/nosubcat' => 'fa-align-right fa-flip-vertical',
            'i/outcomes' => 'fa-magic',
            'i/permissionlock' => 'fa-lock',
            'i/permission' => 'fa-key',
            'i/preview' => 'fa-search',
            'i/publish' => 'fa-globe',
            'i/reload' => 'fa-repeat',
            'i/report' => 'fa-file-text fa-flip-horizontal',
            'i/restore' => 'fa-sign-in fa-rotate-90',
            'i/return' => 'fa-repeat fa-rotate-180',
            'i/risk_config' => 'fa-exclamation-triangle text-success',
            'i/risk_dataloss' => 'fa-play fa-rotate-90',
            'i/risk_managetrust' => 'fa-exclamation-triangle',
            'i/risk_personal' => 'fa-exclamation-triangle text-info',
            'i/risk_spam' => 'fa-exclamation-triangle text-warning',
            'i/risk_xss' => 'fa-exclamation-triangle text-danger',
            'i/rss' => 'fa-rss',
            'i/scales' => 'fa-sort-amount-asc fa-rotate-90',
            'i/scheduled' => 'fa-clock-o fa-flip-horizontal',
            'i/settings' => 'fa-cog',
            'i/show' => 'fa-eye-slash',
            'i/siteevent' => 'fa-calendar',
            'i/stats' => 'fa-bar-chart-o',
            'i/switchrole' => 'fa-user',
            'i/twoway' => 'fa-arrows-h',
            'i/unflagged' => 'fa-flag-o',
            'i/up' => 'fa-arrow-up',
            'i/user' => 'fa-user',
            'i/userevent' => 'fa-user',
            'i/users' => 'fa-user',
            'i/valid' => 'fa-check text-success',
            'i/withsubcat' => 'fa-sitemap',
            // /pix/t/
            't/add' => 'fa-plus',
            't/addcontact' => 'fa-plus',
            't/addfile' => 'fa-plus-circle text-success',
            't/approve' => 'fa-check',
            't/assignroles' => 'fa-user',
            't/award' => 'fa-trophy',
            't/backpack' => 'fa-suitecase',
            't/backup' => 'fa-sign-out fa-rotate-270',
            't/block' => 'fa-ban',
            't/block_to_dock' => 'fa-caret-square-o-left',
            't/block_to_dock_rtl' => 'fa-caret-square-o-right',
            't/calc' => 'fa-building fa-flip-vertical',
            't/calc_off' => 'fa-building-o fa-flip-vertical',
            't/check' => 'fa-check',
            't/cohort' => 'fa-group',
            't/collapsed' => 'fa-caret-right',
            't/collapsed_empty' => 'fa-angle-right',
            't/collapsed_empty_rtl' => 'fa-angle-left',
            't/collapsed_rtl' => 'fa-caret-left',
            't/contexmenu' => 'fa-indent',
            't/copy' => 'fa-files-o',
            't/delete' => 'fa-times',
            't/dock_to_block' => 'fa-caret-square-o-right',
            't/dock_to_block_rtl' => 'fa-caret-square-o-left',
            't/dockclose' => 'fa-times-circle-o',
            't/down' => 'fa-arrow-down',
            't/download' => 'fa-download',
            't/edit' => 'fa-cog',
            't/edit_menu' => 'fa-cogs',
            't/editstring' => 'fa-pencil',
            't/email' => 'fa-envelop-o',
            't/emailno' => 'fa-envelop-o text-strike',
            't/enroladd' => 'fa-plus-square',
            't/enrolusers' => 'fa-user',
            't/expanded' => 'fa-caret-down',
            't/go' => 'fa-circle text-success',
            't/grades' => 'fa-list-alt fa-flip-horizontal',
            't/groupn' => 'fa-user',
            //'t/groups' => 'fa-user',
            //'t/groupv' => 'fa-user',
            't/hide' => 'fa-eye',
            't/left' => 'fa-arrow-left',
            't/less' => 'fa-minus',
            't/lock' => 'fa-unlock-alt',
            't/locked' => 'fa-lock',
            //'t/locktime' => 'fa-lock',
            't/markasread' => 'fa-check',
            't/message' => 'fa-comment',
            't/messages' => 'fa-comments',
            't/more' => 'fa-plus',
            't/move' => 'fa-arrows-v',
            't/portfolioadd' => 'fa-file-text-o fa-flip-horizontal',
            't/preview' => 'fa-search',
            't/print' => 'fa-print',
            't/removecontact' => 'fa-times',
            't/restore' => 'fa-sign-in fa-rotate-90',
            't/right' => 'fa-arrow-right',
            't/show' => 'fa-eye-slash',
            't/sort' => 'fa-sort',
            't/sort_asc' => 'fa-sort-asc',
            't/sort_desc' => 'fa-sort-desc',
            't/stop' => 'fa-circle text-danger',
            't/switch_minus' => 'fa-minus-square-o',
            't/switch_plus' => 'fa-plus-square-o',
            't/switch_whole' => 'fa-share-square-o',
            't/unblock' => 'fa-check',
            't/unlock' => 'fa-lock',
            't/unlocked' => 'fa-unlock-alt',
            't/up' => 'fa-arrow-up',
            't/user' => 'fa-user',
            // Core Icons
            'docs' => 'fa-info-circle',
            'help' => 'fa-question-circle',
            'spacer' => 'spacer',
            // Other Icons
            'add' => 'fa-plus',
            'book' => 'fa-book',
            'chapter' => 'fa-file',
            'generate' => 'fa-gift',
        );

