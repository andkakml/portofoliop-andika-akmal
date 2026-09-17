<!-- =========================================
     CONTACT SECTION
========================================= -->

<section class="contact-section" id="contact">

    <!-- ABSTRACT WHITE BACKGROUND -->
    <div class="contact-blob">
        <img
            src="{{ asset('images/contact/elementcontactnew.png') }}"
            alt=""
        >
    </div>

    <!-- DECORATIVE RING -->
    <div class="contact-ring"></div>

    <div class="contact-container">

        <!-- =====================================
             LEFT SIDE
        ====================================== -->

        <div class="contact-content">

            <div class="contact-label">
                <span>✦</span>
                Get In Touch
            </div>

            <h1>
                Contact Me
            </h1>

            <p class="contact-description">
                I'm open to discussing new projects, creative ideas
                or opportunities to be part of your vision.
            </p>


            <div class="contact-line"></div>


            <!-- EMAIL -->
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div>
                    <h3>Email</h3>
                    <p>andikakmal@gmail.com</p>
                </div>
            </div>

            <!-- PHONE -->
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+62 812 3456 7890</p>
                </div>
            </div>

            <!-- LOCATION -->
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3>Location</h3>
                    <p>Indonesia</p>
                </div>
            </div>


            <!-- SOCIAL -->

            <div class="contact-item">

                <div class="contact-icon">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>

                <div>
                    <h3>Follow Me</h3>
                    
                    <!-- Hapus mt-4, ganti mt-1 (atau mt-2 jika ingin sedikit jarak) -->
                    <div class="contact-social-links mt-1">
                        <div class="d-flex gap-2 justify-content-start align-items-center">
                            <!-- Instagram -->
                            <a href="https://instagram.com/andkakml" target="_blank" class="social-icon-box" title="Instagram">
                                <i class="fa-brands fa-instagram social-icon"></i>
                            </a>

                            <!-- X (Twitter) -->
                            <a href="https://x.com/andkakml" target="_blank" class="social-icon-box" title="X">
                                <i class="fa-brands fa-x-twitter social-icon"></i>
                            </a>

                            <!-- Facebook -->
                            <a href="https://facebook.com/USERNAME_ANDA" target="_blank" class="social-icon-box" title="Facebook">
                                <i class="fa-brands fa-facebook-f social-icon"></i>
                            </a>

                            <!-- GitHub -->
                            <a href="https://github.com/USERNAME_ANDA" target="_blank" class="social-icon-box" title="GitHub">
                                <i class="fa-brands fa-github social-icon"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://linkedin.com/in/USERNAME_ANDA" target="_blank" class="social-icon-box" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in social-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

</div>

        </div>


        <!-- =====================================
             RIGHT SIDE - FORM
        ====================================== -->

        <div class="contact-form-wrapper">

            <!-- Flash Message Success Modern -->
                @if(session('success'))
                    <div id="flash-message" style="
                        background: linear-gradient(135deg, #10b981, #059669);
                        color: #ffffff;
                        padding: 14px 20px;
                        border-radius: 10px;
                        margin-bottom: 24px;
                        display: flex;
                        align-items: center;
                        gap: 12px;
                        box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3);
                        font-family: inherit;
                        font-size: 15px;
                        font-weight: 500;
                        transition: all 0.5s ease;
                        opacity: 1;
                        transform: translateY(0);
                    ">
                        <svg style="width: 22px; height: 22px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>

                    <script>
                        setTimeout(function() {
                            var alert = document.getElementById('flash-message');
                            if (alert) {
                                // Efek animasi memudar dan naik ke atas
                                alert.style.opacity = '0';
                                alert.style.transform = 'translateY(-10px)';
                                
                                // Hapus dari struktur HTML setelah animasi selesai (0.5 detik)
                                setTimeout(function() {
                                    alert.remove();
                                }, 500);
                            }
                        }, 3000); // 3000ms = 3 detik
                    </script>
                @endif

            <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                @csrf

                <div class="contact-form-row">

                    <div class="contact-field">
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Your Name"
                            required
                        >
                        @error('name')
                            <span style="color: red; font-size: 14px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="contact-field">
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Your Email"
                            required
                        >
                        @error('email')
                            <span style="color: red; font-size: 14px;">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="contact-field">
                    <input
                        type="text"
                        name="subject"
                        value="{{ old('subject') }}"
                        placeholder="Subject"
                        required
                    >
                    @error('subject')
                        <span style="color: red; font-size: 14px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="contact-field">
                    <textarea
                        name="message"
                        placeholder="Your Message"
                        required
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <span style="color: red; font-size: 14px;">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="contact-submit">
                    Send Message
                    <span>→</span>
                </button>

            </form>

        </div>

    </div>

</section>