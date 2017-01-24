<?php
$visitorCountry = '';
if (isset($_SESSION['smart_ip']['location']['country_code'])) {
    $visitorCountry = $_SESSION['smart_ip']['location']['country_code'];
}
?>
<div id="email-signup-overlay" class="butthole-overlay">
    <div class="close-overlay" data-overlay-target="email-signup-overlay">
      <div class="overlay-bar-top"></div>
      <div class="overlay-bar-middle"></div>
      <div class="overlay-bar-bottom"></div>
    </div>
    <form id="email-mailchimp">
      <label for="submit-email">Join our email list.</label>
      <input id="submit-email" type="email" placeholder="Enter Your Email">
      <input id="email-submit-btn" class="close-overlay" data-overlay-target="email-signup-overlay" type="submit">
    </form>
</div>
<div id="nav-menu">
  <div id="nav-icon">
    <a href="<?php print base_path();?>">
      <svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
          <g transform="matrix(1,0,0,1,-9.7952,-82.149)">
              <path d="M29.618,104.275C29.618,105.171 28.891,105.9 27.993,105.9L21.597,105.9C20.7,105.9 19.973,105.171 19.973,104.275L19.973,94.084L10.314,94.084L10.314,99.279L12.811,101.772L12.811,106.536C12.811,109.35 15.092,111.631 17.906,111.631L31.685,111.631C34.499,111.631 36.779,109.35 36.779,106.536L36.779,101.772L39.277,99.279L39.277,94.084L29.618,94.084L29.618,104.275ZM10.314,82.667L10.314,88.436L20.65,88.437L24.796,92.583L28.941,88.437L39.277,88.437L39.277,82.667L10.314,82.667Z" style="fill:rgb(231,124,54);fill-rule:nonzero;"/>
          </g>
      </svg>
    </a>
  </div>
  <div id="nav-menu-wrapper">
    <nav>
      <div id="nav-left">
        <ul>
          <li><a href="<?php print base_path();?>snowboard-bindings">Bindings</a></li>
          <li class="dropdown-branch" data-dropdown="technology">
            <label for="technology-dropdown">Technology<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down.svg" data-dropdown="technology" id="technology-aria"></label>
            <input id="technology-dropdown" type="checkbox">
              <div class="dropdown-leaf" id="technology-dropdown">
                <ul>
                  <li><a href="<?php print base_path();?>technology/focus">100% Focus</a></li>
                  <li><a href="<?php print base_path();?>technology/design">Design Efficiency</a></li>
                  <li><a href="<?php print base_path();?>technology/materials">Materials Matter</a></li>
                  <li><a href="<?php print base_path();?>technology/adjustments">Adjustments Is Better</a></li>
                  <li><a href="<?php print base_path();?>technology/truflex">Truflex Evolution</a></li>
                  <li><a href="<?php print base_path();?>technology/forged-carbon">Forged Series</a></li>
                </ul>
              </div></a>
          </li>
          <li class="dropdown-branch" data-dropdown="team">
            <label for="team-dropdown">Team<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down.svg" data-dropdown="team" id="team-aria"></label>
            <input id="team-dropdown" type="checkbox">
              <div class="dropdown-leaf" id="team-dropdown">
                <ul>
                  <li><a href="<?php print base_path();?>team">The Riders</a></li>
                  <li><a href="<?php print base_path();?>team/movie">Team Movie</a></li>
                </ul>
              </div></a>
          </li>
        </ul>
      </div>
      <div id="nav-middle">
        <a href="<?php print base_path();?>">
          <h2>Union Binding Co.</h2>
        </a>
      </div>
      <div id="nav-right">
        <ul>
          <li><a href="<?php print base_path();?>blog">Social</a>
          </li>
          <li class="dropdown-branch" data-dropdown="support">
                <label for="support-dropdown">Support<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down.svg" data-dropdown="support" id="support-aria"></label>
                <input id="support-dropdown" type="checkbox">
                
                <div class="dropdown-leaf" id="support-dropdown">
                  <ul>
                    <li><a href="<?php print base_path();?>warranty">Warranty</a></li>
                    <li><a href="<?php print base_path();?>size-chart">Size Charts</a></li>
                    <li><a href="<?php print base_path();?>how-to-set-your-union-bindings">How To Setup Your Union Bindings</a></li>
                    <li><a href="<?php print base_path();?>where-to-buy">Where To Buy</a></li>
                  </ul>
                </div>    
              </a>
          </li>
          <li><a href="<?php print base_path();?>info-distribution">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div id="mobile-menu-btn">
  <label for="menu-btn"></label>
  <input id="menu-btn" type="checkbox">
  <div id="mobile-nav">
    <nav id="mobile-nav-wrapper">
      <ul>
        <li><a href="<?php print base_path();?>snowboard-bindings">Bindings</a></li>
        <li class="collapse" data-collapse="technology">
          <a>Technology<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down-gray.svg" data-dropdown="support"></a>
        </li>
        <li class="mobile-collapse" id="technology-collapse">
          <ul>
            <li><a href="<?php print base_path();?>technology/focus">100% Focus</a></li>
            <li><a href="<?php print base_path();?>technology/design">Design Efficiency</a></li>
            <li><a href="<?php print base_path();?>technology/materials">Materials Matter</a></li>
            <li><a href="<?php print base_path();?>technology/adjustments">Adjustments Is Better</a></li>
            <li><a href="<?php print base_path();?>technology/truflex">Truflex Evolution</a></li>
            <li><a href="<?php print base_path();?>technology/forged-carbon">Forged Series</a></li>
          </ul>
        </li>
        <li class="collapse" data-collapse="team">
            <a>Team<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down-gray.svg" data-dropdown="support">
        </li>
        <li class="mobile-collapse" id="team-collapse">
            <ul>
              <li><a href="<?php print base_path();?>team">The Riders</a></li>  
              <li><a href="<?php print base_path();?>team/movie">Team Movie</a></li>
            </ul>
        </li>
        <li><a href="<?php print base_path();?>blog">Social</a></li>
        <li class="collapse" data-collapse="support">
          <a>Support<img class="dropdown-aria" src="<?php print base_path();?>sites/all/themes/union1617/images/nav-aria-down-gray.svg" data-dropdown="support"></a>
          </li>
        <li class="mobile-collapse" id="support-collapse">
          <ul>
            <li><a href="<?php print base_path();?>warranty">Warranty</a></li>
            <li><a href="<?php print base_path();?>size-chart">Size Charts</a></li>
            <li><a href="<?php print base_path();?>how-to-set-your-union-bindings">How To Setup Your Union Bindings</a></li>
            <!--<li><a href="<?php //print base_path();?>frequently-asked-questions">Faq's</a></li>-->
            <li><a href="<?php print base_path();?>where-to-buy">Where To Buy</a></li>
          </ul>
        </li>
        <li><a href="<?php print base_path();?>info-distribution">Contact</a></li>
      </ul>
    </nav>
  </div>
    <div id="menu-bar-top"></div>
    <div id="menu-bar-middle"></div>
    <div id="menu-bar-bottom"></div>
  </div>
