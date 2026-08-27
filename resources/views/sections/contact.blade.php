<!-- =========================================
     CONTACT SECTION
========================================= -->

<section class="contact-section" id="contact">

    <!-- ABSTRACT WHITE BACKGROUND -->
    <div class="contact-blob">
        <img
            src="{{ asset('images/contact/waveshapes.png') }}"
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
                    ✉
                </div>

                <div>
                    <h3>Email</h3>
                    <p>andikakmal@gmail.com</p>
                </div>

            </div>


            <!-- PHONE -->

            <div class="contact-item">

                <div class="contact-icon">
                    ☎
                </div>

                <div>
                    <h3>Phone</h3>
                    <p>+62 812 3456 7890</p>
                </div>

            </div>


            <!-- LOCATION -->

            <div class="contact-item">

                <div class="contact-icon">
                    ●
                </div>

                <div>
                    <h3>Location</h3>
                    <p>Indonesia</p>
                </div>

            </div>


            <!-- SOCIAL -->

            <div class="contact-item">

                <div class="contact-icon">
                    ➤
                </div>

                <div>

                    <h3>Follow Me</h3>

                    <div class="contact-social">

                        <a href="#" aria-label="GitHub">
                            GH
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            in
                        </a>

                        <a href="#" aria-label="Instagram">
                            IG
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             RIGHT SIDE - FORM
        ====================================== -->

        <div class="contact-form-wrapper">

            <!-- Flash Message Success -->
            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 12px; border-radius: 6px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
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