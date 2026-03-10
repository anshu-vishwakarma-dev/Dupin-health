<?php
// Footer - included on every page
?>

<footer class="main-footer">
    <!-- Footer Top Waves -->
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#0a1628" fill-opacity="1" d="M0,40L48,36.7C96,33,192,27,288,30C384,33,480,47,576,50C672,53,768,47,864,43.3C960,40,1056,40,1152,38.3C1248,37,1344,33,1392,31.7L1440,30L1440,80L1392,80C1344,80,1248,80,1152,80C1056,80,960,80,864,80C768,80,672,80,576,80C480,80,384,80,288,80C192,80,96,80,48,80L0,80Z"></path></svg>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-capsules"></i>
                        <span>DUPIN HEALTHCARE</span>
                    </div>
                    <p>Caring for life, EVERYDAY. Your trusted excellence in Third-Party Pharma Manufacturing, providing high-quality medicine efficiently and affordably.</p>
                    <div class="footer-socials">
                        <a href="https://www.facebook.com/share/16suEJ2j5g/?mibextid=wwXIfr" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/officialdupin" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/dupin-pharmaceutical-company-b375ba3b5" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="products.php"><i class="fas fa-chevron-right"></i> Products</a></li>
                        <li><a href="services.php"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="research.php"><i class="fas fa-chevron-right"></i> Research & Dev</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- Our Products -->
                <div class="footer-col">
                    <h4>Our Products</h4>
                    <ul>
                        <li><a href="products.php?filter=tablets"><i class="fas fa-chevron-right"></i> Tablets</a></li>
                        <li><a href="products.php?filter=capsules"><i class="fas fa-chevron-right"></i> Capsules</a></li>
                        <li><a href="products.php?filter=softgels"><i class="fas fa-chevron-right"></i> Softgels</a></li>
                        <li><a href="products.php?filter=syrups"><i class="fas fa-chevron-right"></i> Syrups/Liquids</a></li>
                        <li><a href="products.php?filter=others"><i class="fas fa-chevron-right"></i> Nasal Sprays/Creams</a></li>
                        <li><a href="products.php"><i class="fas fa-chevron-right"></i> View All Portfolio</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col footer-contact">
                    <h4>Contact Us</h4>
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>VC 59 vastum city new gudaura sec o kanpur road Lucknow 226012</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>18008895167, 9648133333, 9277083830</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>dupinhealthcarepvtltd@gmail.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon – Fri: 9:00 AM – 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="footer-newsletter">
                <div class="newsletter-left">
                    <h4><i class="fas fa-paper-plane"></i> Subscribe to Our Newsletter</h4>
                    <p>Stay updated with the latest news, research, and health tips.</p>
                </div>
                <form class="newsletter-form" onsubmit="return handleNewsletter(event)">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> DUPIN HEALTHCARE PRIVATE LIMITED. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Sitemap</a>
                    <a href="#">FDA Disclaimer</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
function handleNewsletter(e) {
    e.preventDefault();
    const input = e.target.querySelector('input');
    const btn = e.target.querySelector('button');
    btn.textContent = 'Subscribed! ✓';
    btn.style.backgroundColor = '#22c55e';
    input.value = '';
    setTimeout(() => {
        btn.textContent = 'Subscribe';
        btn.style.backgroundColor = '';
    }, 3000);
    return false;
}

// Simple Chatbot Toggle
function toggleChat() {
    const chatWindow = document.getElementById('chatbotWindow');
    if(chatWindow.style.display === 'none' || chatWindow.style.display === '') {
        chatWindow.style.display = 'flex';
        setTimeout(() => { chatWindow.style.opacity = '1'; chatWindow.style.transform = 'translateY(0)'; }, 10);
    } else {
        chatWindow.style.opacity = '0';
        chatWindow.style.transform = 'translateY(20px)';
        setTimeout(() => { chatWindow.style.display = 'none'; }, 300);
    }
}
</script>

<!-- ===== FLOATING CHATBOT ===== -->
<div class="chatbot-wrapper">
    <!-- Chat Window -->
    <div class="chatbot-window" id="chatbotWindow">
        <div class="chatbot-header">
            <div>
                <i class="fas fa-robot"></i> <strong>Dupin AI</strong>
            </div>
            <button onclick="toggleChat()" style="background:none; border:none; color:#fff; cursor:pointer;"><i class="fas fa-times"></i></button>
        </div>
        <div class="chatbot-body">
            <div class="chat-message bot">
                Hello! Welcome to Dupin Healthcare. How can I assist you today?
            </div>
            <div class="chat-message bot">
                Please feel free to ask about our products, services, or manufacturing facilities.
            </div>
        </div>
        <div class="chatbot-input">
            <input type="text" placeholder="Type your message...">
            <button><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
    
    <!-- Chat Toggle Button -->
    <button class="chatbot-toggle" onclick="toggleChat()">
        <i class="fas fa-comments"></i>
    </button>
</div>

</body>
</html>
