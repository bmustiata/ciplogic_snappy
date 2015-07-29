<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
</head>
<body>
    <div class="section section-mainmenu">
        <div class="section-content">
            <div class="mainmenu">
                <jdoc:include type="modules" name="mainmenu"/>
            </div>
        </div>
    </div>

    <div class="section section-content-top">
        <div class="section-content">
            <div class="content-top">
                <jdoc:include type="modules" name="content-top"/>
            </div>
        </div>
    </div>

    <div class="section section-top">
        <div class="section-content">
            <div class="top">
                <jdoc:include type="modules" name="top" />
            </div>
        </div>
    </div>

    <div class="section section-component">
        <div class="section-content">
            <div class="component">
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="user-bottom"/>
            </div>
            <div class="right">
                <jdoc:include type="modules" name="right"/>
            </div>
        </div>
    </div>


    <div class="section section-user-bottom">
        <div class="user-bottom">
        </div>
    </div>

    <div class="section section-user567">
        <div class="user567">
            <div class="user5"><jdoc:include type="modules" name="user5"/></div>
            <div class="user6"><jdoc:include type="modules" name="user6"/></div>
            <div class="user7"><jdoc:include type="modules" name="user7"/></div>
        </div>
    </div>

    <div class="section section-bottom">
        <div class="bottom">
            <jdoc:include type="modules" name="bottom" />
        </div>
    </div>
</body>
</html>
