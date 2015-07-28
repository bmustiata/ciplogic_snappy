<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
</head>
<body>
    <jdoc:include type="modules" name="mainmenu"/>

    <div class="breadcrumbs">
        <jdoc:include type="modules" name="content-top"/>
    </div>

    <jdoc:include type="modules" name="top" />
    <jdoc:include type="component" />

    <jdoc:include type="modules" name="right"/>

    <jdoc:include type="modules" name="user-bottom"/>

    <jdoc:include type="modules" name="user5"/>
    <jdoc:include type="modules" name="user6"/>
    <jdoc:include type="modules" name="user7"/>

    <jdoc:include type="modules" name="bottom" />
</body>
</html>
