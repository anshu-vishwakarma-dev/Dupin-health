<?php
require_once 'includes/db.php';
// Footer - included on every page
?>

<footer class="main-footer">
    <!-- Footer Top Waves -->
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="currentColor" class="wave-path" fill-opacity="1" d="M0,40L48,36.7C96,33,192,27,288,30C384,33,480,47,576,50C672,53,768,47,864,43.3C960,40,1056,40,1152,38.3C1248,37,1344,33,1392,31.7L1440,30L1440,80L1392,80C1344,80,1248,80,1152,80C1056,80,960,80,864,80C768,80,672,80,576,80C480,80,384,80,288,80C192,80,96,80,48,80L0,80Z"></path></svg>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-capsules"></i>
                        <span><?php echo get_setting('company_name', 'DUPIN HEALTHCARE'); ?></span>
                    </div>
                    <p><strong>Caring for life, EVERYDAY.</strong> Your trusted excellence in Third-Party Pharma Manufacturing, providing high-quality medicine efficiently and affordably.</p>
                    <div class="footer-socials">
                        <a href="<?php echo get_setting('facebook_url', '#'); ?>" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo get_setting('instagram_url', '#'); ?>" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo get_setting('linkedin_url', '#'); ?>" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
                        <li><a href="certifications.php"><i class="fas fa-chevron-right"></i> Certifications</a></li>
                        <!-- <li><a href="research.php"><i class="fas fa-chevron-right"></i> Research & Dev</a></li> -->
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
                        <li><a href="products.php"><i class="fas fa-chevron-right"></i> View All Products</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col footer-contact">
                    <h4>Contact Us</h4>
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo get_setting('address', 'VC 59 vastum city new gudaura sec o kanpur road Lucknow 226012'); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:<?php echo get_setting('phone', '18008895167'); ?>"><?php echo get_setting('phone', '18008895167'); ?></a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo get_setting('email', 'dupinhealthcarepvtltd@gmail.com'); ?>"><?php echo get_setting('email', 'dupinhealthcarepvtltd@gmail.com'); ?></a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span><?php echo get_setting('working_hours', 'Mon – Fri: 9:00 AM – 6:00 PM'); ?></span>
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
                <p>&copy; <?php echo date('Y'); ?> <?php echo strtoupper(get_setting('company_name', 'DUPIN HEALTHCARE')); ?> PRIVATE LIMITED. All Rights Reserved.</p>
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

