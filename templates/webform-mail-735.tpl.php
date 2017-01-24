<?php

/**
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The webform submission.
 * - $email: The entire e-mail configuration settings.
 * - $user: The current user submitting the form. Always the Anonymous user
 *   (uid 0) for confidential submissions.
 * - $ip_address: The IP address of the user submitting the form or '(unknown)'
 *   for confidential submissions.
 *
 * The $email['email'] variable can be used to send different e-mails to different users
 * when using the "default" e-mail template.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Customer Comment Form | Union Binding Company</title>
    <style type="text/css">
              table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
              table[class=body] p,
              table[class=body] ul,
              table[class=body] ol,
              table[class=body] td,
              table[class=body] span,
              table[class=body] a {
                font-size: 16px !important; }
              table[class=body] .wrapper,
              table[class=body] .article {
                padding: 10px !important; }
              table[class=body] .content {
                padding: 0 !important; }
              table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
              table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
              table[class=body] .btn table {
                width: 100% !important; }
              table[class=body] .btn a {
                width: 100% !important; }
              table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}
            /* -------------------------------------
                PRESERVE THESE STYLES IN THE HEAD
            ------------------------------------- */
            @media all {
              .ExternalClass {
                width: 100%; }
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
              .ExternalClass font,
              .ExternalClass td,
              .ExternalClass div {
                line-height: 100%; }
              .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
              .btn-primary table td:hover {
                background-color: #f26522 !important; }
              .btn-primary a:hover {
                background-color: #f26522 !important;
                border-color: #f26522 !important; } }
    </style>
  </head>
  <body class="" style="background-color:#ffffff;font-family:sans-serif;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background-color:#ffffff;width:100%;">
      <tr>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">&nbsp;</td>
        <td class="container" style="font-family:sans-serif;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;Margin:0 auto !important;">
          <div class="content" style="box-sizing:border-box;display:block;Margin:0 auto;max-width:580px;padding:10px;">
            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader" style="color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0;">New Customer Comment Form has been delivered from unionbindingcompany.com</span>
            <table class="main" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fff;border-radius:3px;width:100%;">
              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family:sans-serif;font-size:14px;vertical-align:top;box-sizing:border-box;padding:20px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                    <tr>
                      <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">
                        <img src="https://www.unionbindingcompany.com/sites/all/themes/union1617/images/union-logo-lockup-header.png" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;"><br>
                        <br>
                        <h1 style="color:#000000;font-family:sans-serif;font-weight:400;line-height:1.4;margin:0;Margin-bottom:30px;font-size:25px;font-weight:800;text-align:left;text-transform:uppercase;">Customer Comment Form</h1>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;"><em>[submission:date:long]</em></p>
                        <br>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;"><b>From:</b> <?php print $submission->data[1][0] . ' ' . $submission->data[2][0]; ?></p>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;"><b>Email:</b> <?php print $submission->data[3][0]; ?></p>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;"><b>Comment:</b><br>
                          =========</p>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;"><?php print $submission->data[4][0]; ?></p>
                        <br>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;box-sizing:border-box;width:100%;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family:sans-serif;font-size:14px;vertical-align:top;padding-bottom:15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;width:auto;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family:sans-serif;font-size:14px;vertical-align:top;background-color:#ffffff;border-radius:5px;text-align:center;background-color:#DF672A;">
                                        <a href="[submission:url]" target="_blank" style="color:#3498db;text-decoration:underline;background-color:#ffffff;border:solid 1px #DF672A;border-radius:5px;box-sizing:border-box;color:#DF672A;cursor:pointer;display:inline-block;font-size:14px;font-weight:bold;margin:0;padding:12px 25px;text-decoration:none;text-transform:capitalize;background-color:#DF672A;border-color:#DF672A;color:#ffffff;">View Online</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;">[submission:url]</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- START FOOTER -->
            <div class="footer" style="clear:both;padding-top:10px;padding-left:20px;text-align:center;width:100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                <tr>
                  <td class="content-block" style="font-family:sans-serif;font-size:14px;vertical-align:top;color:#999999;font-size:12px;text-align:left;">
                    <span class="apple-link" style="color:#999999;font-size:12px;text-align:left;">Union Binding Company / Core Srl. All rights reserved. Colico, Italy / Seattle USA</span>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->
            <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>