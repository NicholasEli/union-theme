<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: verdana, arial, helvetica; font-size: 10px;">
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tr>
                    <td align="center" valign="middle" nowrap="nowrap" style="line-height: 1.6em;">
                      <p><img src="<?php print $GLOBALS['base_url'] .'/'. drupal_get_path('theme', 'union1617'); ?>/images/union-logo-lockup-header.png" style="width:100%; height: auto;" />
                    </p>
                    <p>&nbsp;</p></td>
                  </tr>
                </table>
              </td>
            </tr>
            
            
            <tr>
            	<td>
                	<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
                    	<tr>
                        	<td>
                            	<table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: verdana, arial, helvetica;">
                                	<tr>
                          <td valign="top" width="50%" id="customer-info">
                            <br/>
                            <b><?php print t('Account No:'); ?></b> <?php print $info['order_uid']; ?><br/>
                            <br/>
                            <b><?php print t('Order Date:'); ?></b> <?php print date('F j, Y', $info['order_created']); ?><br/>
                            <br/>
                            <h3 style="font-size:13px; margin-bottom:0px; padding-bottom:0;"><b><?php print t('Billing Address:'); ?></b></h3>
                            <?php print isset($info['customer_billing']) ? $info['customer_billing'] : ''; ?><br />
                          </td>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Order #:'); ?></b> <?php print $info['order_number']; ?><br/>
                            <br/>
                            <b><?php print t('Email Address:'); ?></b> <?php print $info['order_mail']; ?><br/>
                            <br/>
                            <h3 style="font-size:13px; margin-bottom:0px; padding-bottom:0;"><b><?php print t('Shipping Address:'); ?></b></h3>
                            <?php print isset($info['customer_shipping']) ? $info['customer_shipping'] : ''; ?><br/>
                          </td>
                        </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            <tr>
              <td>
                <table class="products" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tbody>
                    <tr>
                      <td class="line-items"><?php print isset($info['line_items']) ? $info['line_items'] : ''; ?></td>
                    </tr>
                    <tr>
                      <td><?php print isset($info['order_total']) ? $info['order_total'] : ''; ?></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            
            <tr>
            	<td><br><br></td>
            </tr>
            
            
            <tr>
              <td>
                <table width="100%">
                  <tr>
                    <td colspan="2" style="background: #EEE; color: #666; padding: 1em; font-size: 0.7em; line-height: 1.6em; border-top: #8E979D 1px solid; text-align: center;">
                      Union Binding Company | 2700 West Commodore Way Bldg A1 Suite 301 Seattle, WA 98199 | Phone (206) 632-1601
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <?php //print print_r($info); ?>
    <?php //print_r($order); ?>
  </body>
</html>