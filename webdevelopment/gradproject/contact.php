
<!DOCTYPE html>
<html lang="en">

<!-- ==========================
     Document Information
     Name: Coleman Mallicoat
     Date: 11/12/2026
     Course: ISLT 7355 - Web Development and Design
     Description: Professional Portfolio Contact Page
========================== -->

<head>

    <!-- ==========================
         Page Metadata
    ========================== -->

    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact | Coleman Mallicoat</title>

    <!-- ==========================
         Google Fonts
    ========================== -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <!-- Custom font used here -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- ==========================
         Stylesheets
    ========================== -->

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="nav.css">

    <!-- ==========================
         Favicons and Site Manifest
    ========================== -->

    <link rel="apple-touch-icon"
          sizes="180x180"
          href="apple-touch-icon.png">

    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="favicon-32x32.png">

    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="favicon-16x16.png">

    <link rel="shortcut icon"
          type="image/x-icon"
          href="favicon.ico">

    <link rel="manifest"
          href="site.webmanifest">

</head>

<body>

<!-- ==========================
     Shared Header
========================== -->

<?php include 'header.php'; ?>


<!-- ==========================
     Main Page Content
========================== -->

<main>

    <!-- ==========================
         Contact Image Banner
    ========================== -->

    <section class="page-banner"
             aria-labelledby="contact-title">

        <!-- Banner Image -->

        <img src="images/contact-banner.png"
             alt="A welcoming professional workspace representing communication and collaboration">

        <!-- Banner Content -->

        <div class="page-banner-content">

            <h1 id="contact-title">
                Let's Connect
            </h1>

            <p>
                Communication. Collaboration. Opportunity.
            </p>

        </div>

    </section>


    <!-- ==========================
         Contact Introduction
    ========================== -->

    <section class="contact-intro"
             aria-labelledby="contact-intro-title">

        <!-- Section Heading -->

        <div class="intro-heading">

            <span class="intro-label">
                LET'S CONNECT
            </span>

            <h2 id="contact-intro-title">
                Get in Touch
            </h2>

            <div class="accent-line"></div>

            <!-- Introduction Description -->

            <p class="contact-subtitle">
                Whether you're interested in discussing
                technology, education, leadership,
                or professional collaboration,
                I welcome the opportunity to connect.
            </p>

        </div>

    </section>


    <!-- ==========================
         Contact Information
    ========================== -->

    <section class="contact-section"
             aria-labelledby="contact-info-title">

        <!-- Section Heading -->

        <div class="intro-heading">

            <span class="intro-label">
                CONTACT INFORMATION
            </span>

            <h2 id="contact-info-title">
                Ways to Reach Me
            </h2>

            <div class="accent-line"></div>

        </div>

        <!-- Contact Information Grid -->

        <div class="contact-grid">

            <!-- Email Contact Card -->

            <article class="contact-card">

                <div class="contact-icon">

                    <img src="images/email.png"
                         alt="">

                </div>

                <h3>Email</h3>

                <p>
                    Have a question or want to
                    discuss an opportunity?
                    Email is a great way to
                    start a conversation.
                </p>

                <a href="mailto:coleman.mallicoat84@gmail.com"
                   class="contact-link">
                    coleman.mallicoat84@gmail.com
                </a>

            </article>


            <!-- Phone Contact Card -->

            <article class="contact-card">

                <div class="contact-icon">

                    <img src="images/phone.png"
                         alt="">

                </div>

                <h3>Phone</h3>

                <p>
                    For professional inquiries
                    or conversations that are
                    better handled directly,
                    you can reach me by phone.
                </p>

                <a href="tel:6366694157"
                   class="contact-link">
                    636-669-4157
                </a>

            </article>

        </div>

    </section>


    <!-- ==========================
         Professional Networking
    ========================== -->

    <section class="contact-section"
             aria-labelledby="networking-title">

        <!-- Section Heading -->

        <div class="intro-heading">

            <span class="intro-label">
                PROFESSIONAL CONNECTIONS
            </span>

            <h2 id="networking-title">
                Let's Build Something Meaningful
            </h2>

            <div class="accent-line"></div>

        </div>

        <!-- Networking Introduction -->

        <div class="academic-card">

            <h3>
                Collaboration Starts with Conversation
            </h3>

            <p>
                Throughout my career, I've found
                that some of the most valuable
                opportunities begin with a
                simple conversation.
            </p>

            <p>
                I'm particularly interested in
                connecting with professionals
                and educators who share an
                interest in technology leadership,
                instructional design, cybersecurity,
                and lifelong learning.
            </p>

            <p>
                If our interests align,
                I'd welcome the opportunity
                to exchange ideas and
                learn from one another.
            </p>

        </div>

    </section>


    <!-- ==========================
         Contact Form
    ========================== -->

    <section class="contact-form-section"
             aria-labelledby="contact-form-title">

        <!-- Section Heading -->

        <div class="intro-heading">

            <span class="intro-label">
                SEND A MESSAGE
            </span>

            <h2 id="contact-form-title">
                Contact Form
            </h2>

            <div class="accent-line"></div>

            <p class="contact-subtitle">
                Interested in connecting?
                Complete the form below
                to start a conversation.
            </p>

        </div>

        <!-- Contact Form Fields -->

        <form class="contact-form"
              action="#"
              method="post">

            <!-- Title Dropdown -->

            <div class="form-group">

                <label for="title">
                    Title
                </label>

                <select id="title"
                        name="title"
                        required>

                    <option value=""
                            disabled
                            selected>
                        Select your title
                    </option>

                    <option value="mr">Mr.</option>
                    <option value="ms">Ms.</option>
                    <option value="mrs">Mrs.</option>
                    <option value="dr">Dr.</option>
                    <option value="other">Other</option>

                </select>

            </div>


            <!-- First Name -->

            <div class="form-group">

                <label for="firstname">
                    First Name
                </label>

                <input type="text"
                       id="firstname"
                       name="firstname"
                       placeholder="Enter your first name"
                       autocomplete="given-name"
                       required>

            </div>


            <!-- Last Name -->

            <div class="form-group">

                <label for="lastname">
                    Last Name
                </label>

                <input type="text"
                       id="lastname"
                       name="lastname"
                       placeholder="Enter your last name"
                       autocomplete="family-name"
                       required>

            </div>


            <!-- Email Address -->

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input type="email"
                       id="email"
                       name="email"
                       placeholder="Enter your email address"
                       autocomplete="email"
                       required>

            </div>


            <!-- Message -->

            <div class="form-group">

                <label for="message">
                    Message
                </label>

                <textarea id="message"
                          name="message"
                          rows="6"
                          placeholder="Enter your message"
                          required></textarea>

            </div>


            <!-- Reason for Contact -->

            <fieldset class="form-options">

                <legend>
                    Reason for Contact
                </legend>

                <label>

                    <input type="radio"
                           name="reason"
                           value="professional"
                           required>

                    Professional Inquiry

                </label>

                <label>

                    <input type="radio"
                           name="reason"
                           value="academic">

                    Academic Collaboration

                </label>

                <label>

                    <input type="radio"
                           name="reason"
                           value="general">

                    General Question

                </label>

            </fieldset>


            <!-- Submit Button -->

            <button type="submit"
                    class="form-submit">
                Submit Message
            </button>

        </form>

    </section>

</main>


<!-- ==========================
     Shared Footer
========================== -->

<?php include 'footer.php'; ?>

</body>
</html>