</div><!-- admin side bar -->
<?php 
    print render($title_prefix);
    print render($title_suffix);
    print $messages;
    print render($page['help']);

    global $user;
    if (!isset($account)) {
      $account = $user;
    }
    if ($page['content']) { 
      print render($page['content']);
    }
?>
<footer id="footer">
    <div id="stronger"><img src="<?php print base_path();?>sites/all/themes/union1617/images/stronger.svg"></div>
    <div id="email-signup"><a class="overlay-btn" data-overlay-target="email-signup-overlay" href="javascript:void(0)">Email Signup</a></div>
    <div id="copy-right">
        <p>© 2016-2017 Union Binding Company / Core Srl. All rights reserved. Colico, Italy / Seattle USA</p>
    </div>
</footer>
    <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5419-592-10-5144');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5419-592-10-5144/contact" title="Contact us" target="_blank">Questions? Feedback?</a></noscript>
<?php if ($account->uid == 1 || in_array('Administrators', $account->roles) || in_array('Team Riders', $account->roles)) { ?>
    <input id="client-side-admin-btn" type="checkbox">
    <aside id="client-side-admin">
          <label id="client-side-admin-label" for="client-side-admin-btn">
              <svg version="1.1" id="edit-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 478.703 478.703" style="enable-background:new 0 0 478.703 478.703;" xml:space="preserve">
              <g>
                  <g>
                      <path d="M454.2,189.101l-33.6-5.7c-3.5-11.3-8-22.2-13.5-32.6l19.8-27.7c8.4-11.8,7.1-27.9-3.2-38.1l-29.8-29.8
                          c-5.6-5.6-13-8.7-20.9-8.7c-6.2,0-12.1,1.9-17.1,5.5l-27.8,19.8c-10.8-5.7-22.1-10.4-33.8-13.9l-5.6-33.2
                          c-2.4-14.3-14.7-24.7-29.2-24.7h-42.1c-14.5,0-26.8,10.4-29.2,24.7l-5.8,34c-11.2,3.5-22.1,8.1-32.5,13.7l-27.5-19.8
                          c-5-3.6-11-5.5-17.2-5.5c-7.9,0-15.4,3.1-20.9,8.7l-29.9,29.8c-10.2,10.2-11.6,26.3-3.2,38.1l20,28.1
                          c-5.5,10.5-9.9,21.4-13.3,32.7l-33.2,5.6c-14.3,2.4-24.7,14.7-24.7,29.2v42.1c0,14.5,10.4,26.8,24.7,29.2l34,5.8
                          c3.5,11.2,8.1,22.1,13.7,32.5l-19.7,27.4c-8.4,11.8-7.1,27.9,3.2,38.1l29.8,29.8c5.6,5.6,13,8.7,20.9,8.7c6.2,0,12.1-1.9,17.1-5.5
                          l28.1-20c10.1,5.3,20.7,9.6,31.6,13l5.6,33.6c2.4,14.3,14.7,24.7,29.2,24.7h42.2c14.5,0,26.8-10.4,29.2-24.7l5.7-33.6
                          c11.3-3.5,22.2-8,32.6-13.5l27.7,19.8c5,3.6,11,5.5,17.2,5.5l0,0c7.9,0,15.3-3.1,20.9-8.7l29.8-29.8c10.2-10.2,11.6-26.3,3.2-38.1
                          l-19.8-27.8c5.5-10.5,10.1-21.4,13.5-32.6l33.6-5.6c14.3-2.4,24.7-14.7,24.7-29.2v-42.1
                          C478.9,203.801,468.5,191.501,454.2,189.101z M451.9,260.401c0,1.3-0.9,2.4-2.2,2.6l-42,7c-5.3,0.9-9.5,4.8-10.8,9.9
                          c-3.8,14.7-9.6,28.8-17.4,41.9c-2.7,4.6-2.5,10.3,0.6,14.7l24.7,34.8c0.7,1,0.6,2.5-0.3,3.4l-29.8,29.8c-0.7,0.7-1.4,0.8-1.9,0.8
                          c-0.6,0-1.1-0.2-1.5-0.5l-34.7-24.7c-4.3-3.1-10.1-3.3-14.7-0.6c-13.1,7.8-27.2,13.6-41.9,17.4c-5.2,1.3-9.1,5.6-9.9,10.8l-7.1,42
                          c-0.2,1.3-1.3,2.2-2.6,2.2h-42.1c-1.3,0-2.4-0.9-2.6-2.2l-7-42c-0.9-5.3-4.8-9.5-9.9-10.8c-14.3-3.7-28.1-9.4-41-16.8
                          c-2.1-1.2-4.5-1.8-6.8-1.8c-2.7,0-5.5,0.8-7.8,2.5l-35,24.9c-0.5,0.3-1,0.5-1.5,0.5c-0.4,0-1.2-0.1-1.9-0.8l-29.8-29.8
                          c-0.9-0.9-1-2.3-0.3-3.4l24.6-34.5c3.1-4.4,3.3-10.2,0.6-14.8c-7.8-13-13.8-27.1-17.6-41.8c-1.4-5.1-5.6-9-10.8-9.9l-42.3-7.2
                          c-1.3-0.2-2.2-1.3-2.2-2.6v-42.1c0-1.3,0.9-2.4,2.2-2.6l41.7-7c5.3-0.9,9.6-4.8,10.9-10c3.7-14.7,9.4-28.9,17.1-42
                          c2.7-4.6,2.4-10.3-0.7-14.6l-24.9-35c-0.7-1-0.6-2.5,0.3-3.4l29.8-29.8c0.7-0.7,1.4-0.8,1.9-0.8c0.6,0,1.1,0.2,1.5,0.5l34.5,24.6
                          c4.4,3.1,10.2,3.3,14.8,0.6c13-7.8,27.1-13.8,41.8-17.6c5.1-1.4,9-5.6,9.9-10.8l7.2-42.3c0.2-1.3,1.3-2.2,2.6-2.2h42.1
                          c1.3,0,2.4,0.9,2.6,2.2l7,41.7c0.9,5.3,4.8,9.6,10,10.9c15.1,3.8,29.5,9.7,42.9,17.6c4.6,2.7,10.3,2.5,14.7-0.6l34.5-24.8
                          c0.5-0.3,1-0.5,1.5-0.5c0.4,0,1.2,0.1,1.9,0.8l29.8,29.8c0.9,0.9,1,2.3,0.3,3.4l-24.7,34.7c-3.1,4.3-3.3,10.1-0.6,14.7
                          c7.8,13.1,13.6,27.2,17.4,41.9c1.3,5.2,5.6,9.1,10.8,9.9l42,7.1c1.3,0.2,2.2,1.3,2.2,2.6v42.1H451.9z"/>
                      <path d="M239.4,136.001c-57,0-103.3,46.3-103.3,103.3s46.3,103.3,103.3,103.3s103.3-46.3,103.3-103.3S296.4,136.001,239.4,136.001
                          z M239.4,315.601c-42.1,0-76.3-34.2-76.3-76.3s34.2-76.3,76.3-76.3s76.3,34.2,76.3,76.3S281.5,315.601,239.4,315.601z"/>
                  </g>
              </g>
              </svg>
          </label>
          <h3>Admin Links</h3>
          <div id="admin-scroll">
            <?php
                if ($tabs && $node->nid) { 
                    //print render($tabs);

                    print '<ul id="edit-link"><li><a href="'. base_path() .'node/' . $node->nid .'/edit" target="_blank">Edit Current Page</a></li></ul>';
                }else{
                  print '<ul id="edit-link"><li><a href="javascript:void(0)">Edit Unavailable</a></li></ul>';
                }
            ?>
            <ul>
              <li>
                    <a href="<?php print base_path(); ?>node/2/edit" target="_blank">Update Front Sliders</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/add/blog" target="_blank">Write Blog Post</a>
                </li>
                <li>
                    <label for="edit-bindings">Edit Bindings</label>
                    <input id="edit-bindings" type="checkbox">
                    <div id="edit-bindings" class="additional-options">
                        <?php print views_embed_view('bindings', 'block_1'); ?>
                    </div>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/add/binding" target="_blank">Add New Binding</a>
                </li>
                <li>
                    <label for="edit-pro-riders">Edit Pro Riders</label>
                    <input id="edit-pro-riders" type="checkbox">
                    <div id="edit-pro-riders" class="additional-options">
                        <?php print views_embed_view('pro_riders', 'block_1'); ?>
                    </div>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/add/team-profile" target="_blank">Add Pro Rider</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/633/edit" target="_blank">Team Roster</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/315/edit" target="_blank">Distributor List</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>admin/commerce/products/variations" target="_blank">Product SKUs</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>admin/commerce/orders" target="_blank">E-Commerce Orders</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>node/add/shop-online" target="_blank">Add Online Dealer</a>
                </li>
                <li>
                    <a href="storemapper.co" target="_blank">Store Mapper</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>user" target="_blank">Dashboard</a>
                </li>
                <li>
                    <a href="<?php print base_path(); ?>user/logout" target="_blank">Logout</a>
                </li>
            </ul>
        </div>
    </aside>
<?php } ?>
