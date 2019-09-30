<?php include '_header.php' ?>
<span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
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
                     <p>Hi there,</p>
                     <p>
                        There is a new lead added by {creator} at <?php echo date('Y-m-d h:i:sa') ?>
                     </p>
                     <div>Lead details:</div>
                     <h2 style="margin-bottom: 5px">{lead_title}</h2>
                     <p>{lead_content}</p>
                     <hr>
                     <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                        <tbody>
                           <tr>
                           <td align="left">
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                 <tbody>
                                 <tr>
                                    <td> <a href="{lead_url}" target="_blank">View Lead</a> </td>
                                 </tr>
                                 </tbody>
                              </table>
                           </td>
                           </tr>
                        </tbody>
                     </table>
                     <!-- <p>This is a really simple email template. Its sole purpose is to get the recipient to click the button with no distractions.</p> -->
                     <p>Good luck! Hope it works.</p>
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