// --- Smart Chatbot Logic ---
document.addEventListener('DOMContentLoaded', function() {
    const chatInput = document.querySelector('.chatbot-input input');
    const sendBtn = document.querySelector('.chatbot-input button');
    const chatBody = document.querySelector('.chatbot-body');

    if (!chatInput || !sendBtn || !chatBody) return;

    function addMessage(text, isBot = false) {
        if (isBot) {
            const label = document.createElement('div');
            label.className = 'chat-sender-label';
            label.textContent = '<?php echo get_setting('company_name', 'Dupin'); ?> AI';
            chatBody.appendChild(label);
        }
        const msgDiv = document.createElement('div');
        msgDiv.className = `chat-message ${isBot ? 'bot' : 'user'}`;
        msgDiv.textContent = text;
        chatBody.appendChild(msgDiv);
        chatBody.scrollTop = chatBody.scrollHeight;
        return msgDiv;
    }

    function showTypingIndicator() {
        const indicator = document.createElement('div');
        indicator.className = 'chat-message bot typing';
        indicator.innerHTML = '<span class="dot"></span><span class="dot"></span><span class="dot"></span>';
        chatBody.appendChild(indicator);
        chatBody.scrollTop = chatBody.scrollHeight;
        return indicator;
    }

    function getBotResponse(input) {
        const msg = input.toLowerCase();
        
        if (msg.includes('hi') || msg.includes('hello') || msg.includes('hey')) {
            return "Hello! I am <?php echo get_setting('company_name', 'Dupin'); ?> AI. How can I assist you with our pharmaceutical services today?";
        }
        if (msg.includes('pcd') || msg.includes('franchise') || msg.includes('distributor')) {
            return "Yes! <?php echo get_setting('company_name', 'Dupin'); ?> Healthcare provides PCD Pharma Franchise opportunities across India. We offer monopoly rights and high-quality marketing support. You can call us at 1800-889-5167 for details.";
        }
        if (msg.includes('third party') || msg.includes('manufacturing') || msg.includes('contract')) {
            return "We are a premier provider of Third-Party/Contract Manufacturing services. We specialize in Tablets, Capsules, Softgels, and Syrups with WHO-GMP standards.";
        }
        if (msg.includes('product') || msg.includes('medicine') || msg.includes('list') || msg.includes('tablets')) {
            return "We have an extensive portfolio of 150+ formulations including Tablets, Capsules, Injections, and Syrups. You can view our full list on the 'Products' page.";
        }
        if (msg.includes('contact') || msg.includes('address') || msg.includes('phone') || msg.includes('email') || msg.includes('lucknow')) {
            return "You can visit us at: Vastum City, Kanpur Road, Lucknow. Phone: +91 9648133333. Email: dupinhealthcarepvtltd@gmail.com.";
        }
        if (msg.includes('about') || msg.includes('company') || msg.includes('who')) {
            return "Dupin Healthcare Private Limited is a Lucknow-based pharmaceutical leader incorporated in 2024, committed to high-quality healthcare formulations.";
        }
        if (msg.includes('thank')) {
            return "You're welcome! Is there anything else I can help you with?";
        }
        if (msg.includes('ok') || msg.includes('okay') || msg.includes('sure') || msg.includes('i know') || msg.includes('understand')) {
            return "Great! If you have any more questions or need specific details about our medicine range, feel free to ask.";
        }
        
        return "I'm not sure I understand. Would you like to know about our PCD Franchise, Third-Party Manufacturing, or Product List?";
    }

    function handleSend() {
        const text = chatInput.value.trim();
        if (!text) return;

        addMessage(text, false);
        chatInput.value = '';

        const typing = showTypingIndicator();

        setTimeout(() => {
            typing.remove();
            const response = getBotResponse(text);
            addMessage(response, true);
        }, 1000);
    }

    sendBtn.addEventListener('click', handleSend);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') handleSend();
    });
});
</script>

<style>
/* Chatbot Typing Indicator Styles */
.chat-message.typing {
    display: flex;
    gap: 4px;
    padding: 10px 15px;
    width: fit-content;
}
.dot {
    width: 6px;
    height: 6px;
    background: #94a3b8;
    border-radius: 50%;
    animation: bounce 1.4s infinite ease-in-out both;
}
.dot:nth-child(1) { animation-delay: -0.32s; }
.dot:nth-child(2) { animation-delay: -0.16s; }

@keyframes bounce {
    0%, 80%, 100% { transform: scale(0); }
    40% { transform: scale(1); }
}
</style>

<!-- ===== FLOATING CHATBOT ===== -->
<div class="chatbot-wrapper">
    <!-- Chat Window -->
    <div class="chatbot-window" id="chatbotWindow">
        <div class="chatbot-header">
            <div>
                <i class="fas fa-robot"></i> <strong><?php echo get_setting('company_name', 'Dupin'); ?> AI</strong>
            </div>
            <button onclick="toggleChat()" style="background:none; border:none; color:#fff; cursor:pointer;"><i class="fas fa-times"></i></button>
        </div>
        <div class="chatbot-body">
            <div class="chat-sender-label"><?php echo get_setting('company_name', 'Dupin'); ?> AI</div>
            <div class="chat-message bot">
                Hello! Welcome to <?php echo get_setting('company_name', 'Dupin Healthcare'); ?>. I am your virtual assistant.
            </div>
            <div class="chat-sender-label"><?php echo get_setting('company_name', 'Dupin'); ?> AI</div>
            <div class="chat-message bot">
                How can I assist you with <strong>PCD Franchise</strong>, <strong>Manufacturing</strong>, or <strong>Products</strong> today?
            </div>
        </div>
        <div class="chatbot-input">
            <input type="text" placeholder="Ask something...">
            <button><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
    
    <!-- Chat Toggle Button -->
    <button class="chatbot-toggle" onclick="toggleChat()" title="Chat with Dupin AI">
        <i class="fas fa-comments"></i>
        <span class="chat-tooltip">Chat with Dupin AI!</span>
    </button>
</div>

</body>
</html>
