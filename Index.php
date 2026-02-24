<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>From Ethiopian Farms to Your Cup</h1>
            <p>Direct trade platform connecting specialty coffee buyers with Ethiopia's finest coffee growers</p>
            <div class="cta-buttons">
                <a href="#register" class="btn btn-primary">Join as Buyer</a>
                <a href="#register" class="btn btn-secondary">I'm a Farmer</a>
            </div>
        </div>
    </section>

    <!-- Coffee Heritage Section -->
    <section class="heritage">
        <div class="container">
            <h2>The Birthplace of Coffee</h2>
            <div class="heritage-grid">
                <div class="heritage-text">
                    <p>Ethiopia is the genetic home of Arabica coffee, where coffee was first discovered in the Kaffa region over 1,000 years ago. Our platform honors this legacy by bringing Ethiopia's finest coffee directly to global markets.</p>
                    <ul>
                        <li>Home to 5,000+ coffee varieties</li>
                        <li>Traditional organic farming methods</li>
                        <li>Distinct regional flavor profiles</li>
                    </ul>
                </div>
                <div class="heritage-image">
                    <img src="images/coffee-farm.jpg" alt="Ethiopian coffee farm">
                </div>
            </div>
        </div>
    </section>

    <!-- Regions Section -->
    <section class="regions">
        <div class="container">
            <h2>Discover Ethiopia's Coffee Regions</h2>
            <div class="region-cards">
                <div class="region-card">
                    <img src="images/yirgacheffe.jpg" alt="Yirgacheffe coffee">
                    <h3>Yirgacheffe</h3>
                    <p>Floral and citrusy with bright acidity. Grown at 1,700-2,200 meters.</p>
                </div>
                <div class="region-card">
                    <img src="images/sidamo.jpg" alt="Sidamo coffee">
                    <h3>Sidamo</h3>
                    <p>Medium-bodied with berry and stone fruit notes. 1,500-2,200 meters.</p>
                </div>
                <div class="region-card">
                    <img src="images/harrar.jpg" alt="Harrar coffee">
                    <h3>Harrar</h3>
                    <p>Bold and winey with blueberry notes. Dry-processed at 1,400-2,000 meters.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2>How Farm2Cup Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Farmers List Their Coffee</h3>
                    <p>Ethiopian farmers profile their farms and list available coffee lots with detailed quality information.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Buyers Discover</h3>
                    <p>International buyers browse profiles, request samples, and communicate directly with farmers.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Secure Transactions</h3>
                    <p>Our platform facilitates secure payments and logistics for smooth international trade.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Partners Say</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p>"Farm2Cup allowed me to connect directly with farmers in Sidamo. The quality and transparency is unmatched."</p>
                    <div class="author">- Michael, Roastery Owner (Germany)</div>
                </div>
                <div class="testimonial-card">
                    <p>"For the first time, I'm getting fair prices and building long-term relationships with buyers worldwide."</p>
                    <div class="author">- Ayele, Coffee Farmer (Yirgacheffe)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="register">
        <div class="container">
            <h2>Ready to Transform Coffee Trade?</h2>
            <p>Join our platform to access Ethiopia's finest coffees or connect with global buyers.</p>
            <div class="cta-buttons">
                <a href="register.php?type=buyer" class="btn btn-primary">Register as Buyer</a>
                <a href="register.php?type=farmer" class="btn btn-secondary">Register as Farmer</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
