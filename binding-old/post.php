<?php
/*
 * Post Content
 */
?>
<article class="entry post">
	<div class="inner">
		<header class="entry-header">
			<h2 class="entry-title">Post Title</h2>
			<div class="entry-meta">
				<a href="#" class="entry-date"><i class="icon-calendar-empty"></i> 14 July 2014</a>
				<span class="entry-author"><i class="icon-user"></i> John Regan</span>
			</div>
			<?php include( 'share.php' ) ?>
		</header>

		<div class="entry-content">
			<img src="assets/img/building.jpg" />

			<!-- Sample Content to Plugin to Template -->
			<h1>CSS Basic Elements</h1>

			<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

			<hr />

			<h1 id="headings">Headings</h1>

			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>

			<small><a href="#wrapper">[top]</a></small>
			<hr />


			<h1 id="paragraph">Paragraph</h1>

			<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

			<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

			<small><a href="#wrapper">[top]</a></small>
			<hr />

			<h1 id="list_types">List Types</h1>

			<h3>Definition List</h3>
			<dl>
				<dt>Definition List Title</dt>
				<dd>This is a definition list division.</dd>
			</dl>

			<h3>Ordered List</h3>
			<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ol>

			<h3>Unordered List</h3>
			<ul>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
			</ul>

			<small><a href="#wrapper">[top]</a></small>

			<hr />

			<h1 id="tables">Tables</h1>

			<table class="table" cellspacing="0" cellpadding="0">
				<tr>
					<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
				</tr>
				<tr>
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>
				<tr class="even">
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td><td>Division 2</td><td>Division 3</td>
				</tr>

			</table>

			<small><a href="#wrapper">[top]</a></small>
			<hr />

			<h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>

			<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>

			<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>

			<blockquote>
				"This stylesheet is going to help so freaking much." <br />-Blockquote
			</blockquote>

			<small><a href="#wrapper">[top]</a></small>
			<!-- End of Sample Content -->
		</div>

		<footer class="entry-footer">
			<div class="tags">
				<i class="icon-tags"></i><a href="#">tag1</a><a href="#">tag2</a>
			</div>
			<?php include( 'share.php' ) ?>
		</footer>

		<nav id="post-pagination" class="wow fadeInUp">
			<div class="left">
				<a href="#"><i class="icon-angle-left"></i> Some Awesome Post</a>
			</div>
			<div class="right">
				<a href="#">Some Awesome Post <i class="icon-angle-right"></i></a>
			</div>
		</nav>
	</div>
</article>