---
current_page: contact
page_title: Contact
background_image: /assets/images/backgrounds/laptop-almost-closed-in-the-dark.jpg
layout: src/_includes/base.php
---

<p class="w3-large">I love to read your messages, so feel free to send in an email anytime.</p>
<p id="email_address"><span class="w3-deep-purple w3-padding w3-round-large">angelica [dot] henderson [at] mailbox [dot] ict [dot] rocks</span></p>
<script type="text/javascript">
    var email_address = document.getElementById( "email_address" );
    var email_address_span = email_address.getElementsByTagName( "span" )[0];
    
    var the_email_address = email_address_span.innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );
    
    email_address.innerHTML = '<a href="mailto:' + the_email_address + '" target="_blank" class="w3-deep-purple w3-hover-pink w3-button w3-round-large"><b>' + the_email_address + '</b></a>';
</script>

