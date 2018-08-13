<?php include "includes/header.php"?>
<h2 class="pageID">Flexbox Research</h2>
     

<p>When you are deciding on the best way to lay out certain content components on a page, you have a number of tools or design elements to choose from.  You could use simple HTML5 (divs, sections, etc.) coupled with CSS, but this may become cumbersome if the content is not static.  Another way to approach layout is with the Flex Box Module, or flexbox.</p>

<h4>What is Flexbox?</h4>

<p>Flexbox is a layout tool that enables dynamic spacing and alignment of content.  So, if you have content that you would like to group together in a way that keeps the items aligned in a certain way and with consistent spacing between the items, but the content items themselves may periodically change, flexbox can do this for you in a more efficient manner.  But, one thing to keep in mind that flexbox is layout in one dimension; either horizontally or vertically (row OR column).</p>  

<p>An easy way to picture this is to think of a navigation bar.  When you first design the navigation bar you have a set number of pages to link to.  Utilizing a flexbox will allow you to ensure that all of the nav labels are uniformly spaced out across the page, or spaced in a manner that you choose.  It’s dynamic in that if you were to add a new link to the nav, the flexbox would adjust the spacing between the links to keep the uniformity of your layout.  And, if you had so many links that they couldn’t adequately fit across the page, flexbox has the ability to wrap to the next line.  Of course, as we are dealing with one dimension at a time, the same approach can be achieved in a column format as well.</p>

<h4>Flexbox vs. CSS Grid Layout</h4>

<p>While you can can create simple layouts with flexbox, it does have some limitations.  Since flexbox is really focused on one dimension at a time, if the amount of content dictates that it wraps to the next line, that next line is really its own flexbox container and may not align with the previous line as desired.  With more complex layouts, you might be better off using CSS Grid Layout instead.</p>
 
<p>From a big picture standpoint, flexbox fits the layout to the content you provide whereas Grid fits the content to the layout you provide.  Flexbox is one-dimensional and Grid determines layout in two dimensions.  As an example, say you have an image gallery.  Using flexbox, you can say that you want the pictures to be evenly spaced across the page.  But, if you have more pictures than can fit on the first row, they can wrap to the next line.  This next row may have less pictures than the first row but they are still evenly spaced so they will not align with the first row.  Using Grid layout, you are dictating that there are a specific number of columns in a row.  If the number of images exceeds the number of columns, the excess images move to the next row but still fall into the predetermined column spaces.  Everything is aligned.</p>
 
<p>Both Flexbox and Grid Layout have their pros and cons, but analyzing what will dictate how the page comes together,content or layout, will give you the direction as to which tool to use.</p>


 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Works Cited</h3>
 
 <ol>
    
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox"><span>Basic concepts of flexbox</span></a>, https://developer.mozilla.org</li>
    
     <li>Borgen, Per Harald, <a href="https://hackernoon.com/the-ultimate-css-battle-grid-vs-flexbox-d40da0449faf"><span>“The ultimate CSS battle:  Grid vs Flexbox”</span></a>, Hackernoon, Dec 10, 2017</li>
     
     <li>Andrew, Rachel, <a href="https://rachelandrew.co.uk/archives/2016/03/30/should-i-use-grid-or-flexbox/"><span>“Should I use Grid or Flexbox”</span></a>, rachelandrew.co.uk, Mar 30, 2016</li>

</ol>
  
</aside>
<!-- END RIGHT COL -->
 
<!-- everything below this comment is from the footer include file -->
<?php include "includes/footer.php"?>

