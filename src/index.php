<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
    <jdoc:include type="modules" name="debug"/>

    <div class="section section-mainmenu">
        <div class="section-content">
            <div class="site-title">
                <div class="main-header">
                    ciplogic.com
                </div>
                <div class="sub-header">
                    Live with grace. Write superb software.
                </div>
            </div>
            <div class="mainmenu">
                <jdoc:include type="modules" name="mainmenu" style="html5"/>
            </div>
        </div>
    </div>

    <div class="section section-content-top">
        <div class="section-content">
            <div class="content-top">
                <jdoc:include type="modules" name="content-top" style="html5"/>
            </div>
        </div>
    </div>

    <div class="section section-top">
        <div class="section-content">
            <div class="top">
                <jdoc:include type="modules" name="top" style="html5"/>
            </div>
        </div>
    </div>

    <div class="section section-component">
        <div class="section-content">
            <div class="component">
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="user-bottom" style="html5"/>
            </div>
            <div class="right">
                <jdoc:include type="modules" name="right" style="html5"/>
            </div>
        </div>
    </div>


    <div class="section section-user-bottom">
        <div class="user-bottom">
            <div class="bottom">
                <jdoc:include type="modules" name="bottom" style="html5"/>
            </div>
        </div>
    </div>

    <div class="section section-user567">
        <div class="section-content">
            <div class="user567">
                <div class="user5"><jdoc:include type="modules" name="user5" style="html5"/></div>
                <div class="user6"><jdoc:include type="modules" name="user6" style="html5"/></div>
                <div class="user7"><jdoc:include type="modules" name="user7" style="html5"/></div>
            </div>
        </div>
    </div>

    <div class="section section-bottom">
        <div class="bottom">
            <jdoc:include type="modules" name="bottom" style="html5"/>
        </div>
    </div>
</body>
</html>
