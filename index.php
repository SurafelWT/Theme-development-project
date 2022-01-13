<?php
//get the header
get_headers();

if(have posts())
{
while(have posts())
the_post();
?>
<h1>?>php the_title()?></h1>

the_content();
}
//get the footer
get_footer();

?>
    
