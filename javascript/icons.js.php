var awesomeicons = {
<?php
     require_once('../../../config.php');
     require_once($CFG->dirroot.'/theme/upo/icons.php');
     foreach($awesomeicons as $moodleicon => $awesomeicon) {
         echo '\''.$moodleicon.'\': \''.$awesomeicon.'\',';
     }
?>
        };

function swapicon () {
    var iconclasses = ['.iconsmall', '.smallicon', '.iconhelp', '.icon'];
    for (i=0; i<iconclasses.length; i++) {
        var icons = Y.all(iconclasses[i]);
        var smallicon = iconclasses[i].indexOf('small') > 0;
        icons.each(function(node) {
            if (! node.hasClass('fa')) {
                iconname = node.getAttribute('src');
                matchedname = node.getAttribute('src').match(/(\/[it])?\/[a-z_]+$/);
                if (matchedname !== null) {
                    iconname = matchedname[0].substr(1);
                    faicon = '';
                    if (eval('awesomeicons[\''+iconname+'\']') !== undefined) {
                        faicon = eval('awesomeicons[\''+iconname+'\']');
                    } else if (iconname != 'icon') {
                        //faicon = 'fa-html5 '+matchedname[0].substr(1);
                    }
                    if (faicon !== '') {
                        icontitle = node.getAttribute('title');
                        iconclass = node.getAttribute('class');
                        if (smallicon) {
                            newicon = Y.Node.create('<span class="fa"></span>');
                        } else {
                            newicon = Y.Node.create('<span class="fa fa-lg"></span>');
                        }
                        newicon.setAttribute('title', icontitle);
                        newicon.addClass(faicon);
                        if (iconclass != '') {
                            newicon.addClass(iconclass);
                        }
                        node.replace(newicon);
                    }
                }
            }
        });
    }
}

setInterval("Y.on('contentready', swapicon, '#page');", 10);
