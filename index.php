<?php
// Field Coat Meteor — homepage
$showerMonths = [1, 4, 5, 8, 10, 11, 12];
$now = (int) date('n');
$nextMonth = $showerMonths[0];
foreach ($showerMonths as $sm) { if ($sm >= $now) { $nextMonth = $sm; break; } }
$season = in_array($now, [12, 1, 2]) ? 'Winter' : (in_array($now, [3, 4, 5]) ? 'Spring' : (in_array($now, [6, 7, 8]) ? 'Summer' : 'Autumn'));
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dispatch_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'dispatch_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['callsign'])) { $ok = true; $msg = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Signed up. Your first Field Dispatch arrives at the start of next season.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Field Coat Meteor | Outdoor Jacket Guide: Types, Fabrics, Layering &amp; Care</title>
<meta name="description" content="An independent guide to outdoor jackets: field jackets, waxed cotton, rain shells and insulated coats, fabric comparisons, layering, waterproof ratings and care.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.fieldcoatmeteor.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Field Coat Meteor">
<meta property="og:title" content="Field Coat Meteor | Outdoor Jacket Guide: Types, Fabrics, Layering &amp; Care"><meta property="og:description" content="An independent guide to outdoor jackets: field jackets, waxed cotton, rain shells and insulated coats, fabric comparisons, layering, waterproof ratings and care.">
<meta property="og:url" content="https://www.fieldcoatmeteor.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1544022613-e87ca75a784a?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#4B5A3A">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 44 44'%3E%3Crect width='44' height='44' fill='%234B5A3A'/%3E%3Cpath d='M8 34 L30 12' stroke='%23E8622C' stroke-width='4' stroke-linecap='round'/%3E%3Ccircle cx='31' cy='11' r='5' fill='%23F5F2E8'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@400;500;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Field Coat Meteor", "url": "https://www.fieldcoatmeteor.com/", "email": "hello@fieldcoatmeteor.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What is a field jacket?", "acceptedAnswer": {"@type": "Answer", "text": "A field jacket is a hip-length utility jacket, typically in durable cotton or cotton blend, with several large pockets, a collar or stowable hood, and adjustable cuffs. It originated as military outerwear in the twentieth century and became a civilian classic for its practicality."}}, {"@type": "Question", "name": "Is waxed cotton waterproof?", "acceptedAnswer": {"@type": "Answer", "text": "Waxed cotton is highly water-resistant and windproof, and it handles showers and drizzle very well. In prolonged heavy rain it can eventually let moisture through, especially at seams and worn areas, which is why regular re-waxing matters."}}, {"@type": "Question", "name": "What does a waterproof rating like 10,000 mm mean?", "acceptedAnswer": {"@type": "Answer", "text": "It refers to hydrostatic head: how tall a column of water the fabric can hold back before leaking in a lab test. Higher numbers indicate greater resistance to water pressure, but seams, zips and fit also affect how dry you stay."}}, {"@type": "Question", "name": "Down or synthetic insulation?", "acceptedAnswer": {"@type": "Answer", "text": "Down is lighter and packs smaller for the same warmth, but loses much of its insulating ability when wet. Synthetic insulation is bulkier but keeps more warmth when damp and dries faster, making it a good choice for wet climates."}}, {"@type": "Question", "name": "How should a jacket fit for layering?", "acceptedAnswer": {"@type": "Answer", "text": "You should be able to wear your usual mid-layer underneath, raise your arms without the hem riding up past your waist, and reach forward without tightness across the back."}}, {"@type": "Question", "name": "Do you sell jackets?", "acceptedAnswer": {"@type": "Answer", "text": "No. Field Coat Meteor is an independent information website. We do not sell clothing and are not affiliated with any brand or retailer."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="top"><div class="wrap"><span><?php echo date("l, F j, Y"); ?> &middot; Field report</span><span>Independent guide &middot; No products, no sponsors</span></div></div>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Field Coat Meteor home"><svg viewBox="0 0 44 44" aria-hidden="true"><rect x="1" y="1" width="42" height="42" fill="#4B5A3A" stroke="#1E1F1A" stroke-width="2"/><path d="M8 34 L30 12" stroke="#E8622C" stroke-width="3" stroke-linecap="round"/><circle cx="31" cy="11" r="4" fill="#F5F2E8"/><path d="M6 38 H38" stroke="#D8CFB4" stroke-width="2"/></svg><span>Field Coat<br>Meteor<small>Outdoor jacket guide</small></span></a>
    <nav aria-label="Main navigation"><ul class="tabs" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="jacket-guide.html">Jacket Guide</a></li><li><a href="jacket-care.html">Care</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero topo">
  <div class="wrap hero-grid">
    <div>
      <span class="label">Field note 01 &middot; <?php echo $season; ?> edition</span>
      <h1>The right jacket for <span>every sky</span>.</h1>
      <p class="lead">Field Coat Meteor is an independent guide to outdoor jackets. Learn which styles and fabrics suit which weather, how to layer properly, and how to care for a good coat so it lasts for decades.</p>
      <div class="ctas"><a class="btn" href="#weather">Find your jacket</a><a class="btn btn--k" href="jacket-guide.html">Read the guide</a></div>
    </div>
    <figure class="field-card">
      <div class="pic"><img src="https://images.unsplash.com/photo-1544022613-e87ca75a784a?auto=format&fit=crop&w=700&q=75" alt="woman in a brown jacket over a white shirt and blue jeans" width="700" height="875" fetchpriority="high"></div>
      <figcaption class="cap"><span>Obs. 041</span><span>Brown cotton field jacket</span></figcaption>
    </figure>
  </div>
