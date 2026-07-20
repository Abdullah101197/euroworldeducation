import math
import os
import zipfile
from PIL import Image, ImageDraw, ImageFont

def build_svg_crest():
    svg = '''<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" height="100%">
  <defs>
    <filter id="crestShadow" x="-10%" y="-10%" width="120%" height="120%">
      <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#001026" flood-opacity="0.22"/>
    </filter>
    <clipPath id="globeClip">
      <circle cx="250" cy="200" r="95"/>
    </clipPath>
    <!-- Curved Path for Lower Text CONSULTANTS: Radius 202 centered at (250,250) -->
    <path id="consultantsArc" d="M 134 416 A 202 202 0 0 0 366 416" fill="none"/>
  </defs>

  <g filter="url(#crestShadow)">
    <!-- 1. Outer Split Ring Border (Outer radius 240, Inner radius 218, Thickness 22) -->
    <!-- Left Half: Oxford Navy (#002046) -->
    <path d="M 250 10 A 240 240 0 0 0 250 490 L 250 468 A 218 218 0 0 1 250 32 Z" fill="#002046"/>
    <!-- Right Half: Vibrant Crimson Red (#C6181B) -->
    <path d="M 250 10 A 240 240 0 0 1 250 490 L 250 468 A 218 218 0 0 0 250 32 Z" fill="#c6181b"/>

    <!-- Inner White Ring & Circle Base (Radius 215) -->
    <circle cx="250" cy="250" r="215" fill="#ffffff"/>
    <circle cx="250" cy="250" r="214" fill="none" stroke="#e2e8f0" stroke-width="1.5"/>

    <!-- 2. Globe Base (Oxford Navy #002046, Radius 95 centered at x=250, y=200) -->
    <circle cx="250" cy="200" r="95" fill="#002046"/>

    <!-- Globe Grid & Smooth Continent Landmasses (Clipped strictly inside Globe) -->
    <g clip-path="url(#globeClip)">
      <!-- Smooth Elliptical Latitude Arcs -->
      <path d="M 155 200 Q 250 182 345 200" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.85"/>
      <path d="M 164 165 Q 250 150 336 165" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <path d="M 164 235 Q 250 220 336 235" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <!-- Longitude / Meridian Curves meeting at exact poles (250, 105 and 250, 295) -->
      <line x1="250" y1="105" x2="250" y2="295" stroke="#ffffff" stroke-width="1.5" opacity="0.85"/>
      <path d="M 250 105 Q 205 200 250 295" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <path d="M 250 105 Q 295 200 250 295" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <path d="M 250 105 Q 165 200 250 295" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <path d="M 250 105 Q 335 200 250 295" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>

      <!-- High-Precision Cartographic Continent Silhouettes (White #ffffff) -->
      <!-- Europe & Africa Landmass (East) -->
      <path d="M 246 148 C 262 144, 280 150, 290 162 C 300 174, 295 186, 284 194 C 276 200, 278 212, 286 226 C 294 240, 292 262, 276 274 C 262 284, 248 270, 251 254 C 254 238, 246 222, 251 208 C 255 194, 240 186, 244 172 C 248 158, 240 152, 246 148 Z" fill="#ffffff" opacity="0.96"/>
      <ellipse cx="236" cy="158" rx="5" ry="7.5" fill="#ffffff" opacity="0.96" transform="rotate(-18 236 158)"/>
      <circle cx="228" cy="163" r="3.2" fill="#ffffff" opacity="0.96"/>
      <!-- Americas Landmass (West) -->
      <path d="M 186 150 C 204 146, 216 160, 211 176 C 206 190, 194 198, 202 212 C 210 224, 220 242, 208 264 C 196 282, 178 274, 182 248 C 186 226, 175 212, 180 194 C 185 178, 172 162, 186 150 Z" fill="#ffffff" opacity="0.96"/>
      <path d="M 204 126 C 218 124, 224 136, 216 144 C 208 152, 196 140, 204 126 Z" fill="#ffffff" opacity="0.96"/>
    </g>

    <!-- 3. Prominent Graduation Cap (Mortarboard sitting gracefully atop Globe) -->
    <path d="M 250 114 C 282 122, 314 130, 344 138 C 314 146, 282 154, 250 162 C 218 154, 186 146, 156 138 C 186 130, 218 122, 250 114 Z" fill="#002046" stroke="#ffffff" stroke-width="2.2" stroke-linejoin="round"/>
    <path d="M 198 146 L 198 172 Q 250 186 302 172 L 302 146 Z" fill="#002046"/>
    <path d="M 198 172 Q 250 186 302 172" fill="none" stroke="#ffffff" stroke-width="1.6" opacity="0.5"/>
    <circle cx="250" cy="138" r="5.5" fill="#c6181b" stroke="#ffffff" stroke-width="0.8"/>
    <path d="M 250 138 C 214 140, 186 150, 174 164 C 166 174, 166 188, 166 206" fill="none" stroke="#c6181b" stroke-width="4.2" stroke-linecap="round"/>
    <polygon points="166,206 159,238 173,238" fill="#c6181b"/>
    <ellipse cx="166" cy="201" rx="4.8" ry="4.2" fill="#991214"/>
    <line x1="162" y1="238" x2="162" y2="246" stroke="#c6181b" stroke-width="2" stroke-linecap="round"/>
    <line x1="166" y1="238" x2="166" y2="247" stroke="#c6181b" stroke-width="2" stroke-linecap="round"/>
    <line x1="170" y1="238" x2="170" y2="246" stroke="#c6181b" stroke-width="2" stroke-linecap="round"/>

    <!-- 4. Two Red 5-Pointed Stars Flanking Globe -->
    <polygon points="115,211 119.8,225 134,225 122.5,233.5 126.8,247.5 115,239 103.2,247.5 107.5,233.5 96,225 110.2,225" fill="#c6181b"/>
    <polygon points="385,211 389.8,225 404,225 392.5,233.5 396.8,247.5 385,239 373.2,247.5 377.5,233.5 366,225 380.2,225" fill="#c6181b"/>

    <!-- 5. Ribbon Banner across Center-Bottom (Continuous Smooth Arch) -->
    <!-- Left Ribbon Fold & Tail -->
    <path d="M 132 284 L 66 296 L 84 318 L 66 340 L 138 318 Z" fill="#002046"/>
    <path d="M 132 284 L 138 318 L 148 308 Z" fill="#001026"/>
    <line x1="114" y1="294" x2="117" y2="324" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
    <line x1="121" y1="292" x2="124" y2="321" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
    <line x1="128" y1="290" x2="131" y2="318" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>

    <!-- Right Ribbon Fold & Tail -->
    <path d="M 368 284 L 434 296 L 416 318 L 434 340 L 362 318 Z" fill="#c6181b"/>
    <path d="M 368 284 L 362 318 L 352 308 Z" fill="#8f1113"/>
    <line x1="386" y1="294" x2="383" y2="324" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
    <line x1="379" y1="292" x2="376" y2="321" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
    <line x1="372" y1="290" x2="369" y2="318" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>

    <!-- Main White Banner Box with Thick Arched Navy Border -->
    <path d="M 124 256 Q 250 242 376 256 L 374 312 Q 250 298 126 312 Z" fill="#ffffff" stroke="#002046" stroke-width="5.5" stroke-linejoin="round"/>

    <!-- Banner Text: EUROWORLD -->
    <text x="250" y="293" font-family="'Outfit', 'Arial Black', 'Impact', 'Arial Bold', sans-serif" font-size="37" font-weight="900" fill="#002046" text-anchor="middle" letter-spacing="2.5px">
      EUROWORLD
    </text>

    <!-- 6. Curved Lower Text: CONSULTANTS (Conforms smoothly along circle border arc) -->
    <text font-family="'Outfit', 'Arial Black', 'Arial Bold', sans-serif" font-size="27" font-weight="900" fill="#c6181b" letter-spacing="4px">
      <textPath href="#consultantsArc" startOffset="50%" text-anchor="middle">CONSULTANTS</textPath>
    </text>
  </g>
</svg>
'''
    return svg

