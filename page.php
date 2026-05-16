<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <style>
    :root{--bg:#f8f2e5;--paper:#fffaf1;--navy:#142638;--gold:#b5894a;--muted:#65717d;--line:#e6dac6;}
    body{margin:0;background:var(--bg);color:var(--navy);font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;}
    a{color:var(--gold);font-weight:800;}
    .wrap{max-width:1040px;margin:0 auto;padding:0 24px;}
    header{background:#090807;padding:20px 0;}
    .brand{display:flex;align-items:center;justify-content:space-between;gap:20px;}
    .brand img{height:58px;width:auto;display:block;}
    .brand nav{display:flex;gap:18px;flex-wrap:wrap;}
    .brand nav a{color:#fff3dc;text-decoration:none;font-size:.95rem;}
    .hero{padding:70px 0 42px;border-bottom:1px solid var(--line);}
    .eyebrow{display:inline-block;padding:8px 14px;border:1px solid var(--line);border-radius:999px;color:var(--gold);font-weight:900;font-size:.78rem;letter-spacing:.08em;text-transform:uppercase;background:rgba(255,255,255,.45);}
    h1{font-size:clamp(2.2rem,5vw,4.5rem);line-height:1.04;margin:20px 0 16px;letter-spacing:-.05em;}
    main{padding:52px 0 80px;background:linear-gradient(180deg,var(--paper),var(--bg));}
    .content{background:rgba(255,255,255,.62);border:1px solid var(--line);border-radius:28px;padding:clamp(24px,5vw,54px);box-shadow:0 18px 50px rgba(20,38,56,.08);line-height:1.75;}
    .content h2{margin-top:2rem;color:var(--navy);font-size:clamp(1.25rem,2vw,1.75rem);} .content p{margin-bottom:1rem;}
    footer{background:#111820;color:#d8d0c4;padding:30px 0;} footer .wrap{display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap;} footer a{color:#fff3dc;}
  </style>
</head>
<body <?php body_class( 'kaje-legal-page' ); ?>>
<?php wp_body_open(); ?>
<header><div class="wrap brand"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-kaje-header-horizontal.png' ); ?>" alt="KAJE"></a><nav><a href="/">Site institucional</a><a href="https://loja.kajeservicos.com.br/">Loja online</a><a href="https://www.calendly.com/kerly-kajeservicos" target="_blank" rel="noopener">Agendamento</a></nav></div></header>
<section class="hero"><div class="wrap"><span class="eyebrow">KAJE Serviços</span><h1><?php the_title(); ?></h1><p>Informações importantes sobre a contratação de serviços administrativos, consultivos e operacionais da KAJE.</p></div></section>
<main><div class="wrap"><article class="content"><?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?></article></div></main>
<footer><div class="wrap"><span>© <?php echo esc_html( date( 'Y' ) ); ?> KAJE Serviços.</span><span><a href="mailto:kerly@kajeservicos.com.br">kerly@kajeservicos.com.br</a></span></div></footer>
<?php wp_footer(); ?>
</body>
</html>