</section>

<section class="picker" id="weather" aria-labelledby="wp-t">
  <div class="wrap">
    <div class="head"><div><span class="label">Interactive</span><h2 id="wp-t">What&#8217;s the weather doing?</h2></div><p>Pick the condition you face most often and we will suggest the type of jacket and layering that usually works best.</p></div>
    <div class="pick-box">
      <div class="l"><p style="font-weight:700;margin:0">Choose a condition:</p><div class="conds" role="group" aria-label="Weather conditions"><button type="button" class="cond" data-w="rain" aria-pressed="true"><svg viewBox="0 0 28 28" fill="none" stroke="#1E1F1A" stroke-width="2"><path d="M7 15a6 6 0 1 1 2-11 7 7 0 0 1 12 4 4 4 0 0 1 0 7z"/><path d="M9 19l-2 5M15 19l-2 5M21 19l-2 5"/></svg>Rain</button><button type="button" class="cond" data-w="wind" aria-pressed="false"><svg viewBox="0 0 28 28" fill="none" stroke="#1E1F1A" stroke-width="2"><path d="M3 10h15a3 3 0 1 0-3-3M3 15h20a3 3 0 1 1-3 3M3 20h10"/></svg>Wind</button><button type="button" class="cond" data-w="cold" aria-pressed="false"><svg viewBox="0 0 28 28" fill="none" stroke="#1E1F1A" stroke-width="2"><path d="M14 2v24M3.6 8l20.8 12M3.6 20L24.4 8M10 4l4 3 4-3M10 24l4-3 4 3"/></svg>Cold</button><button type="button" class="cond" data-w="mild" aria-pressed="false"><svg viewBox="0 0 28 28" fill="none" stroke="#1E1F1A" stroke-width="2"><circle cx="14" cy="14" r="5"/><path d="M14 2v4M14 22v4M2 14h4M22 14h4M5.5 5.5l2.8 2.8M19.7 19.7l2.8 2.8M5.5 22.5l2.8-2.8M19.7 8.3l2.8-2.8"/></svg>Mild</button></div><p class="muted" style="margin-top:18px;font-size:.9rem">These are general starting points. Local climate, activity and personal comfort all matter.</p></div>
      <div class="r" id="rec" aria-live="polite">
        <span class="rec-label">Our suggestion</span>
        <h3>Waterproof rain shell</h3>
        <p>A fully seam-taped shell with a waterproof-breathable membrane and an adjustable hood.</p>
        <ul><li>Look for a hydrostatic head of 10,000 mm or more for steady rain</li><li>Pit zips or a mesh lining help vent sweat</li><li>Layer a light fleece underneath if it is also cool</li></ul>
      </div>
    </div>
  </div>
</section>