def build_svg_horizontal():
    svg = '''<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1360 320" width="100%" height="100%">
  <defs>
    <filter id="hShadow" x="-10%" y="-10%" width="120%" height="120%">
      <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#001026" flood-opacity="0.18"/>
    </filter>
    <clipPath id="globeClipH">
      <circle cx="250" cy="200" r="95"/>
    </clipPath>
    <path id="consultantsArcH" d="M 134 416 A 202 202 0 0 0 366 416" fill="none"/>
  </defs>

  <!-- Left Side: Master Circular Seal Crest (Exact 280x280 centered vertically inside 320 height box) -->
  <g transform="translate(20, 20) scale(0.56)" filter="url(#hShadow)">
    <path d="M 250 10 A 240 240 0 0 0 250 490 L 250 468 A 218 218 0 0 1 250 32 Z" fill="#002046"/>
    <path d="M 250 10 A 240 240 0 0 1 250 490 L 250 468 A 218 218 0 0 0 250 32 Z" fill="#c6181b"/>
    <circle cx="250" cy="250" r="215" fill="#ffffff"/>
    <circle cx="250" cy="200" r="95" fill="#002046"/>
    <g clip-path="url(#globeClipH)">
      <path d="M 155 200 Q 250 182 345 200" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.85"/>
      <path d="M 164 165 Q 250 150 336 165" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <path d="M 164 235 Q 250 220 336 235" fill="none" stroke="#ffffff" stroke-width="1.3" opacity="0.85"/>
      <line x1="250" y1="105" x2="250" y2="295" stroke="#ffffff" stroke-width="1.5" opacity="0.85"/>
      <path d="M 246 148 C 262 144, 280 150, 290 162 C 300 174, 295 186, 284 194 C 276 200, 278 212, 286 226 C 294 240, 292 262, 276 274 C 262 284, 248 270, 251 254 C 254 238, 246 222, 251 208 C 255 194, 240 186, 244 172 C 248 158, 240 152, 246 148 Z" fill="#ffffff" opacity="0.96"/>
      <path d="M 186 150 C 204 146, 216 160, 211 176 C 206 190, 194 198, 202 212 C 210 224, 220 242, 208 264 C 196 282, 178 274, 182 248 C 186 226, 175 212, 180 194 C 185 178, 172 162, 186 150 Z" fill="#ffffff" opacity="0.96"/>
    </g>
    <path d="M 250 114 C 282 122, 314 130, 344 138 C 314 146, 282 154, 250 162 C 218 154, 186 146, 156 138 C 186 130, 218 122, 250 114 Z" fill="#002046" stroke="#ffffff" stroke-width="2.2"/>
    <path d="M 198 146 L 198 172 Q 250 186 302 172 L 302 146 Z" fill="#002046"/>
    <circle cx="250" cy="138" r="5.5" fill="#c6181b"/>
    <path d="M 250 138 C 214 140, 186 150, 174 164 C 166 174, 166 188, 166 206" fill="none" stroke="#c6181b" stroke-width="4.2"/>
    <polygon points="166,206 159,238 173,238" fill="#c6181b"/>
    <polygon points="115,211 119.8,225 134,225 122.5,233.5 126.8,247.5 115,239 103.2,247.5 107.5,233.5 96,225 110.2,225" fill="#c6181b"/>
    <polygon points="385,211 389.8,225 404,225 392.5,233.5 396.8,247.5 385,239 373.2,247.5 377.5,233.5 366,225 380.2,225" fill="#c6181b"/>
    <path d="M 132 284 L 66 296 L 84 318 L 66 340 L 138 318 Z" fill="#002046"/>
    <path d="M 368 284 L 434 296 L 416 318 L 434 340 L 362 318 Z" fill="#c6181b"/>
    <path d="M 124 256 Q 250 242 376 256 L 374 312 Q 250 298 126 312 Z" fill="#ffffff" stroke="#002046" stroke-width="5.5"/>
    <text x="250" y="293" font-family="'Outfit', 'Arial Black', sans-serif" font-size="37" font-weight="900" fill="#002046" text-anchor="middle" letter-spacing="2.5px">EUROWORLD</text>
    <text font-family="'Outfit', 'Arial Black', sans-serif" font-size="27" font-weight="900" fill="#c6181b" letter-spacing="4px">
      <textPath href="#consultantsArcH" startOffset="50%" text-anchor="middle">CONSULTANTS</textPath>
    </text>
  </g>

  <!-- Right Side: Clean Modern Wordmark perfectly centered vertically inside 1360x320 box -->
  <g transform="translate(340, 0)">
    <text x="0" y="142" font-family="'Outfit', 'Arial Black', 'Arial Bold', sans-serif" font-size="106" font-weight="900" letter-spacing="2px">
      <tspan fill="#002046">EURO </tspan><tspan fill="#c6181b">WORLD</tspan>
    </text>
    <!-- Divider Bars centered at y=175 -->
    <line x1="2" y1="175" x2="242" y2="175" stroke="#c6181b" stroke-width="7" stroke-linecap="round"/>
    <line x1="242" y1="175" x2="980" y2="175" stroke="#e2e8f0" stroke-width="4" stroke-linecap="round"/>
    <!-- Subheadline centered with baseline y=242 -->
    <text x="2" y="242" font-family="'Outfit', 'Arial Bold', sans-serif" font-size="38" font-weight="800" fill="#002046" letter-spacing="6px">
      EDUCATION CONSULTANTS
    </text>
  </g>
</svg>
'''
    return svg

