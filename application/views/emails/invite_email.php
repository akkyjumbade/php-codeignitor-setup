<?php include '_header.php' ?>
   <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
   <tr>
      <td>&nbsp;</td>
      <td class="container">
         <div class="content">
         <!-- START CENTERED WHITE CONTAINER -->
         <table role="presentation" class="main">
            <!-- START MAIN CONTENT AREA -->
            <tr>
               <td class="wrapper">
               <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                     <td>
                     <p>Dear {to_name},</p>
                     <p>
                        You have been invite by {invite_by_user_name}
                     </p>
                     <p>
                        Here is the link for you to join the {verification_url}
                     </p>
                     <hr>
                     <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                        <tbody>
                           <tr>
                           <td align="left">
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                 <tbody>
                                 <tr>
                                    <td> <a href="{verification_url}" target="_blank">Join</a> </td>
                                 </tr>
                                 </tbody>
                              </table>
                           </td>
                           </tr>
                        </tbody>
                     </table>
                     <!-- <p>This is a really simple email template. Its sole purpose is to get the recipient to click the button with no distractions.</p> -->
                     <p>Good luck!</p>
                     </td>
                  </tr>
               </table>
               </td>
            </tr>

         <!-- END MAIN CONTENT AREA -->
         </table>
         <!-- END CENTERED WHITE CONTAINER -->

         <!-- START FOOTER -->
         <div class="footer">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
               <tr>
               <td class="content-block">
                  <span class="apple-link"><?= config('app.name') ?></span>
                  <!-- <br>Don't like these emails? <a href="http://i.imgur.com/CScmqnj.gif">Unsubscribe</a>. -->
               </td>
               </tr>
               <tr>
               <td class="content-block powered-by">
                  Powered by <a href="<?= base_url() ?>"><?= config('app.name') ?></a>.
               </td>
               </tr>
            </table>
         </div>
         <!-- END FOOTER -->

         </div>
      </td>
      <td>&nbsp;</td>
   </tr>
</table>

<?php include '_footer.php' ?>