<section class="types" aria-labelledby="ty-t">
  <div class="wrap">
    <div class="head"><div><span class="label">Specimen collection</span><h2 id="ty-t">Six jackets worth knowing</h2></div><p>Most outerwear falls into one of these families. Each was designed for a job, and knowing that job helps you choose well.</p></div>
    <div class="spec-grid"><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1719312843440-b2dcb5fa20d3?auto=format&fit=crop&w=700&q=75" alt="man in a field jacket standing in a meadow with trees behind" width="700" height="595" loading="lazy"><span class="no">SPEC 01</span></div><div class="t"><h3>Field jacket</h3><p>The classic four-pocket utility jacket in tough cotton twill. Roomy, practical and endlessly versatile.</p><ul class="chips"><li>Cotton twill</li><li>4 pockets</li><li>All-season</li></ul></div></article><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1649937408746-4d2f603f91c8?auto=format&fit=crop&w=700&q=75" alt="brown waxed jacket hanging on a wooden wall" width="700" height="595" loading="lazy"><span class="no">SPEC 02</span></div><div class="t"><h3>Waxed cotton</h3><p>Cotton coated in wax to shed rain and wind. Ages beautifully and can be re-waxed for decades.</p><ul class="chips"><li>Showerproof</li><li>Re-waxable</li><li>Countryside</li></ul></div></article><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1580118587866-c2f60069f0ac?auto=format&fit=crop&w=700&q=75" alt="hiker in an orange rain jacket walking down a trail" width="700" height="595" loading="lazy"><span class="no">SPEC 03</span></div><div class="t"><h3>Rain shell</h3><p>Lightweight, packable and fully waterproof thanks to a breathable membrane and taped seams.</p><ul class="chips"><li>Waterproof</li><li>Packable</li><li>Hiking</li></ul></div></article><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1613322800337-581785ea9f33?auto=format&fit=crop&w=700&q=75" alt="woman in a black insulated jacket standing in snow" width="700" height="595" loading="lazy"><span class="no">SPEC 04</span></div><div class="t"><h3>Insulated / puffer</h3><p>Down or synthetic fill trapped in baffles for serious warmth with little weight.</p><ul class="chips"><li>Down or synthetic</li><li>Very warm</li><li>Winter</li></ul></div></article><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?auto=format&fit=crop&w=700&q=75" alt="blue denim button-up jacket" width="700" height="595" loading="lazy"><span class="no">SPEC 05</span></div><div class="t"><h3>Denim &amp; chore</h3><p>Sturdy cotton jackets born as workwear. Perfect for mild days and layering over knitwear.</p><ul class="chips"><li>Cotton</li><li>Workwear</li><li>Spring &amp; autumn</li></ul></div></article><article class="spec"><div class="pic"><img src="https://images.unsplash.com/photo-1623854156816-4c4fc355ffc7?auto=format&fit=crop&w=700&q=75" alt="brown leather jacket hanging on a wooden wall hook" width="700" height="595" loading="lazy"><span class="no">SPEC 06</span></div><div class="t"><h3>Leather</h3><p>Wind-resistant and long-lasting with proper care. Best kept for dry days and city wear.</p><ul class="chips"><li>Windproof</li><li>Long-lasting</li><li>Dry weather</li></ul></div></article></div>
  </div>
</section>

<section class="lab topo" aria-labelledby="lb-t" style="background-color:var(--olive-dk)">
  <div class="wrap lab-grid">
    <div><span class="label light">Fabric lab</span><h2 id="lb-t">What it&#8217;s made of matters</h2><p>The outer fabric decides how a jacket handles rain, wind and wear. Bars show general performance on a five-point scale.</p><div class="pic"><img src="https://images.unsplash.com/photo-1643313262988-cdc5f50c6019?auto=format&fit=crop&w=600&q=75" alt="close-up of grey woven fabric texture" width="600" height="800" loading="lazy"></div></div>
    <div class="tbl-wrap"><table class="tbl"><thead><tr><th>Fabric</th><th>Water</th><th>Breathability</th><th>Durability</th><th>Best for</th></tr></thead><tbody><tr><td>Waxed cotton</td><td><span class="bar" style="width:42px" aria-label="3 out of 5"></span></td><td><span class="bar" style="width:28px" aria-label="2 out of 5"></span></td><td><span class="bar" style="width:70px" aria-label="5 out of 5"></span></td><td>Wind, light rain, rugged use</td></tr><tr><td>Cotton twill / canvas</td><td><span class="bar" style="width:14px" aria-label="1 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td>Dry, mild days, workwear</td></tr><tr><td>Ripstop nylon</td><td><span class="bar" style="width:28px" aria-label="2 out of 5"></span></td><td><span class="bar" style="width:42px" aria-label="3 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td>Light shells, wind jackets</td></tr><tr><td>Waterproof-breathable membrane</td><td><span class="bar" style="width:70px" aria-label="5 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td><span class="bar" style="width:42px" aria-label="3 out of 5"></span></td><td>Rain, hiking, wet climates</td></tr><tr><td>Wool</td><td><span class="bar" style="width:28px" aria-label="2 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td><span class="bar" style="width:56px" aria-label="4 out of 5"></span></td><td>Cold, dry weather, stays warm when damp</td></tr><tr><td>Leather</td><td><span class="bar" style="width:28px" aria-label="2 out of 5"></span></td><td><span class="bar" style="width:14px" aria-label="1 out of 5"></span></td><td><span class="bar" style="width:70px" aria-label="5 out of 5"></span></td><td>Wind, city wear, dry weather</td></tr></tbody></table></div>
  </div>