def draw_star(draw, cx, cy, radius, fill):
    points = []
    for i in range(10):
        angle = math.radians(i * 36 - 90)
        r = radius if i % 2 == 0 else radius * 0.382
        x = cx + r * math.cos(angle)
        y = cy + r * math.sin(angle)
        points.append((x, y))
    draw.polygon(points, fill=fill)

def draw_curved_text_flawless(img, text, cx, cy, radius, font, fill, start_angle=-34, end_angle=34):
    """Draw text curved along a circular arc centered at (cx, cy) using exact baseline rotation around center (cx, cy)."""
    n = len(text)
    if n == 0:
        return
    step = (end_angle - start_angle) / max(1, n - 1)
    
    for i, char in enumerate(text):
        if char == ' ':
            continue
        angle_deg = start_angle + i * step
        
        # Create full-size transparent layer to guarantee exact baseline alignment and zero wobble
        layer = Image.new('RGBA', img.size, (0, 0, 0, 0))
        layer_draw = ImageDraw.Draw(layer)
        # Draw character exactly at bottom baseline (cx, cy + radius) centered horizontally
        layer_draw.text((cx, cy + radius), char, font=font, fill=fill, anchor="ms")
        # Rotate around center of circle (cx, cy) by angle_deg
        # (In PIL, rotating by angle_deg when negative moves letter to the left side cleanly)
        rotated_layer = layer.rotate(angle_deg, resample=Image.Resampling.BICUBIC, center=(cx, cy))
        img.alpha_composite(rotated_layer)

