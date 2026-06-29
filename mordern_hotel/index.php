<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH Hotel - Modern Michael Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="images/logo.png" alt="MH Hotel Logo">
        <span>MH Hotel</span>
    </div>
    <button class="hamburger" id="hamburger">☰</button>
    <nav id="nav-menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="admin/admin-login.php">Admin</a></li>
        </ul>
    </nav>
</header>
<section class="hero">

    <div class="hero-content">
        <div class="hero-text active-text">
            <h1>Welcome to MH Hotel</h1>
            <p>Luxury stays, unforgettable experiences</p>
            <a href="booking.php" class="btn">Book Now →</a>
        </div>

        <div class="hero-text">
            <h1>Luxury & Comfort</h1>
            <p>Designed for your perfect relaxation</p>
        </div>

        <div class="hero-text">
            <h1>Executive Suites</h1>
            <p>Perfect for business and premium stays</p>
        </div>

        <div class="hero-text">
            <h1>Family Friendly Rooms</h1>
            <p>Spacious comfort for your loved ones</p>
        </div>

        <div class="hero-text">
            <h1>Ocean View Experience</h1>
            <p>Wake up to breathtaking scenery</p>
        </div>

        <div class="hero-text">
            <h1>Spa & Wellness</h1>
            <p>Relax, refresh, and recharge your body</p>
        </div>

    </div>

    <!-- slides -->
    <div class="slide active"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>

</section>

<section id="rooms">
    <h2 class="title">Our Rooms & Suites</h2>
    <p class="section-subtitle">Experience luxury and comfort in every stay</p>
    
    <div class="rooms-grid">
        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a" alt="Deluxe Room">
                <span class="room-badge">Popular</span>
            </div>
            <div class="room-details">
                <h3>Deluxe Room</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 2 Guests</span>
                    <span class="meta-item">🛏️ 1 King Bed</span>
                    <span class="meta-item">📐 35 m²</span>
                </div>
                <p class="room-description">Elegant room with modern facilities and city view.</p>
                <div class="room-footer">
                    <span class="price">$120 <small>/ night</small></span>
                    <a href="booking.php?room=deluxe" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" alt="Family Suite">
                <span class="room-badge">Family Favorite</span>
            </div>
            <div class="room-details">
                <h3>Family Suite</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 4 Guests</span>
                    <span class="meta-item">🛏️ 2 Queen Beds</span>
                    <span class="meta-item">📐 55 m²</span>
                </div>
                <p class="room-description">Perfect for family vacations with separate living area.</p>
                <div class="room-footer">
                    <span class="price">$220 <small>/ night</small></span>
                    <a href="booking.php?room=family" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427" alt="Executive Suite">
                <span class="room-badge">Business Class</span>
            </div>
            <div class="room-details">
                <h3>Executive Suite</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 2 Guests</span>
                    <span class="meta-item">🛏️ 1 King Bed</span>
                    <span class="meta-item">📐 65 m²</span>
                </div>
                <p class="room-description">Luxury accommodation for business travelers.</p>
                <div class="room-footer">
                    <span class="price">$350 <small>/ night</small></span>
                    <a href="booking.php?room=executive" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7" alt="Ocean View Suite">
                <span class="room-badge">Premium</span>
            </div>
            <div class="room-details">
                <h3>Ocean View Suite</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 2 Guests</span>
                    <span class="meta-item">🛏️ 1 King Bed</span>
                    <span class="meta-item">📐 70 m²</span>
                </div>
                <p class="room-description">Panoramic ocean views with private balcony.</p>
                <div class="room-footer">
                    <span class="price">$290 <small>/ night</small></span>
                    <a href="booking.php?room=ocean" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1568495248636-6432b97bd949" alt="Garden Terrace">
                <span class="room-badge">Tranquil</span>
            </div>
            <div class="room-details">
                <h3>Garden Terrace</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 3 Guests</span>
                    <span class="meta-item">🛏️ 1 King + 1 Single</span>
                    <span class="meta-item">📐 45 m²</span>
                </div>
                <p class="room-description">Ground floor room with private garden access.</p>
                <div class="room-footer">
                    <span class="price">$210 <small>/ night</small></span>
                    <a href="booking.php?room=garden" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-image">
                <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd" alt="Penthouse Suite">
                <span class="room-badge">Luxury</span>
            </div>
            <div class="room-details">
                <h3>Penthouse Suite</h3>
                <div class="room-meta">
                    <span class="meta-item">👥 4 Guests</span>
                    <span class="meta-item">🛏️ 2 King Beds</span>
                    <span class="meta-item">📐 120 m²</span>
                </div>
                <p class="room-description">Top floor luxury with 360° panoramic views.</p>
                <div class="room-footer">
                    <span class="price">$450 <small>/ night</small></span>
                    <a href="booking.php?room=penthouse" class="btn-book">Book Now →</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="spa">
    <div class="spa-overlay">
        <h2 class="title spa-title">Spa & Wellness</h2>
        <p class="spa-text">
            Experience ultimate relaxation with our luxury spa, professional massage services, sauna,
            steam bath, swimming pool and wellness treatments.
        </p>
    </div>
</section>

<section>
    <h2 class="title">Hotel Amenities</h2>
    <div class="amenities">
        <div class="box"><h3>Free WiFi</h3></div>
        <div class="box"><h3>Swimming Pool</h3></div>
        <div class="box"><h3>Spa & Massage</h3></div>
        <div class="box"><h3>Restaurant</h3></div>
        <div class="box"><h3>Conference Rooms</h3></div>
        <div class="box"><h3>Airport Transfer</h3></div>
    </div>
</section>

<footer>
    <p>© 2026 MH Hotel. All Rights Reserved.</p>
</footer>
<!-- FLOATING CONTACT BUTTONS -->
<<!-- CHAT POPUP MESSAGE -->
<div class="chat-popup" id="chatPopup">
    <div class="chat-box">
        <div class="chat-header">
            <span>💬 Chat with us on WhatsApp</span>
            <button id="closeChat">✕</button>
        </div>

        <div class="chat-body">
            <p>Hi 👋 Need help booking a room?</p>
            <p>Click WhatsApp or call us instantly!</p>
        </div>

        <a href="https://wa.me/254700000000" target="_blank" class="chat-btn">
            Start Chat
        </a>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>