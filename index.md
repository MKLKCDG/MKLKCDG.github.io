---
layout: home
title: Home
---

<section class="hero" id="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-avatar">
        <div class="hexagon-wrapper">
          <div class="hexagon">
            <img src="{{ site.photo | relative_url }}" alt="{{ site.author.name }}">
          </div>
        </div>
        <div class="hexagon-glow"></div>
      </div>
      <h1 class="hero-title">{{ site.title }}</h1>
      <div class="hero-typewriter">
        <span class="typewriter-text" id="typewriter"></span>
        <span class="typewriter-cursor">|</span>
      </div>
      <div class="hero-social">
        <a href="https://github.com/{{ site.social.github }}" target="_blank" rel="noopener" class="social-link" aria-label="GitHub">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
        </a>
        <a href="https://linkedin.com/in/{{ site.social.linkedin }}" target="_blank" rel="noopener" class="social-link" aria-label="LinkedIn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
        <a href="/cv" class="social-link" aria-label="CV">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        </a>
      </div>
      <div class="hero-scroll">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/></svg>
      </div>
    </div>
  </div>
</section>

<section class="section about-section" id="about">
  <div class="container">
    <h2 class="section-title"><span class="accent">&gt;</span> Hakkımda</h2>
    <div class="about-content">
      <p>
        Yeni teknolojileri yakından takip eden ve siber güvenlik alanındaki gelişmelere odaklanarak sürekli kendini geliştiren bir Bilgisayar Mühendisiyim. Siber güvenliği sadece bir meslek değil, aynı zamanda teknik bir tutku olarak görüyorum. Sektördeki dinamiklere ayak uydurarak özellikle sızma testleri, zafiyet araştırmaları ve defansif güvenlik çözümleri üzerine somut projeler üretmeye ve kendimi bu alanda geliştirmeye devam ediyorum.
      </p>
      <div class="about-stats">
        <div class="stat">
          <span class="stat-number">7+</span>
          <span class="stat-label">CVE</span>
        </div>
        <div class="stat">
          <span class="stat-number">3+</span>
          <span class="stat-label">Yıl Deneyim</span>
        </div>
        <div class="stat">
          <span class="stat-number">10+</span>
          <span class="stat-label">Sertifika</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section skills-section" id="skills">
  <div class="container">
    <h2 class="section-title"><span class="accent">&gt;</span> Yetkinlikler</h2>
    <div class="skills-grid">
      <div class="skill-category">
        <h3>Sızma Testleri</h3>
        <div class="skill-tags">
          <span class="skill-tag">Web Pentest</span>
          <span class="skill-tag">Network Pentest</span>
          <span class="skill-tag">Wi-Fi Pentest</span>
          <span class="skill-tag">Red Teaming</span>
          <span class="skill-tag">OWASP Top 10</span>
        </div>
      </div>
      <div class="skill-category">
        <h3>Defansif Güvenlik</h3>
        <div class="skill-tags">
          <span class="skill-tag">Honeypot Deployment</span>
          <span class="skill-tag">DDoS Mitigation</span>
          <span class="skill-tag">SOC</span>
        </div>
      </div>
      <div class="skill-category">
        <h3>Araştırma & Araçlar</h3>
        <div class="skill-tags">
          <span class="skill-tag">Vulnerability Research</span>
          <span class="skill-tag">Burp Suite</span>
          <span class="skill-tag">Metasploit</span>
          <span class="skill-tag">Wireshark</span>
          <span class="skill-tag">Nmap</span>
        </div>
      </div>
      <div class="skill-category">
        <h3>Geliştirme</h3>
        <div class="skill-tags">
          <span class="skill-tag">Python</span>
          <span class="skill-tag">Flask</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Bash</span>
          <span class="skill-tag">SQL</span>
          <span class="skill-tag">Docker</span>
        </div>
      </div>
      <div class="skill-category">
        <h3>Sertifikalar</h3>
        <div class="cert-list">
          <span class="cert-item">eWTPXv3</span>
          <span class="cert-item">eJPTv2</span>
          <span class="cert-item">Certified Cloud Associate</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cve-section" id="cve">
  <div class="container">
    <h2 class="section-title"><span class="accent">&gt;</span> CVE Bulguları</h2>
    <p class="section-desc">
      CubeCart platformunda keşfettiğim 7 güvenlik açığı, atanan CVE kodlarıyla birlikte 
      cve.org ve GitHub Advisory listelerinde yerlerini aldılar.
    </p>
    <div class="cve-grid">
      <div class="cve-card">
        <div class="cve-number">#01</div>
        <div class="cve-id">CVE-2026-54642</div>
        <div class="cve-title">CSRF Protection Missing</div>
        <div class="cve-severity severity-medium">Medium</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#02</div>
        <div class="cve-id">CVE-2026-54647</div>
        <div class="cve-title">SQL Injection</div>
        <div class="cve-severity severity-high">High</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#03</div>
        <div class="cve-id">CVE-2026-54646</div>
        <div class="cve-title">SQL Identifier Injection</div>
        <div class="cve-severity severity-high">High</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#04</div>
        <div class="cve-id">CVE-2026-54645</div>
        <div class="cve-title">Stored XSS Bypass</div>
        <div class="cve-severity severity-critical">Critical</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#05</div>
        <div class="cve-id">CVE-2026-54648</div>
        <div class="cve-title">Missing Auth Check</div>
        <div class="cve-severity severity-high">High</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#06</div>
        <div class="cve-id">CVE-2026-54644</div>
        <div class="cve-title">Anchor Tag XSS</div>
        <div class="cve-severity severity-medium">Medium</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
      <div class="cve-card">
        <div class="cve-number">#07</div>
        <div class="cve-id">CVE-2026-54643</div>
        <div class="cve-title">Order Note Deletion Auth</div>
        <div class="cve-severity severity-medium">Medium</div>
        <a href="#" class="cve-link">Detay &rarr;</a>
      </div>
    </div>
  </div>
</section>

<section class="section projects-section" id="projects">
  <div class="container">
    <h2 class="section-title"><span class="accent">&gt;</span> Projeler</h2>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Hack Me If You Can</h3>
        <p>Python Flask ile geliştirilmiş, eğitim amaçlı zafiyetli web uygulaması simülasyonu.</p>
        <div class="project-tags">
          <span>Flask</span>
          <span>Python</span>
          <span>Web Security</span>
        </div>
        <a href="#" class="project-link">Detay &rarr;</a>
      </div>
      <div class="project-card">
        <div class="project-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <h3>Honeypot Deployment</h3>
        <p>Kurumsal firmalar için honeypot kurulumu, yapılandırılması ve siber güvenlik danışmanlığı.</p>
        <div class="project-tags">
          <span>Honeypot</span>
          <span>Security</span>
          <span>Infrastructure</span>
        </div>
        <a href="#" class="project-link">Detay &rarr;</a>
      </div>
    </div>
  </div>
</section>