def render_high_res_crest_png(size=2000):
    scale = size / 500.0
    s = scale
    img = Image.new('RGBA', (size, size), (0, 0, 0, 0))
    draw = ImageDraw.Draw(img)

    # 1. Outer Split Ring Border (Outer radius 240*s, Inner radius 218*s)
    draw.pieslice([(10*s, 10*s), (490*s, 490*s)], 90, 270, fill="#002046")
    draw.pieslice([(10*s, 10*s), (490*s, 490*s)], 270, 90, fill="#c6181b")

    # Inner circle cutout (r=218) filled with white
    draw.ellipse([(32*s, 32*s), (468*s, 468*s)], fill="#ffffff")
    draw.ellipse([(34*s, 34*s), (466*s, 466*s)], outline="#e2e8f0", width=int(1.5*s))

    # 2. Globe Base (r=95 at center 250, 200)
    draw.ellipse([(155*s, 105*s), (345*s, 295*s)], fill="#002046")

    # Latitude arcs & Longitude lines
    draw.arc([(155*s, 155*s), (345*s, 245*s)], 0, 180, fill="#ffffff", width=int(2*s))
    draw.arc([(164*s, 125*s), (336*s, 205*s)], 0, 180, fill="#ffffff", width=int(1.8*s))
    draw.arc([(164*s, 185*s), (336*s, 275*s)], 0, 180, fill="#ffffff", width=int(1.8*s))
    draw.line([(250*s, 105*s), (250*s, 295*s)], fill="#ffffff", width=int(2*s))
    draw.arc([(205*s, 105*s), (295*s, 295*s)], 270, 90, fill="#ffffff", width=int(1.8*s))
    draw.arc([(165*s, 105*s), (335*s, 295*s)], 270, 90, fill="#ffffff", width=int(1.8*s))

    # High-precision smooth Continent Silhouettes
    eur_pts = [
        (246,148), (258,145), (274,148), (286,158), (293,172), (290,186), 
        (282,194), (278,206), (286,224), (292,246), (284,266), (274,275), 
        (256,264), (252,248), (251,220), (254,204), (244,188), (245,172), 
        (244,158), (246,148)
    ]
    draw.polygon([(x*s, y*s) for x, y in eur_pts], fill="#ffffff")
    draw.ellipse([(233*s, 154*s), (241*s, 164*s)], fill="#ffffff")
    
    am_pts = [
        (186,150), (200,146), (212,156), (211,174), (204,188), (196,198), 
        (204,214), (214,234), (210,256), (198,276), (184,270), (182,248), 
        (186,226), (176,212), (180,194), (184,176), (174,162), (186,150)
    ]
    draw.polygon([(x*s, y*s) for x, y in am_pts], fill="#ffffff")
    draw.ellipse([(208*s, 126*s), (220*s, 140*s)], fill="#ffffff")

    # 3. Graduation Cap
    cap_top = [(250,114), (296,126), (344,138), (296,150), (250,162), (204,150), (156,138), (204,126)]
    draw.polygon([(x*s, y*s) for x, y in cap_top], fill="#002046", outline="#ffffff", width=int(2.5*s))
    cap_base = [(198,146), (198,172), (250,186), (302,172), (302,146), (250,160)]
    draw.polygon([(x*s, y*s) for x, y in cap_base], fill="#002046")
    draw.arc([(198*s, 158*s), (302*s, 186*s)], 0, 180, fill="#ffffff", width=int(2*s))
    draw.ellipse([(244.5*s, 132.5*s), (255.5*s, 143.5*s)], fill="#c6181b", outline="#ffffff", width=int(1*s))
    draw.line([(250*s, 138*s), (214*s, 140*s), (186*s, 150*s), (174*s, 164*s), (166*s, 188*s), (166*s, 206*s)], fill="#c6181b", width=int(4.5*s))
    draw.polygon([(166*s, 206*s), (159*s, 238*s), (173*s, 238*s)], fill="#c6181b")
    draw.ellipse([(161*s, 197*s), (171*s, 206*s)], fill="#991214")
    for fx in [162, 166, 170]:
        draw.line([(fx*s, 238*s), (fx*s, 246*s)], fill="#c6181b", width=int(2*s))

    # 4. Two Red 5-Pointed Stars Flanking Globe
    draw_star(draw, 115*s, 228*s, 17*s, "#c6181b")
    draw_star(draw, 385*s, 228*s, 17*s, "#c6181b")

    # 5. Ribbon Banner across Center-Bottom
    l_tail = [(132,284), (66,296), (84,318), (66,340), (138,318)]
    draw.polygon([(x*s, y*s) for x, y in l_tail], fill="#002046")
    draw.polygon([(132*s, 284*s), (138*s, 318*s), (148*s, 308*s)], fill="#001026")
    draw.line([(114*s, 294*s), (117*s, 324*s)], fill="#ffffff", width=int(3*s))
    draw.line([(121*s, 292*s), (124*s, 321*s)], fill="#ffffff", width=int(3*s))
    draw.line([(128*s, 290*s), (131*s, 318*s)], fill="#ffffff", width=int(3*s))

    r_tail = [(368,284), (434,296), (416,318), (434,340), (362,318)]
    draw.polygon([(x*s, y*s) for x, y in r_tail], fill="#c6181b")
    draw.polygon([(368*s, 284*s), (362*s, 318*s), (352*s, 308*s)], fill="#8f1113")
    draw.line([(386*s, 294*s), (383*s, 324*s)], fill="#ffffff", width=int(3*s))
    draw.line([(379*s, 292*s), (376*s, 321*s)], fill="#ffffff", width=int(3*s))
    draw.line([(372*s, 290*s), (369*s, 318*s)], fill="#ffffff", width=int(3*s))

    # Main Parabolic Arched Banner Box
    banner_points = []
    for x in range(124, 377, 4):
        y_top = 256 - 12 * (1.0 - ((x - 250.0) / 126.0) ** 2)
        banner_points.append((x * s, y_top * s))
    for x in range(374, 125, -4):
        y_bot = 312 - 12 * (1.0 - ((x - 250.0) / 124.0) ** 2)
        banner_points.append((x * s, y_bot * s))
    draw.polygon(banner_points, fill="#ffffff", outline="#002046", width=int(5.5*s))

    try:
        font_euroworld = ImageFont.truetype("arialbd.ttf", int(36 * s))
        font_consultants = ImageFont.truetype("arialbd.ttf", int(28 * s))
    except Exception:
        font_euroworld = ImageFont.load_default()
        font_consultants = ImageFont.load_default()

    text_1 = "EUROWORLD"
    bbox_1 = draw.textbbox((0, 0), text_1, font=font_euroworld)
    w1 = bbox_1[2] - bbox_1[0]
    h1 = bbox_1[3] - bbox_1[1]
    draw.text(((size - w1) / 2, 268 * s - h1 / 2), text_1, fill="#002046", font=font_euroworld)

    # 6. Draw mathematically flawless curved lower text CONSULTANTS
    # Radius = 202 * s = 808 on 2000 scale. Center is 250*s, 250*s = 1000, 1000.
    draw_curved_text_flawless(img, "CONSULTANTS", 250 * s, 250 * s, 202 * s, font_consultants, fill="#c6181b", start_angle=-34, end_angle=34)

    return img