</section>

<section class="layers" aria-labelledby="ly-t">
  <div class="wrap layer-grid">
    <div>
      <span class="label">The layering system</span>
      <h2 id="ly-t">Three layers beat one heavy coat</h2>
      <p class="muted">Instead of a single bulky jacket, outdoor experts dress in layers you can add or remove as conditions and effort change.</p>
      <div class="stack">
        <div class="layer"><b>01</b><div><h3>Base layer</h3><p>Sits next to skin and moves sweat away. Merino or synthetic, never cotton for active use.</p></div></div>
        <div class="layer"><b>02</b><div><h3>Mid layer</h3><p>Traps warm air. A fleece, wool sweater or light insulated jacket.</p></div></div>
        <div class="layer"><b>03</b><div><h3>Outer layer</h3><p>Your jacket. Blocks wind and rain while letting moisture escape.</p></div></div>
      </div>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1548883354-d056ab7b441f?auto=format&fit=crop&w=700&q=75" alt="person zipping up a brown hooded jacket" width="700" height="875" loading="lazy"></div>
  </div>
</section>

<section class="ratings" aria-labelledby="rt-t">
  <div class="wrap">
    <div class="head"><div><span class="label">Decoding the label</span><h2 id="rt-t">Waterproof &amp; breathability ratings</h2></div><p>Many technical jackets list two numbers. Here is roughly what they mean in everyday use. Lab ratings are a guide, not a guarantee.</p></div>
    <div class="rate-grid light-tbl">
      <div class="tbl-wrap"><table class="tbl" style="min-width:380px"><thead><tr><th>Hydrostatic head</th><th>Typical use</th></tr></thead><tbody>
        <tr><td>Up to 5,000 mm</td><td>Light rain, short showers</td></tr>
        <tr><td>5,000&ndash;10,000 mm</td><td>Moderate rain, day hikes</td></tr>
        <tr><td>10,000&ndash;20,000 mm</td><td>Heavy rain, longer exposure</td></tr>
        <tr><td>20,000 mm +</td><td>Prolonged heavy rain, mountains</td></tr>
      </tbody></table></div>
      <div class="tbl-wrap"><table class="tbl" style="min-width:380px"><thead><tr><th>Breathability (g/m&sup2;/24h)</th><th>Typical use</th></tr></thead><tbody>
        <tr><td>Up to 5,000</td><td>Low effort, city walking</td></tr>
        <tr><td>5,000&ndash;10,000</td><td>Moderate activity</td></tr>
        <tr><td>10,000&ndash;20,000</td><td>Hiking, cycling</td></tr>
        <tr><td>20,000 +</td><td>High-output sports</td></tr>
      </tbody></table></div>
    </div>
  </div>
</section>

