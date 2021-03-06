<?php

/*
 * Tmac PHP MVC framework
 * $Author: zhangwentao $
 * $Id: SmsLog.class.php 325 2016-05-31 10:07:35Z zhangwentao $
 */

/**
 * Description of article
 *
 * @author Tracy McGrady
 */
class dao_impl_SmsLog_base extends dao_BaseDao_base
{

    public function __construct( $link_identifier )
    {
        parent::__construct( $link_identifier );
        $this->table = DB_WS_PREFIX . 'sms_log';
        $this->setPrimaryKeyField( 'sms_id' );
    }

}
