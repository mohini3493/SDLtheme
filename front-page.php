<?php
/**
 * The template for displaying the front page.
 *
 * Self-contained: this design ships its own header nav and footer, wired to
 * #anchor links that scroll within this single page, so Hello Elementor's
 * header.php/footer.php are intentionally not used here (that would add a
 * second, unrelated nav on top). wp_head()/wp_footer() are still called so
 * plugins and any Elementor global CSS keep working. Every other page on the
 * site still goes through Elementor + Hello's header/footer as normal.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sdl_images = trailingslashit( get_stylesheet_directory_uri() ) . 'assets/images/';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SDL Solutions partners with government bodies to build smart, simple and scalable digital solutions that improve efficiency, transparency and service delivery.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== HEADER ===== -->
<header class="site-header" id="siteHeader">
  <div class="container header-inner">
    <a href="#home" class="logo">
      <img src="<?php echo esc_url( $sdl_images . 'sdl-logo.png' ); ?>" alt="SDL Solutions" class="logo-img">
    </a>

    <nav class="main-nav" id="mainNav">
      <a href="#home" class="active">Home</a>
      <a href="#about">About Us</a>
      <a href="#solutions">Solutions</a>
      <a href="#focus-areas">Focus Areas</a>
      <a href="#approach">Our Approach</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact Us</a>
    </nav>

    <a href="#contact" class="btn btn-primary btn-nav">Partner With Us <i data-icon="arrow"></i></a>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="container hero-inner">
    <div class="hero-content" data-reveal>
      <h1 class="hero-title">SDL Solutions<br><span class="hero-title-sub">Powering <em>Digital</em> <b>India</b></span></h1>
      <p class="hero-lead">Enabling Government. Empowering Citizens.<br>Accelerating Digital Transformation.</p>
      <p class="hero-desc">We partner with government bodies to build smart, simple and scalable digital solutions that improve efficiency, transparency and service delivery at every level.</p>
      <div class="hero-actions">
        <a href="#solutions" class="btn btn-primary">Explore Solutions <i data-icon="arrow"></i></a>
        <a href="#contact" class="btn btn-outline">Partner With Us <i data-icon="handshake"></i></a>
      </div>
    </div>

    <div class="hero-visual" data-reveal>
      <img src="<?php echo esc_url( $sdl_images . 'hero-visual.png' ); ?>" alt="SDL Solutions digital platform shown on laptop, tablet and phone in front of Parliament House and a dotted map of India" class="hero-img">
    </div>
  </div>

  <div class="container">
    <div class="stats-bar" data-reveal>
      <div class="stats-inner">
        <div class="stat-item">
          <span class="stat-icon"><i data-icon="bank"></i></span>
          <span class="stat-text">Empowering <b>Governments</b><small>with digital solutions</small></span>
        </div>
        <div class="stat-item">
          <span class="stat-icon"><i data-icon="people"></i></span>
          <span class="stat-text">Improving Lives of <b>Citizens</b><small>through technology</small></span>
        </div>
        <div class="stat-item">
          <span class="stat-icon"><i data-icon="trend"></i></span>
          <span class="stat-text">Driving <b>Efficiency</b><small>in public services</small></span>
        </div>
        <div class="stat-item">
          <span class="stat-icon"><i data-icon="shield"></i></span>
          <span class="stat-text">Ensuring <b>Security</b><small>&amp; data protection</small></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
  <div class="container">
    <div class="about-head">
      <span class="eyebrow" data-reveal>Who We Are</span>
      <h2 class="section-title" data-reveal>About <span>SDL Solutions</span></h2>
    </div>

    <div class="about-inner">
      <div class="about-text" data-reveal>
        <p>SDL Solutions is a technology-driven digital solutions company committed to strengthening India's digital ecosystem by helping government bodies, institutions, and public sector organizations transform everyday operations through smart, reliable, and scalable technology solutions.</p>
        <p>We bridge the gap between governance and citizens by developing digital platforms that simplify processes, improve accessibility, and create measurable impact at the grassroots level.</p>

        <div class="about-tags">
          <span class="about-tag"><i data-icon="bank"></i> Government-Focused</span>
          <span class="about-tag"><i data-icon="lock"></i> Secure by Design</span>
          <span class="about-tag"><i data-icon="people"></i> Citizen-Centric</span>
        </div>
      </div>

      <div class="about-highlight" data-reveal>
        <span class="about-highlight-icon"><i data-icon="rocket"></i></span>
        <h3>Building Technology for a Smarter India</h3>
        <p>From small administrative workflows to large-scale public initiatives, SDL Solutions works closely with government departments to identify challenges and implement digital-first solutions that enhance efficiency, transparency, and service delivery.</p>
        <p class="about-focus"><b>Our focus is simple:</b> Convert manual processes into intelligent digital experiences.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== SOLUTIONS ===== -->
<section class="solutions" id="solutions">
  <div class="container">
    <h2 class="section-title" data-reveal>Our Digital <span>Solutions</span></h2>

    <div class="solutions-grid">
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-blue"><i data-icon="monitor"></i></div>
        <h3>Government Portal &amp; Web Development</h3>
        <p>Secure, user-friendly and scalable websites and portals designed for government services, information access and citizen engagement.</p>
      </div>
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-green"><i data-icon="mobile"></i></div>
        <h3>Mobile Application Development</h3>
        <p>Android and iOS applications enabling departments to connect directly with citizens, field teams and stakeholders.</p>
      </div>
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-orange"><i data-icon="gear"></i></div>
        <h3>Process Automation Solutions</h3>
        <p>Digitizing repetitive tasks, approvals, reporting systems, documentation and internal workflows.</p>
      </div>
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-purple"><i data-icon="chart"></i></div>
        <h3>Data Management &amp; Digital Reporting</h3>
        <p>Creating dashboards, MIS systems, analytics platforms and real-time monitoring tools for informed decision-making.</p>
      </div>
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-teal"><i data-icon="lock"></i></div>
        <h3>Secure Digital Infrastructure</h3>
        <p>Reliable solutions built with a focus on data security, performance and long-term sustainability.</p>
      </div>
      <div class="solution-card" data-reveal>
        <div class="solution-icon icon-lightblue"><i data-icon="brain"></i></div>
        <h3>Emerging Technology Solutions</h3>
        <p>Implementation of AI-enabled tools, automation and modern technologies to improve governance efficiency.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOCUS AREAS ===== -->
<section class="focus-areas" id="focus-areas">
  <div class="container">
    <h2 class="section-title" data-reveal>Areas We <span>Support</span></h2>

    <div class="areas-grid" data-reveal>
      <div class="area-item"><span class="area-icon"><i data-icon="person"></i></span><p>Digital Governance Platforms</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="people2"></i></span><p>Citizen Service Applications</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="dept"></i></span><p>Department Management Systems</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="inspect"></i></span><p>Inspection &amp; Reporting Tools</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="training"></i></span><p>Training &amp; Learning Platforms</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="doc"></i></span><p>Document Digitization</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="pin"></i></span><p>Field Monitoring Solutions</p></div>
      <div class="area-item"><span class="area-icon"><i data-icon="megaphone"></i></span><p>Awareness &amp; Outreach Platforms</p></div>
    </div>
  </div>
</section>

<!-- ===== WHY SDL ===== -->
<section class="why-sdl" id="approach">
  <div class="container why-inner">
    <div class="why-left" data-reveal>
      <h2 class="section-title light">Why SDL <span>Solutions?</span></h2>
      <div class="why-grid">
        <div class="why-item">
          <span class="why-icon"><i data-icon="flag"></i></span>
          <h4>Aligned With Digital India Vision</h4>
          <p>We create technology solutions that support India's journey towards accessible and transparent digital governance.</p>
        </div>
        <div class="why-item">
          <span class="why-icon"><i data-icon="rocket"></i></span>
          <h4>Fast &amp; Practical Implementation</h4>
          <p>Solutions designed around real government challenges with a focus on usability and adoption.</p>
        </div>
        <div class="why-item">
          <span class="why-icon"><i data-icon="code"></i></span>
          <h4>Custom-Built Technology</h4>
          <p>Every department works differently. We build solutions according to specific workflows and objectives.</p>
        </div>
        <div class="why-item">
          <span class="why-icon"><i data-icon="handshake2"></i></span>
          <h4>Long-Term Partnership Approach</h4>
          <p>From consultation and development to deployment and support, we work as a digital transformation partner.</p>
        </div>
      </div>
    </div>

    <div class="why-right" data-reveal>
      <i data-icon="quote" class="quote-icon"></i>
      <h3>Transforming Ideas Into Digital Impact</h3>
      <p>At SDL Solutions, we believe every small digital improvement contributes towards building a stronger and smarter nation.</p>
      <p>Whether it is simplifying a citizen service, automating a department process, or creating a new digital platform, we are committed to delivering technology that creates real change.</p>
      <p class="why-signature">SDL Solutions<br>Powering Digital India.</p>
    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta" id="projects">
  <div class="container">
    <div class="cta-panel" data-reveal>
      <div class="cta-panel-content">
        <span class="eyebrow eyebrow-light">Let's Build Together</span>
        <h2 class="cta-panel-title">Let's build the future of <span>governance</span>, digitally.</h2>
        <p class="cta-panel-desc">Partner with SDL Solutions to bring secure, scalable and citizen-first digital transformation to your department or organization.</p>
        <div class="cta-panel-actions">
          <a href="#contact" class="btn btn-accent">Get In Touch <i data-icon="arrow"></i></a>
          <a href="#solutions" class="btn btn-outline-light">Explore Solutions</a>
        </div>
        <div class="cta-panel-trust">
          <span><i data-icon="shield"></i> Government-Grade Security</span>
          <span><i data-icon="pin"></i> Pan-India Reach</span>
          <span><i data-icon="handshake"></i> Dedicated Partner Support</span>
        </div>
      </div>

      <div class="cta-panel-visual" aria-hidden="true">
        <div class="cta-panel-dots"></div>

        <svg class="cta-panel-gate" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="ctaBldgGrad" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0" stop-color="#3fa8ac"/>
              <stop offset="1" stop-color="#7fd6d1"/>
            </linearGradient>
          </defs>

          <rect x="4" y="182" width="192" height="12" rx="4" fill="#0B1F6B"/>

          <rect x="10" y="128" width="40" height="54" rx="4" fill="#dde3fb" stroke="#0B1F6B" stroke-width="6"/>
          <rect x="25" y="140" width="10" height="8" rx="4" fill="#7c6cf0"/>
          <rect x="25" y="156" width="10" height="8" rx="4" fill="#7c6cf0"/>

          <rect x="150" y="128" width="40" height="54" rx="4" fill="#ffffff" stroke="#0B1F6B" stroke-width="6"/>
          <rect x="165" y="140" width="10" height="8" rx="4" fill="#7c6cf0"/>
          <rect x="165" y="156" width="10" height="8" rx="4" fill="#7c6cf0"/>

          <rect x="54" y="112" width="92" height="70" rx="4" fill="url(#ctaBldgGrad)" stroke="#0B1F6B" stroke-width="6"/>
          <rect x="66" y="126" width="9" height="34" rx="4" fill="#ffffff"/>
          <rect x="86" y="126" width="9" height="34" rx="4" fill="#ffffff"/>
          <rect x="105" y="126" width="9" height="34" rx="4" fill="#ffffff"/>
          <rect x="123" y="126" width="9" height="34" rx="4" fill="#ffffff"/>
          <rect x="90" y="160" width="20" height="22" rx="3" fill="#ff6a4d"/>

          <rect x="46" y="96" width="108" height="18" rx="3" fill="#ffffff" stroke="#0B1F6B" stroke-width="6"/>
          <rect x="60" y="88" width="80" height="10" rx="3" fill="#5fc9c8" stroke="#0B1F6B" stroke-width="5"/>

          <path d="M62 90 A38 46 0 0 1 100 44 L100 90 Z" fill="#d7deff" stroke="#0B1F6B" stroke-width="6" stroke-linejoin="round"/>
          <path d="M138 90 A38 46 0 0 0 100 44 L100 90 Z" fill="#ffffff" stroke="#0B1F6B" stroke-width="6" stroke-linejoin="round"/>

          <rect x="97" y="20" width="6" height="26" fill="#0B1F6B"/>
          <rect x="95" y="8" width="34" height="26" rx="5" fill="#0B1F6B"/>
          <rect x="104" y="16" width="16" height="10" rx="2" fill="#ff6a4d"/>
        </svg>

        <svg class="cta-panel-stripe" aria-hidden="true" viewBox="0 0 320 110" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10,95 C130,95 190,25 315,8" stroke="#F7941D" stroke-width="9" stroke-linecap="round" fill="none" opacity="0.9"/>
          <path d="M10,75 C140,118 200,55 315,38" stroke="#1AA24A" stroke-width="9" stroke-linecap="round" fill="none" opacity="0.9"/>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="site-footer" id="contact">
  <div class="container footer-grid">
    <div class="footer-col footer-about">
      <a href="#home" class="logo logo-footer">
        <img src="<?php echo esc_url( $sdl_images . 'sdl-logo-white.png' ); ?>" alt="SDL Solutions" class="logo-img">
      </a>
      <p>SDL Solutions is a technology-driven company committed to strengthening India's digital ecosystem through innovative and impactful solutions for government and public sector organizations.</p>
      <div class="social-icons">
        <a href="#" aria-label="LinkedIn"><i data-icon="linkedin"></i></a>
        <a href="#" aria-label="Twitter"><i data-icon="twitter"></i></a>
        <a href="#" aria-label="YouTube"><i data-icon="youtube"></i></a>
        <a href="#" aria-label="Threads"><i data-icon="threads"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Quick Links</h4>
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#solutions">Solutions</a>
      <a href="#focus-areas">Focus Areas</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact Us</a>
    </div>

    <div class="footer-col">
      <h4>Our Solutions</h4>
      <a href="#solutions">Web Development</a>
      <a href="#solutions">Mobile Apps</a>
      <a href="#solutions">Process Automation</a>
      <a href="#solutions">Data &amp; Reporting</a>
      <a href="#solutions">Digital Infrastructure</a>
      <a href="#solutions">Emerging Technologies</a>
    </div>

    <div class="footer-col">
      <h4>Contact Us</h4>
      <p class="footer-contact-item"><i data-icon="phone"></i> +91 73022 91211</p>
      <p class="footer-contact-item"><i data-icon="mail"></i> info@sdlsolutions.in</p>
      <p class="footer-contact-item"><i data-icon="pin"></i> A28, Janpath Marg, Sector 92, Noida, U.P. 201301</p>
      <a href="#contact" class="btn btn-outline-light">Partner With Us <i data-icon="handshake"></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>© <span id="year"></span> SDL Solutions. All Rights Reserved.</p>
      <p><a href="#">Privacy Policy</a> | <a href="#">Terms &amp; Conditions</a></p>
    </div>
  </div>
</footer>

<button id="backToTop" class="back-to-top" aria-label="Back to top"><i data-icon="arrow-up"></i></button>

<?php wp_footer(); ?>
</body>
</html>
