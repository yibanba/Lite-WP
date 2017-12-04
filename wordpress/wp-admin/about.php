<?php
/**
 * About This Version administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( './admin.php' );

$title = __( 'About' );

list( $display_version ) = explode( '-', $wp_version );

include( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap">

    <h1>&nbsp;</h1>

<div class="about-text">
    感谢您使用 <a href="http://mixfs.com" target="_blank"><span style="color: #FF0000;">MixFS</span></a> 财会管理系统！<br /><br />
    您可以通过以下方式联系我：<br />
    E-mail: sph999@hotmail.com<br />
    QQ: 55517131
</div>




</div>
<?php

include( ABSPATH . 'wp-admin/admin-footer.php' );

// These are strings we may use to describe maintenance/security releases, where we aim for no new strings.
return;