def main():
    pub_img_dir = "c:/laragon/www/EUROWORLDEDUCATION/public/images"
    os.makedirs(pub_img_dir, exist_ok=True)

    # 1. Write SVGs
    svg_h = build_svg_horizontal()
    open(os.path.join(pub_img_dir, "logo.svg"), "w", encoding="utf-8").write(svg_h)
    open(os.path.join(pub_img_dir, "logo-horizontal.svg"), "w", encoding="utf-8").write(svg_h)

    svg_crest = build_svg_crest()
    open(os.path.join(pub_img_dir, "logo-crest.svg"), "w", encoding="utf-8").write(svg_crest)
    open(os.path.join(pub_img_dir, "logo-icon.svg"), "w", encoding="utf-8").write(svg_crest)

    print("SVG vector files updated with precision geometry and flawless curved text arcs.")

    # 2. Render high-res PNGs from super-sampled 2000x2000 drawing
    print("Rendering high-res super-sampled PNGs...")
    big_crest = render_high_res_crest_png(size=2000)

    # Standalone circular seal crest PNG (1000x1000)
    img_crest = big_crest.resize((1000, 1000), Image.Resampling.LANCZOS)
    img_crest.save(os.path.join(pub_img_dir, "logo-crest.png"), "PNG")

    # Icon PNG (512x512)
    img_icon = big_crest.resize((512, 512), Image.Resampling.LANCZOS)
    img_icon.save(os.path.join(pub_img_dir, "logo-icon.png"), "PNG")

    # Favicons
    img_128 = big_crest.resize((128, 128), Image.Resampling.LANCZOS)
    img_128.save("c:/laragon/www/EUROWORLDEDUCATION/public/favicon.png", "PNG")
    img_64 = big_crest.resize((64, 64), Image.Resampling.LANCZOS)
    img_64.save("c:/laragon/www/EUROWORLDEDUCATION/public/favicon.ico", "ICO")

    # Main combination header logo.png (1360x320 transparent PNG)
    # Perfectly centered vertically inside the 1360x320 box!
    h_img = Image.new('RGBA', (1360, 320), (0, 0, 0, 0))
    h_draw = ImageDraw.Draw(h_img)
    
    # Place 280x280 crest at (20, 20) -> exactly centered vertically in 320 box
    crest_280 = big_crest.resize((280, 280), Image.Resampling.LANCZOS)
    h_img.paste(crest_280, (20, 20), crest_280)

    try:
        f_euro = ImageFont.truetype("arialbd.ttf", 106)
        f_sub = ImageFont.truetype("arialbd.ttf", 38)
    except Exception:
        f_euro = ImageFont.load_default()
        f_sub = ImageFont.load_default()

    # Place EURO WORLD with baseline exactly at y=142
    h_draw.text((340, 142), "EURO", fill="#002046", font=f_euro, anchor="ls")
    bb_euro = h_draw.textbbox((340, 142), "EURO ", font=f_euro, anchor="ls")
    w_euro_space = bb_euro[2] - bb_euro[0]
    h_draw.text((340 + w_euro_space, 142), "WORLD", fill="#c6181b", font=f_euro, anchor="ls")

    # Place Divider Bars precisely centered at y=175
    h_draw.line([(340, 175), (582, 175)], fill="#c6181b", width=7)
    h_draw.line([(582, 175), (1320, 175)], fill="#e2e8f0", width=4)

    # Place subheadline EDUCATION CONSULTANTS with baseline exactly at y=242
    h_draw.text((340, 242), "EDUCATION CONSULTANTS", fill="#002046", font=f_sub, anchor="ls")

    # Save full 1360x320 PNG
    h_img.save(os.path.join(pub_img_dir, "logo.png"), "PNG")
    h_final_small = h_img.resize((680, 160), Image.Resampling.LANCZOS)
    h_final_small.save(os.path.join(pub_img_dir, "logo-horizontal.png"), "PNG")

    # 3. Create updated downloadable ZIP package
    zip_path = os.path.join(pub_img_dir, "EuroWorld_Final_Logo_Pack.zip")
    with zipfile.ZipFile(zip_path, 'w', zipfile.ZIP_DEFLATED) as zf:
        for fname in ["logo.svg", "logo.png", "logo-crest.svg", "logo-crest.png", "logo-icon.svg", "logo-icon.png", "logo-horizontal.svg", "logo-horizontal.png"]:
            fpath = os.path.join(pub_img_dir, fname)
            if os.path.exists(fpath):
                zf.write(fpath, arcname=fname)
        fav_path = "c:/laragon/www/EUROWORLDEDUCATION/public/favicon.ico"
        if os.path.exists(fav_path):
            zf.write(fav_path, arcname="favicon.ico")

    print(f"Updated precision logo pack created: {zip_path}")

if __name__ == "__main__":
    main()