<section class="fit" aria-labelledby="ft-t">
  <div class="wrap fit-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?auto=format&fit=crop&w=700&q=75" alt="hand holding a brown bomber jacket on a white hanger" width="700" height="933" loading="lazy"></div>
    <div>
      <span class="label">Fit check</span>
      <h2 id="ft-t">Four tests before you commit</h2>
      <div class="tests">
        <div class="test"><span class="k">Test 01</span><h3>The reach</h3><p>Stretch both arms forward. The back should not pull tight and cuffs should still cover your wrists.</p></div>
        <div class="test"><span class="k">Test 02</span><h3>The raise</h3><p>Lift your arms overhead. The hem should stay below your waistband.</p></div>
        <div class="test"><span class="k">Test 03</span><h3>The layer</h3><p>Try it over the thickest layer you plan to wear. Zips should close without strain.</p></div>
        <div class="test"><span class="k">Test 04</span><h3>The shoulder</h3><p>Seams should sit at or just past your shoulder point, never halfway down the arm.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="night" id="meteor" aria-labelledby="mt-t">
  <img src="https://images.unsplash.com/photo-1517824806704-9040b037703b?auto=format&fit=crop&w=1800&q=75" alt="blue tent glowing under the Milky Way at night" width="1800" height="1200" loading="lazy">
  <div class="wrap night-grid">
    <div>
      <span class="label light">Meteor nights</span>
      <h2 id="mt-t">Dressing for a night under falling stars</h2>
      <p>Watching a meteor shower means hours sitting still in the dark, often after midnight, when temperatures drop fastest. It is one of the coldest outdoor activities there is, even in summer.</p>
      <ul class="showers"><li><span class="mo">Early January</span><span><strong>Quadrantids</strong><br><small>Short, sharp peak; bundle up for very cold nights</small></span><?php if ($nextMonth === 1) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Late April</span><span><strong>Lyrids</strong><br><small>Moderate rates; spring nights can still be chilly</small></span><?php if ($nextMonth === 4) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Early May</span><span><strong>Eta Aquariids</strong><br><small>Best from the Southern Hemisphere and tropics</small></span><?php if ($nextMonth === 5) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Mid-August</span><span><strong>Perseids</strong><br><small>Warm summer nights; a light jacket for after midnight</small></span><?php if ($nextMonth === 8) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Late October</span><span><strong>Orionids</strong><br><small>Cool autumn air; layer a fleece under a shell</small></span><?php if ($nextMonth === 10) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Mid-November</span><span><strong>Leonids</strong><br><small>Usually modest rates; cold, damp grass</small></span><?php if ($nextMonth === 11) echo '<span class="next">Next up</span>'; ?></li><li><span class="mo">Mid-December</span><span><strong>Geminids</strong><br><small>Often the year&#8217;s richest shower; full winter kit</small></span><?php if ($nextMonth === 12) echo '<span class="next">Next up</span>'; ?></li></ul>
      <p style="font-size:.85rem;margin-top:12px;opacity:.8">Dates are approximate and shift slightly each year. Check an astronomy calendar for exact peak nights in your area.</p>
    </div>
    <div>
      <div class="small-pic"><img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?auto=format&fit=crop&w=800&q=75" alt="person sitting beside a campfire surrounded by trees at night" width="800" height="500" loading="lazy"></div>
      <div class="kit">
        <h3>Stargazer&#8217;s jacket kit</h3>
        <ul>
          <li>An insulated jacket one level warmer than you think you need</li>
          <li>A windproof shell over the top to stop heat loss</li>
          <li>A hood or warm hat; you lose comfort fast through your head and neck</li>
          <li>A ground mat or blanket, since cold soaks up from below</li>
          <li>Dark, matte fabrics help keep your eyes adjusted to the dark</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="care" aria-labelledby="cr-t">
  <div class="wrap care-grid">
    <div>
      <span class="label">Make it last</span>
      <h2 id="cr-t">Re-waxing a waxed jacket</h2>
      <ol class="steps">
        <li><p><strong>Brush and sponge it clean</strong>Use cold water and a soft brush. Never machine-wash or use detergent on waxed cotton.</p></li>
        <li><p><strong>Warm the wax</strong>Stand the tin in warm water until the dressing softens to a spreadable paste.</p></li>
        <li><p><strong>Work it in</strong>Apply thin, even coats with a cloth, focusing on seams, shoulders and cuffs.</p></li>
        <li><p><strong>Blend with gentle heat</strong>A hairdryer on low helps the wax sink in evenly and removes streaks.</p></li>
        <li><p><strong>Let it cure</strong>Hang it somewhere warm and airy overnight before wearing.</p></li>
      </ol>
      <p style="margin-top:22px"><a class="btn" href="jacket-care.html">More care guides</a></p>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1606501126768-b78d4569d3f9?auto=format&fit=crop&w=800&q=75" alt="person sewing fabric at a workbench" width="800" height="720" loading="lazy"></div>
  </div>
</section>

