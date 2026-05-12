<?php

/**
 * Documentation page — ClientFlow skeleton
 */

global $meta;

$meta->title = 'Docs — ClientFlow';
$meta->description = 'Documentation for ClientFlow — guides, setup instructions, and feature references to help you install, configure, and use the plugin in WordPress.';
$meta->slug = 'docs';
get_header();

?>

<article class="docs-page">

	<div class="sections-header section section--gradient">
		<div class="container">
			<div class="animated-up">
				<h1 class="text-white">Documentation</h1>
				<p style="color: rgba(255,255,255,0.75);">Everything you need to install, configure, and get the most out of ClientFlow.</p>
			</div>
		</div>
	</div>

	<div class="docs-layout container">

		<!-- Sidebar Nav -->
		<nav class="docs-sidebar animated-up" aria-label="Documentation navigation">
			<ul class="docs-nav">
				<li><a href="#getting-started" class="docs-nav__link is-active">Getting Started</a></li>
				<li><a href="#installation" class="docs-nav__link">Installation</a></li>
				<li><a href="#quick-start" class="docs-nav__link">Quick Start</a></li>
				<li class="docs-nav__coming-soon"><span>Proposals</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>Payments &amp; Stripe</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>Client Portal</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>White Labelling</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>Team Seats</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>AI Features</span><span class="badge badge--soon">Coming soon</span></li>
				<li class="docs-nav__coming-soon"><span>Migration Guides</span><span class="badge badge--soon">Coming soon</span></li>
				<li><a href="#free-vs-pro" class="docs-nav__link">Free vs Pro</a></li>
			</ul>
		</nav>

		<!-- Main Content -->
		<div class="docs-content animated-up">

			<section class="docs-section stack" id="getting-started">
				<h2>Getting Started</h2>
				<p>ClientFlow is a WordPress plugin that turns your WordPress admin into a full client operating system. It covers the complete client lifecycle: proposals, payments, file delivery, approvals, and recurring retainers — all without leaving WordPress.</p>
				<p>This documentation will walk you through installation, initial setup, and the key features. Extended guides for proposals, payments, portal customisation, and team management are being written and will appear here shortly.</p>
			</section>

			<section class="docs-section stack" id="installation">
				<h2>Installation</h2>

				<h3>Requirements</h3>
				<ul>
					<li>WordPress 6.0 or later</li>
					<li>PHP 8.0 or later</li>
					<li>A Stripe account (for Pro/Agency payment features)</li>
				</ul>

				<h3>From WordPress.org (Free)</h3>
				<ol>
					<li>In your WordPress admin, go to <strong>Plugins &rarr; Add New</strong>.</li>
					<li>Search for <strong>ClientFlow</strong>.</li>
					<li>Click <strong>Install Now</strong> then <strong>Activate</strong>.</li>
				</ol>

				<h3>From a ZIP file (Pro / Agency)</h3>
				<ol>
					<li>Download the plugin ZIP from your Freemius licence dashboard.</li>
					<li>In your WordPress admin, go to <strong>Plugins &rarr; Add New &rarr; Upload Plugin</strong>.</li>
					<li>Choose the ZIP file and click <strong>Install Now</strong>, then <strong>Activate</strong>.</li>
					<li>You will be prompted to enter your licence key on first activation.</li>
				</ol>
			</section>

			<section class="docs-section stack" id="quick-start">
				<h2>Quick Start</h2>
				<p>Once the plugin is active, a <strong>ClientFlow</strong> menu item will appear in your WordPress admin sidebar.</p>

				<h3>Step 1 — Add your first client</h3>
				<p>Go to <strong>ClientFlow &rarr; Clients &rarr; Add New</strong>. Fill in the client&rsquo;s name, email, and any other details. This record will be reused across all proposals, portals, and invoices for that client.</p>

				<h3>Step 2 — Create a proposal</h3>
				<p>Go to <strong>ClientFlow &rarr; Proposals &rarr; New Proposal</strong>. Select your client, add proposal sections from the library, set line-item pricing, and add an e-signature block. When you&rsquo;re happy, click <strong>Send to Client</strong>.</p>

				<h3>Step 3 — Connect Stripe (Pro/Agency)</h3>
				<p>Go to <strong>ClientFlow &rarr; Settings &rarr; Payments</strong> and click <strong>Connect with Stripe</strong>. Follow the Stripe onboarding flow. Once connected, payments will be automatically collected when a client signs a proposal (if you have included a payment block).</p>

				<h3>Step 4 — Set up your client portal (Pro/Agency)</h3>
				<p>Go to <strong>ClientFlow &rarr; Settings &rarr; Portal</strong>. Upload your logo, choose your brand colours, and set the subdomain where clients will log in (e.g. <code>clients.yourstudio.com</code>). Point the subdomain to your WordPress site using a CNAME record in your domain DNS settings.</p>
			</section>

			<section class="docs-section stack" id="free-vs-pro">
				<h2>Free vs Pro</h2>
				<table>
					<thead>
						<tr>
							<th>Feature</th>
							<th>Free</th>
							<th>Pro</th>
							<th>Agency</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Proposals per month</td>
							<td>3</td>
							<td>Unlimited</td>
							<td>Unlimited</td>
						</tr>
						<tr>
							<td>Team seats</td>
							<td>1</td>
							<td>1</td>
							<td>5</td>
						</tr>
						<tr>
							<td>Client database</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Stripe payments</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>Client portal</td>
							<td>&mdash;</td>
							<td>View-only</td>
							<td>Full</td>
						</tr>
						<tr>
							<td>Projects &amp; messaging</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>&#10003;</td>
						</tr>
						<tr>
							<td>File uploads</td>
							<td>&mdash;</td>
							<td>&mdash;</td>
							<td>1 GB/project</td>
						</tr>
						<tr>
							<td>AI requests/month</td>
							<td>&mdash;</td>
							<td>100</td>
							<td>500</td>
						</tr>
					</tbody>
				</table>
			</section>

		</div><!-- /.docs-content -->

	</div><!-- /.docs-layout -->

</article>

<?php get_footer(); ?>