<section class="gal" aria-label="Jackets in the field">
  <div class="wrap">
    <span class="label">Field log</span>
    <div class="gal-grid">
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1644752619513-c5a9660faf58?auto=format&fit=crop&w=500&q=75" alt="woman standing in a foggy field with trees behind" width="500" height="667" loading="lazy"></div><figcaption>Fog &middot; wool &amp; waxed cotton</figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1576514864427-f0809d2b66eb?auto=format&fit=crop&w=500&q=75" alt="people walking on a city street in the rain" width="500" height="667" loading="lazy"></div><figcaption>City rain &middot; shell</figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1649768722421-bb3e728fb83d?auto=format&fit=crop&w=500&q=75" alt="man in a yellow jacket looking out over the ocean" width="500" height="667" loading="lazy"></div><figcaption>Coast wind &middot; hooded shell</figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1630300236870-c9480cfa7856?auto=format&fit=crop&w=500&q=75" alt="person in a brown coat standing in a dry grass field" width="500" height="667" loading="lazy"></div><figcaption>Autumn &middot; field coat</figcaption></figure>
    </div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="label">FAQ</span><h2 id="fq-t">Questions from the field</h2><p class="muted">Didn&#8217;t find your answer? Send us your question.</p><a class="btn btn--k" href="contact.html">Ask us</a><div class="pic"><img src="https://images.unsplash.com/photo-1783432784323-8d53cb6e5c76?auto=format&fit=crop&w=800&q=75" alt="green jacket hanging on a wooden coat rack in soft light" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>What is a field jacket?</summary><p>A field jacket is a hip-length utility jacket, typically in durable cotton or cotton blend, with several large pockets, a collar or stowable hood, and adjustable cuffs. It originated as military outerwear in the twentieth century and became a civilian classic for its practicality.</p></details><details><summary>Is waxed cotton waterproof?</summary><p>Waxed cotton is highly water-resistant and windproof, and it handles showers and drizzle very well. In prolonged heavy rain it can eventually let moisture through, especially at seams and worn areas, which is why regular re-waxing matters.</p></details><details><summary>What does a waterproof rating like 10,000 mm mean?</summary><p>It refers to hydrostatic head: how tall a column of water the fabric can hold back before leaking in a lab test. Higher numbers indicate greater resistance to water pressure, but seams, zips and fit also affect how dry you stay.</p></details><details><summary>Down or synthetic insulation?</summary><p>Down is lighter and packs smaller for the same warmth, but loses much of its insulating ability when wet. Synthetic insulation is bulkier but keeps more warmth when damp and dries faster, making it a good choice for wet climates.</p></details><details><summary>How should a jacket fit for layering?</summary><p>You should be able to wear your usual mid-layer underneath, raise your arms without the hem riding up past your waist, and reach forward without tightness across the back.</p></details><details><summary>Do you sell jackets?</summary><p>No. Field Coat Meteor is an independent information website. We do not sell clothing and are not affiliated with any brand or retailer.</p></details></div>
  </div>
</section>

<section class="dispatch" id="dispatch" aria-labelledby="dp-t">
  <div class="wrap">
    <div class="d-box">
      <div class="in">
        <span class="label" style="color:#fff">Seasonal email</span>
        <h2 id="dp-t">Field Dispatch</h2>
        <p>Four emails a year, one per season: what to wear for the weather ahead, care reminders and the next meteor shower worth staying up for.</p>
        <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" action="index.php#dispatch">
          <label for="de" class="skip">Email address</label>
          <input type="email" id="de" name="dispatch_email" placeholder="you@example.com" required autocomplete="email">
          <input type="text" name="callsign" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Sign up</button>
        </form>
        <p class="small">See our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
      </div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1700656106838-5a7d917d2678?auto=format&fit=crop&w=800&q=75" alt="dirt road leading through a forest" width="800" height="600" loading="lazy"></div>
    </div>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 44 44" aria-hidden="true"><rect x="1" y="1" width="42" height="42" fill="#4B5A3A" stroke="#1E1F1A" stroke-width="2"/><path d="M8 34 L30 12" stroke="#E8622C" stroke-width="3" stroke-linecap="round"/><circle cx="31" cy="11" r="4" fill="#F5F2E8"/><path d="M6 38 H38" stroke="#D8CFB4" stroke-width="2"/></svg><span>Field Coat<br>Meteor<small>Outdoor jacket guide</small></span></a><p>Practical, independent advice on choosing, layering and caring for jackets, from rainy commutes to cold nights under the stars.</p></div>
      <div><h4>Guides</h4><a href="jacket-guide.html">Jacket Guide</a><a href="jacket-care.html">Jacket Care</a><a href="index.php#weather">Weather Picker</a><a href="index.php#meteor">Meteor Nights</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@fieldcoatmeteor.com">hello@fieldcoatmeteor.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Field Coat Meteor. All rights reserved.</span><span>Photos: Unsplash (Unsplash License)</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your consent, analytics cookies to improve this guide. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
