# Wellness_Wave
Glowing mind and  healthy body, happy heart and soulful life.
# Wellness Wave - Natural Remedies Consultation

Welcome to **Wellness Wave**, a modern PHP-powered platform dedicated to natural remedies, holistic wellness, and expert consultation. This project features a soothing ocean-inspired design, interactive navigation, and a robust session-based authentication system.

---

## Features

- **Session-Based User Authentication:**  
  Users must log in to access the main page; unauthenticated users are redirected to the login/homepage.

- **Responsive Top Navigation:**  
  Fixed top nav bar with animated 3D cube logo, brand name, and quick links to key site resources.

- **Disease Quick Navigation:**  
  Horizontal disease nav bar provides instant access to information about various health conditions.

- **Mobile-Friendly Menu:**  
  Vertical sliding menu for mobile devices; toggled with hamburger and close icons, with overlay for focus.

- **Image Slider:**  
  Interactive, auto-advancing slider highlights popular natural remedies and wellness tips.

- **Introductory Section:**  
  Welcoming message and brief overview of the platform’s mission.

- **Holistic Features:**  
  Three-card grid showcasing Natural Remedies, Expert Consultation, and Preventive Care.

- **Search Bar:**  
  Fixed search input for quick navigation to specific conditions.

- **Comprehensive Footer:**  
  Contact info, social media links, quick links, and legal notices.

---

## Getting Started

### Prerequisites

- PHP 7.x or newer
- Web server (Apache, Nginx, etc.)
- Internet connection for CDN resources (Font Awesome)

### File Structure

```
/PHP_Files/
  homepagephp.php
  aboutus.php
  ourapproach.php
  blog.php
  FAQs.php
  contact.php
  auth.php
  ...
index.php (or the main file this README describes)
README.md
```

### Setup

1. **Clone or Download the Repository**
   - Place all files in your web server's document root.

2. **Session Handling**
   - The main file expects a PHP session variable `$_SESSION['user_email']`.  
     Users who are not logged in are redirected to the login page (`homepagephp.php`).

3. **Navigation Links**
   - Update navigation links if your paths differ from the sample (`http://localhost//PHP_Files/...`).

4. **Image Assets**
   - Slider images use remote URLs (Pinterest). Replace these with your own images if needed.

5. **Customization**
   - You can change the color palette, branding, featured diseases, or footer details in the HTML/CSS.

---

## Usage

1. **Login or Sign Up**
   - Access authentication via the navigation bar or mobile menu.

2. **Explore Remedies**
   - Use the top navigation or disease quick-links to browse content.

3. **Consult Experts**
   - Find personalized wellness advice in the Expert Consultation section.

4. **Utilize the Search Bar**
   - Quickly search for conditions or remedies.

---

## Technologies Used

- **PHP**: Backend session management and page logic.
- **HTML5 & CSS3**: Responsive design, custom cube logo animation, and layout.
- **JavaScript**: Interactive slider, mobile menu, and cube rotation toggle.
- **Font Awesome**: Icons for features and social links (via CDN).

---

## Customization

- **Add/Remove Diseases:**  
  Edit the `.disease-nav` links in the HTML.

- **Change Slider Images/Captions:**  
  Replace image URLs and caption text in the `.slider-container` section.

- **Footer Info:**  
  Update contact, social, and legal info in the `<footer>`.

- **Branding:**  
  Change logo text, colors in `:root`, or replace the cube logo with your own.

---

## Accessibility & Responsiveness

- Fully responsive for desktop, tablet, and mobile.
- Keyboard and screen reader friendly navigation and buttons.
- High contrast color scheme for readability.

---

## License

This project is intended for educational and non-commercial use.  
For commercial deployment, update assets and seek proper licensing for third-party images and libraries.

---

## Acknowledgements

- [Font Awesome](https://fontawesome.com/)
- [Pinterest](https://www.pinterest.com/) (for demo images)
- Inspiration from holistic wellness and oceanic design themes.

---

## Contact

For questions or feedback, email **info@wellnesswave.com**.

---

**Ride the wave to wellness!**
# Wellness Wave Front Page

This is the **front page** of the Wellness Wave website, a modern, animated landing page designed to welcome visitors to a holistic health platform focused on natural treatments and phobia healing. The design combines soothing animated water waves, a rotating 3D cube logo, and a minimalist central introduction.

---

## Features

- **Animated Water Waves:**  
  Realistic wave animation created using SVG backgrounds and CSS keyframes for a calming oceanic effect.

- **3D Rotating Cube Logo:**  
  Interactive cube at the center of the page, representing the brand values (WELLNESS, WAVE, HEAL, CARE, HOPE, PEACE). Clicking the cube toggles its rotation.

- **Central Welcome Message:**  
  Large, visually impactful heading and tagline to introduce the site's purpose and invite exploration.

- **Responsive Design:**  
  Fully responsive and centered layout for all screen sizes.

- **Modern UI/UX:**  
  Uses gradients, shadows, and smooth transitions for a premium, relaxing visual experience.

---

## Getting Started

### Prerequisites

- **Web Server:** Apache, Nginx, or any server capable of serving HTML/CSS/JS.
- **No backend required:** This file is pure frontend, but links point to PHP backend pages (e.g., `homepagephp.php`).

### Usage

1. **Deploy the HTML File:**
   - Save the file as `index.html` or your desired front page filename.
   - Place it in your website's root directory.

2. **Branding Navigation:**
   - The cube logo links to your PHP homepage:  
     `[http://localhost//PHP_Files/homepagephp.php]`
   - Update this link to match your actual homepage path.

3. **Customization:**
   - **Cube Faces:** Edit the text on each cube face to suit your brand values.
   - **Wave Colors:** Adjust the background gradient and SVG wave colors in the CSS for your palette.
   - **Heading & Tagline:** Change `<h1>` and `<p>` in the `.content` section for your message.
   - **Fonts:** The page uses Montserrat via system font stack, but you can link Google Fonts for more options.

---

## Technologies Used

- **HTML5**
- **CSS3** (Flexbox, gradients, keyframes, perspective)
- **JavaScript** (Cube interaction, wave motion effects)
- **SVG** (for wave backgrounds)

---

## Accessibility

- High color contrast for readability.
- Large clickable area for the cube logo.
- Text is centered and uses accessible font sizes.

---

## Customization Tips

- **Cube Size:** Change `.cube-container` and `.cube div` width/height for larger/smaller logo.
- **Wave Animation:** Adjust `@keyframes wave` duration for faster/slower waves.
- **Cube Animation:** Tweak `rotateCube` keyframes or timing for different rotation effects.
- **Interactive Waves:** Mouse movement subtly affects wave positions for extra interactivity.

---

## Example File Structure

```
/PHP_Files/
  homepagephp.php
  ...
index.html
README.md
```

---

## Credits

- **SVG Wave Generator:** [Get Waves](https://getwaves.io/)
- **Design Inspiration:** Ocean, wellness, and modern minimalist themes.

---

## License

This front page is provided for educational and promotional use.  
For commercial deployment, ensure all branding and assets comply with your usage rights.

---

**Ride the wave to wellness.**
# Wellness Wave Web Pages

Welcome to the **Wellness Wave** project! This repository contains HTML pages for a holistic health platform focused on natural remedies, preventive care, and wellness education. The site is designed to be visually appealing, easy to navigate, and responsive for all devices.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Pages Included](#pages-included)
- [Getting Started](#getting-started)
- [Customization](#customization)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Project Overview

**Wellness Wave** is a web-based platform dedicated to:
- Evidence-based natural remedies
- Lifestyle and nutrition tips
- Preventive care education
- Holistic wellness philosophy

The project includes static HTML pages styled with CSS, featuring an animated vertical navigation bar and a clean, modern layout.

## Features

- **Animated Vertical Navigation Bar:** Slide-in menu for easy access to all main pages.
- **Responsive Design:** Optimized for desktops, tablets, and smartphones.
- **Custom Styling:** Uses gradients, card layouts, and modern fonts for a fresh look.
- **Accessibility:** Navigation toggle includes ARIA labels for improved accessibility.
- **Informative Content:** FAQ, Blog, and Contact pages present useful information in an organized format.

## Pages Included

- `Contact Us`: How to reach the Wellness Wave team, support info, and feedback options.
- `FAQ`: Common questions about the platform, remedies, safety, and content updates.
- `Blog`: Categories of articles on natural remedies, nutrition, mind & body, health myths, beauty, and research.

Each page is self-contained with its own styling and navigation.

## Getting Started

To view the site locally:

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/wellness-wave.git
   ```

2. **Open the HTML files:**
   - Open any of the HTML files (`contact.html`, `faq.html`, `blog.html`) in your web browser.

3. **Navigation:**
   - Use the animated vertical navigation bar to switch between pages.

> **Note:** The navigation links point to PHP endpoints (e.g., `homepagephp.php`, `aboutus.php`), which may need to be updated based on your backend setup or replaced with `.html` files for static use.

## Customization

- **Branding:** Update colors, logos, and domain details to match your branding.
- **Content:** Replace placeholder text (e.g., phone numbers, emails) with real contact info.
- **Navigation:** Adjust navigation links as needed for your deployment (static or dynamic).

## Folder Structure

```
wellness-wave/
│
├── contact.html
├── faq.html
├── blog.html
├── README.md
└── assets/
    ├── images/
    └── css/
```
> *Note: This is a suggested structure. You may organize files as needed.*

## Contributing

We welcome contributions! To contribute:

1. Fork the repository.
2. Make your changes.
3. Submit a pull request with a description of your improvements.

## License

This project is open source and available under the [MIT License](LICENSE).

## Contact

For questions, feedback, or contributions, please reach out via:

- **Email:** support@wellnesswave.com
- **Location:** Lahore, Pakistan
- **Feedback Form:** Available on the Contact Us page

---

**&copy; 2025 Wellness Wave. All rights reserved.**
# Wellness Wave - About & Approach Pages

Welcome to the **Wellness Wave** project!  
This repository contains the "About Us" and "Our Approach" HTML pages for the Wellness Wave platform—a holistic health website focused on natural remedies, preventive healthcare, and accessible wellness education.

---

## 🖥️ Project Overview

**Wellness Wave** aims to empower individuals with knowledge, resources, and practical solutions for everyday health.  
Our web pages are built with modern HTML and CSS, featuring:

- Animated vertical navigation bar for seamless page transitions
- Responsive design for all devices
- Clean, welcoming layouts
- Accessibility features (ARIA labels, readable fonts)
- Informative sections about mission, team, and methodology

---

## 📃 Files Included

- `aboutus.html`  
  **About Us page** presenting the platform’s mission and team.
- `approach.html`  
  **Our Approach page** detailing the holistic, evidence-based, and user-focused methodology.

---

## ✨ Features

- **Animated Vertical Nav Bar:**  
  - Fixed sidebar navigation with smooth slide-in animation  
  - Navigation toggle button with ARIA label for accessibility
- **Responsive Layout:**  
  - Adapts to screens of all sizes
- **Modern Styling:**  
  - Gradients, card sections, and clear visual hierarchy
- **Team Introduction:**  
  - Grid display of key team roles: Health Educators, Developers, Wellness Consultants
- **Holistic Approach:**  
  - Bullet points with icons for each pillar: Evidence-Based, Natural Healing, Holistic Well-being, User-First Design, Secure & Reliable

---

## 🚀 Getting Started

1. **Clone the repository:**
   ```sh
   git clone https://github.com/YOUR-USERNAME/wellness-wave.git
   ```
2. **Open the HTML files:**
   - `aboutus.html`
   - `approach.html`
   in your web browser.

3. **Navigate between pages:**
   - Use the sidebar navigation to switch between Home, About Us, FAQ, Blog, and Contact (update links as needed).

> **Note:** Navigation links currently point to PHP endpoints (e.g., `/PHP_Files/aboutus.php`).  
> For a static site, update these to match your HTML filenames.

---

## 🛠️ Customization

- **Branding:**  
  Update colors, logos, and company information as desired.
- **Content:**  
  Personalize team member descriptions, mission statement, and methodology details.
- **Navigation:**  
  Adjust sidebar links to fit your deployment environment.

---

## 📂 Folder Structure (Suggested)

```
wellness-wave/
│
├── aboutus.html
├── approach.html
├── README.md
└── assets/
    ├── css/
    └── images/
```

---

## 🤝 Contributing

We welcome contributions!  
- Fork the repo  
- Make improvements  
- Submit a pull request

---

## 📝 License

This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact

- **Email:** support@wellnesswave.com
- **Location:** Lahore, Pakistan

---

**&copy; 2025 Wellness Wave. All rights reserved.**

# WELLNESS WAVE - Phobia Consultation Portal

Welcome to the **Wellness Wave** Phobia Consultation Portal!  
This project provides a comprehensive, modern web interface for exploring and managing health conditions, focusing on natural remedies, nutritional guidance, and holistic wellness.

---

## 🌊 Project Overview

**Wellness Wave** is a user-centric health platform designed to help people understand, prevent, and manage various health conditions—especially phobias and chronic issues like asthma, obesity, digestive problems, and more.  
The portal features interactive guides, expert consultation options, and practical advice for all age groups.

---

## 🖥️ Features

- **Animated Cube Logo:** Eye-catching rotating 3D logo for branding.
- **Horizontal Phobia Navigation:** Quick links to common health conditions and phobias.
- **Vertical Navigation Bar:** Easy access to all main sections (Home, About, Approach, Consultants, FAQ, Contact, Blog).
- **Tabbed Age Group Advice:** Separate, tailored health guidance for adults, children, and elderly.
- **Dietary & Exercise Plans:** Age-specific daily routines, exercise recommendations, and DIY remedies.
- **Modern Responsive Design:** Works seamlessly on desktop and mobile devices.
- **Search Bar:** Quickly find health conditions or topics.
- **Footer:** Quick links, contact info, and social media integration.

---

## 📃 Pages & Sections Included

- **Header:** Logo, site title, login/signup buttons.
- **Horizontal Nav:** ~150 phobia/condition links (example subset shown).
- **Vertical Nav:** Main page navigation.
- **Main Content:**  
  - Asthma Care comprehensive guide (with tabs for Adults, Children, Elderly)
  - Introductory welcome text
- **Footer:** About, quick links, contact, social media, legal info.

---

## 🚀 Getting Started

To run the portal locally:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/YOUR-USERNAME/wellness-wave-phobia-portal.git
   ```

2. **Open the HTML File**
   - Open the main HTML file (e.g., `index.html` or your saved filename) in your web browser.

3. **Navigation**
   - Use the vertical and horizontal navigation bars to explore different health topics.
   - Click on "Login" or "Sign Up" for authentication (currently linked to a placeholder page).

> **Note:** Navigation links point to local PHP endpoints (e.g., `/PHP_Files/homepagephp.php`).  
> Update these to reflect your actual file structure or adapt for static hosting as required.

---

## 🛠️ Customization

- **Branding:**  
  Edit colors, logo sides, and text to reflect your brand.
- **Content:**  
  Add or update phobia links, health advice, and contact info as needed.
- **Navigation:**  
  Adjust sidebar and footer links for your deployment.
- **Authentication:**  
  Integrate with your backend for user login and sign-up.

---

## 📂 Suggested Folder Structure

```
wellness-wave-phobia-portal/
│
├── index.html
├── README.md
├── assets/
│   ├── images/
│   └── css/
├── PHP_Files/
│   └── (aboutus.php, homepagephp.php, etc.)
```

---

## 🤝 Contributing

We welcome your contributions!
1. Fork the repository.
2. Create a new branch for your feature/fix.
3. Submit a pull request with a description of your changes.

---

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📬 Contact

- **Email:** info@wellnesswave.com
- **Phone:** +123 456 7890
- **Location:** Earth 🌍

---

**&copy; 2025 Wellness Wave. All rights reserved.**

# WELLNESS WAVE - Weight Management & Phobia Consultation Portal

Welcome to the **Wellness Wave** Weight Management and Phobia Consultation Portal!  
This HTML/CSS web project provides a comprehensive guide for understanding, preventing, and managing excess body fat (obesity) and related health conditions, with advice tailored for all age groups.

---

## 🌊 Project Overview

**Wellness Wave** is a holistic health platform offering practical guidance for common health issues, emphasizing natural remedies, age-appropriate advice, and user-friendly navigation.  
This portal features:
- A modern, responsive interface
- Interactive navigation for health topics and phobias
- Detailed weight management advice for adults, children, and elderly
- DIY/home remedies and dietary/exercise plans
- Quick access to other Wellness Wave resources

---

## 🖥️ Features

- **Animated Cube Logo:** Branded, interactive 3D logo in the header.
- **Horizontal Phobia Navigation:** Quickly browse numerous health conditions and phobias.
- **Vertical Navigation:** Easy sidebar access to all site sections (Home, About Us, Approach, Consultants, FAQ, Blog, Contact).
- **Tabbed Age Group Guidance:** Switch between adults, children, and elderly for targeted advice.
- **Dietary & Exercise Plans:** Age-appropriate daily routines and tips for weight management.
- **DIY/Home Remedies:** Evidence-based home solutions for fat loss and better health.
- **Modern Responsive Design:** Optimized for desktops, tablets, and mobile devices.
- **Footer:** About info, quick links, contact details, social media, and legal links.
- **Search Bar:** Quickly search for conditions or topics.

---

## 📃 Page Structure

- **Header:** Animated cube logo, site title, login/sign-up buttons.
- **Horizontal Navigation:** Links to phobia/condition pages (example subset provided).
- **Vertical Navigation:** Sidebar links to main site sections.
- **Main Content:**
  - **Info Container:** Weight management guide, precautions, dietary plans, exercises, and remedies for adults, children, and elderly (switchable tabs).
  - **Intro Text:** Welcome and platform overview.
- **Footer:** About, quick links, contact, social icons, legal info.

---

## 🚀 Getting Started

To view the portal locally:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/YOUR-USERNAME/wellness-wave-weight-management.git
   ```

2. **Open the HTML File**
   - Open your saved HTML file (e.g., `index.html`) in your web browser.

3. **Navigation**
   - Use the horizontal and vertical navigation bars to explore different health topics and site sections.
   - Use the age group tabs to view advice for specific age ranges.
   - Use the search bar to find conditions or tips quickly.

> **Note:** Some navigation links point to PHP files or other pages (`/PHP_Files/homepagephp.php`, `/about.html`, etc.).  
> Update these links to match your actual file structure or backend as needed.

---

## 🛠️ Customization

- **Branding:**  
  Update colors, logo text, and site name in the CSS and HTML as desired.
- **Content:**  
  Add/remove phobia links, update health advice and contact information.
- **Navigation:**  
  Adjust sidebar and footer links for your deployment.
- **Authentication:**  
  Integrate with your backend for login/sign-up functionality.

---

## 📂 Suggested Folder Structure

```
wellness-wave-weight-management/
│
├── index.html
├── README.md
├── assets/
│   ├── images/
│   └── css/
├── PHP_Files/
│   └── (homepagephp.php, aboutus.php, etc.)
```

---

## 🤝 Contributing

We welcome your contributions!
1. Fork the repository.
2. Make your improvements.
3. Submit a pull request with a description of your changes.

---

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📬 Contact

- **Email:** info@wellnesswave.com
- **Phone:** +123 456 7890
- **Location:** Earth 🌍

---

**&copy; 2025 Wellness Wave. All rights reserved.**
# WELLNESS WAVE

**WELLNESS WAVE** is an informational web platform dedicated to providing guidance and resources for phobia consultations and holistic health, focusing on natural remedies, dietary plans, exercise suggestions, and home remedies for various health conditions—especially digestive health across age groups.

---

## 🌊 Overview

WELLNESS WAVE offers:
- A modern, responsive UI with animated cube logo and interactive tabs for age-based advice.
- Comprehensive guides for common conditions (e.g., digestive problems, obesity, asthma, panic attacks, etc.)
- Navigation for 150+ phobias and health conditions.
- Expert consultation links, FAQs, blog, and easy contact options.
- Dietary plans, exercise suggestions, and DIY remedies tailored for adults, children, and the elderly.
- Quick search bar for easy access to information.

---

## 🚀 Features

- **Animated Cube Logo:** Interactive and visually engaging logo.
- **Horizontal & Vertical Navigation:** Browse by phobia or site section.
- **Tabbed Content:** Age-specific health advice and plans.
- **Responsive Design:** Usable on desktop, tablet, and mobile.
- **Search Functionality:** Quickly find your condition or topic.
- **Footer with Social Links:** Connect on Facebook, Twitter, Instagram, and YouTube.

---

## 🏗️ Project Structure

```
.
├── index.html         # Main HTML file (provided above)
├── README.md          # Project documentation
├── /PHP_Files/        # Backend PHP files for navigation and consultation
│    ├── homepagephp.php
│    ├── auth.php
│    ├── aboutus.php
│    ├── ourapproach.php
│    ├── expertconsultants.php
│    ├── FAQs.php
│    ├── contacts.php
│    ├── blog.php
│    ├── feetfungus.php
│    ├── bodyfats.php
│    ├── ... (150+ phobia pages)
```

---

## 🖥️ Installation & Usage

1. **Clone the repository** and place the files in your local web server directory (e.g., XAMPP `htdocs`).
2. Make sure all referenced PHP files exist in `PHP_Files/`.
3. Open `index.html` in your browser or set up routing to display it as the homepage.
4. Click navigation links to explore resources and guides for various health conditions.

---

## 📝 Customization

- **Add More Phobia Pages:** Copy an existing PHP file and update content for new phobias.
- **Update Dietary/Exercise Plans:** Modify the HTML in the `.info-container` for relevant changes.
- **Enhance Interactivity:** Add JavaScript for advanced search, filter, or user login/signup features.
- **Backend Integration:** Connect forms and navigation to database-backed PHP endpoints for dynamic content.

---

## 🤝 Contributing

Want to improve WELLNESS WAVE?
- Fork the repo, make changes, and submit a pull request!
- Suggest new phobia guides, home remedies, or UX improvements.

---

## 📬 Contact

- Email: info@wellnesswave.com
- Phone: +123 456 7890
- Location: Earth 🌍

---

## 🔒 License

This project is open source for educational and non-commercial use. Check with project maintainers for specific licensing info.

---

## 💡 Credits

Designed by WELLNESS WAVE Team. Inspired by holistic health and wellness best practices.

---

## 🏁 Start Riding the Wellness Wave!

Explore the site, search for your condition, or get expert advice. Your health journey starts here!
# WELLNESS WAVE - Feet Fungus (Athlete's Foot) Consultation Portal

Welcome to the **Wellness Wave** portal!  
This web project offers a comprehensive, interactive guide to understanding, preventing, and managing feet fungus (Athlete's Foot) for all age groups.  
It features responsive design, easy navigation, and actionable health advice.

---

## 🌊 Project Overview

Wellness Wave is a holistic health platform focused on natural remedies, nutritional guidance, and wellness education.  
This page is dedicated to **Feet Fungus Care**, providing practical advice and home remedies for adults, children, and older people, alongside age-specific dietary and exercise plans.

---

## 🖥️ Features

- **Animated Cube Logo:** Interactive 3D cube for branding in the header.
- **Horizontal Navigation:** Quick links to various health conditions and phobias.
- **Vertical Sidebar Navigation:** Easy access to Home, About, Approach, Consultants, FAQ, Contact, and Blog.
- **Tabbed Age Group Guidance:** Toggle between tailored advice for Adults, Children, and Older People.
- **Diet & Exercise Plans:** Daily meal timings, food tips, and exercises for each age group.
- **DIY/Home Remedies:** Natural solutions for feet fungus using household items.
- **Search Bar:** Quickly find health topics or conditions.
- **Footer:** Quick links, contact info, social media, and legal info.
- **Responsive Design:** Mobile-friendly and adapts to all screen sizes.

---

## 📃 Page Structure

- **Header:** Animated cube logo, site title, login/sign-up buttons.
- **Horizontal Navigation:** Links to common phobias and health conditions.
- **Vertical Sidebar Navigation:** Main site sections.
- **Main Content:**  
  - **Info Container:** Feet Fungus (Athlete's Foot) care guide, precautions, diet, exercise, home remedies, and age group tabs.
  - **Intro Text:** Welcome and platform overview.
- **Footer:** About, quick links, contact, social media, legal info.

---

## 🚀 Getting Started

To run the portal locally:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/YOUR-USERNAME/wellness-wave-feetfungus.git
   ```

2. **Open the HTML File**
   - Open the file (e.g., `index.html`) in your web browser.

3. **Navigation**
   - Use the sidebar and horizontal navigation bars to explore topics.
   - Switch age group tabs for tailored advice.
   - Use the search bar to find specific health conditions.

> **Note:** Navigation links point to PHP endpoints (e.g., `/PHP_Files/homepagephp.php`).  
> You may need to update these links to match your own site structure or use static `.html` files.

---

## 🛠️ Customization

- **Branding:**  
  Edit colors, logo text, and site title in the HTML/CSS.
- **Content:**  
  Add/remove phobia links, update health advice, and contact info.
- **Navigation:**  
  Adjust sidebar and footer links for your deployment.
- **Authentication:**  
  Integrate with your backend for login/sign-up.

---

## 📂 Suggested Folder Structure

```
wellness-wave-feetfungus/
│
├── index.html
├── README.md
├── assets/
│   ├── images/
│   └── css/
├── PHP_Files/
│   └── (homepagephp.php, aboutus.php, etc.)
```

---

## 🤝 Contributing

We welcome your contributions!
1. Fork the repository.
2. Make your changes.
3. Submit a pull request with a description of your improvements.

---

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📬 Contact

- **Email:** info@wellnesswave.com
- **Phone:** +123 456 7890
- **Location:** Earth 🌍

---

**&copy; 2025 Wellness Wave. All rights reserved.**
# WELLNESS WAVE - Hemorrhoids Consultation Portal

Welcome to the **Wellness Wave** Hemorrhoids Consultation Portal!  
This project provides a comprehensive, interactive guide for understanding, preventing, and managing hemorrhoids for all age groups.

---

## 🌊 Project Overview

Wellness Wave is a holistic health platform focused on natural remedies, nutrition, and wellness education.  
This page is dedicated to **Hemorrhoids Care**, offering practical advice, dietary plans, exercises, and home remedies for adults, children, and older people.

---

## 🖥️ Features

- **Animated Cube Logo:** Interactive 3D cube for an engaging branding experience.
- **Horizontal Phobia Navigation:** Quick links to common health conditions and phobias.
- **Vertical Sidebar Navigation:** Easy access to Home, About Us, Our Approach, Consultants, FAQ, Contact, and Blog.
- **Tabbed Age Group Guidance:** Toggle between tailored advice for Adults, Children, and Older People.
- **Dietary and Exercise Plans:** Daily meal timings and exercise suggestions for each age group.
- **DIY/Home Remedies:** Evidence-based home strategies for symptom relief.
- **Search Bar:** Easily search for health topics or conditions.
- **Footer:** Quick links, contact info, social media, and legal info.
- **Responsive Design:** Mobile-friendly and adapts to all screen sizes.

---

## 📃 Page Structure

- **Header:** Animated cube logo, site title, login/sign-up buttons.
- **Horizontal Navigation:** Links to other health conditions and phobias.
- **Vertical Sidebar Navigation:** Main sections of Wellness Wave.
- **Main Content:**  
  - **Info Container:** Comprehensive Hemorrhoids care guide, precautions, diet plans, exercises, home remedies, and age group tabs.
  - **Intro Text:** Welcome and platform overview.
- **Footer:** About, quick links, contact, social icons, legal info.

---

## 🚀 Getting Started

To run the portal locally:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/YOUR-USERNAME/wellness-wave-hemorrhoids.git
   ```

2. **Open the HTML File**
   - Open the file (e.g., `index.html`) in your web browser.

3. **Navigation**
   - Use the sidebar and horizontal navigation to explore different topics.
   - Click age group tabs for tailored hemorrhoids advice.
   - Use the search bar for quick topic lookup.

> **Note:** Navigation links point to PHP endpoints (e.g., `/PHP_Files/homepagephp.php`).  
> You may need to update these for your own structure or static HTML deployment.

---

## 🛠️ Customization

- **Branding:**  
  Update colors, logos, and site title in the HTML/CSS.
- **Content:**  
  Add/remove phobia links, update health advice, and contact info.
- **Navigation:**  
  Adjust sidebar and footer links to fit your deployment.
- **Authentication:**  
  Integrate with your backend for login/sign-up if needed.

---

## 📂 Suggested Folder Structure

```
wellness-wave-hemorrhoids/
│
├── index.html
├── README.md
├── assets/
│   ├── images/
│   └── css/
├── PHP_Files/
│   └── (homepagephp.php, aboutus.php, etc.)
```

---

## 🤝 Contributing

We welcome contributions!
1. Fork the repository.
2. Make your improvements.
3. Submit a pull request with a description of your changes.

---

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📬 Contact

- **Email:** info@wellnesswave.com
- **Phone:** +123 456 7890
- **Location:** Earth 🌍

---

**&copy; 2025 Wellness Wave. All rights reserved.**
Skip to content
Navigation Menu
Copilot

Type / to search
Workbench

README.md
Press Delete to close.

Preview

Code
115 lines · 3 KB

README.md file contents
  1
  2
  3
  4
  5
  6
  7
  8
  9
 10
 11
 12
 13
 14
 15
 16
 17
 18
 19
 20
 21
 22
 23
 24
 25
 26
 27
 28
 29
 30
 31
 32
# WELLNESS WAVE - Liver Health Consultation Portal

Welcome to the **Wellness Wave** Liver Health Consultation Portal!  
This project delivers a modern, interactive web guide for understanding, preventing, and managing liver health issues across all age groups.

---

## 🌊 Project Overview

Wellness Wave is a holistic health platform focused on natural remedies, nutrition, and wellness education.  
This page is dedicated to **Liver Health**, offering practical advice, dietary plans, exercises, and home remedies for adults, children, and older people.

---

## 🖥️ Features

- **Animated Cube Logo:** Engaging 3D cube for branding in the header.
- **Horizontal Phobia Navigation:** Quick links to common health conditions and phobias.
- **Vertical Sidebar Navigation:** Easy access to Home, About Us, Our Approach, Consultants, FAQ, Contact, and Blog.
- **Tabbed Age Group Guidance:** Toggle between targeted advice for Adults, Children, and Older People.
- **Dietary and Exercise Plans:** Daily meal timings and exercise suggestions for each age group.
- **DIY/Home Remedies:** Evidence-based natural solutions for liver health.
- **Search Bar:** Quickly find health topics or conditions.
- **Footer:** Quick links, contact info, social media, and legal info.
- **Responsive Design:** Mobile-friendly and adapts to all screen sizes.

---

## 📃 Page Structure

- **Header:** Animated cube logo, site title, login/sign-up buttons.
- **Horizontal Navigation:** Links to other health conditions and phobias.
Copilot said: ````markdown name=README.md # WELLNESS WAVE - Liver Health README.md v7 # WELLNESS WAVE - Liver Health Consultation Portal Welcome to the **Wellness Wave** Liver Health Consultation Portal! This project delivers a modern, interactive web guide for understanding, preventing, and managing liver health issues across all age groups. ---
# WELLNESS WAVE

WELLNESS WAVE is an informational and consultation platform focused on holistic well-being, offering resources and guides for various health conditions and phobias. The site emphasizes natural remedies, nutrition, exercise, and age-specific advice for muscle health and more.

---

## 🌊 Overview

- **Comprehensive Health Guides:** Detailed sections for muscle health, digestive health, and other conditions, with advice tailored for adults, children, and the elderly.
- **Phobia Navigation:** Horizontal navigation bar linking to ~150 conditions/phobias (subset shown in code).
- **Modern, Responsive Design:** Themed with teal and dark blue, optimized for desktop and mobile devices.
- **User Actions:** Easy login/sign-up, quick access to consultation, blog, FAQs, and contact info.
- **Interactive Elements:** Animated cube logo, tabs for age groups, vertical and horizontal navigation, and search bar.

---

## 🚀 Features

- **Animated Cube Logo:** Clickable cube with rotating animation for branding.
- **Age-Specific Advice:** Tabs for Adults, Children, and Older People, each with custom dietary, exercise, and home remedy tips.
- **Quick Search:** Search bar for instant access to condition information.
- **Extensive Navigation:** Easy access to many phobia and health condition pages via horizontal and vertical links.
- **Footer:** Social media links, quick links, contact details, and legal information.

---

## 🏗️ Project Structure

```
/PHP_Files/
    homepagephp.php
    auth.php
    aboutus.php
    ourapproach.php
    expertconsultants.php
    FAQs.php
    contacts.php
    blog.php
    feetfungus.php
    bodyfats.php
    digestivesystem.php
    panicattack.php
    mucus.php
    liver.php
    joint.php
    mucles.php
    Asthma.php
    hair.php
    hommorides.php
    ... (and other phobia/condition pages)
index.html
README.md
```

---

## 🖥️ Usage

1. **Deployment:** Place all files in your local or online web server (e.g., XAMPP `htdocs/` or your hosting public directory).
2. **Navigation:** Open `index.html` or access through your backend routing (PHP).
3. **Content Expansion:** Duplicate or edit PHP files in `/PHP_Files/` for new phobia or health condition pages.
4. **Customization:** Modify HTML/CSS for color, branding, and content updates as desired.

---

## 📝 Customization & Extending

- **Add More Conditions:** Copy template PHP pages and update content for new phobias or health topics.
- **Update Dietary/Exercise Plans:** Directly edit the HTML in section `.info-container` for changes.
- **Backend Integration:** Connect login/signup and other forms to your backend authentication and database.
- **Improve Interactivity:** Add more JavaScript for advanced features (e.g., dynamic search, filtering).

---

## 🤝 Contributing

- Fork this repository, make your enhancements, and submit a pull request.
- Suggest new health guides, remedies, or site features.

---

## 📬 Contact

- **Email:** info@wellnesswave.com
- **Phone:** +123 456 7890
- **Location:** Earth 🌍

---

## 🔒 License

Open source for educational and non-commercial use. Check with maintainers for further licensing details.

---

## 💡 Credits

Designed by the WELLNESS WAVE Team. Content inspired by holistic health and wellness practices.

---

## 🏁 Get Started!

Explore conditions, consult experts, and discover holistic health solutions. Your journey to wellness starts here!

# WELLNESS WAVE - Phobia Consultation

## Overview

WELLNESS WAVE is a web platform that offers resources, guides, and holistic advice for phobia-related health concerns across different age groups. It includes animated branding, easy navigation, health information tabs, search functionality, and a modern, responsive interface.

---

## Features

- Animated rotating 3D cube logo (brand, clickable)
- Login and Sign Up buttons
- Horizontal scroll menu for health topics (phobias, conditions)
- Vertical sidebar navigation for main website pages
- Tabbed, age-targeted health guides (adults, children, elderly)
- Dietary, exercise, and home remedy suggestions
- Responsive and mobile-friendly layout
- Footer with contact & social media links

---

## Usage

1. **Navigation**
   - Use the horizontal bar for quick access to health topics.
   - Use the sidebar for main site sections (Home, About Us, Blog, etc.).
   - Switch between Adults, Children, and Elderly health guides using the tabs.

2. **Cube Logo**
   - Click the spinning cube logo to pause/resume animation.
   - Cube faces and text are for branding and navigation.

3. **Search**
   - Use the bottom-left search bar to quickly find content.

4. **Responsiveness**
   - The layout adapts to mobile and tablet devices.

---

## Setup

1. Place `index.html` (or your main HTML file) and related assets in your project root.
2. PHP pages should be placed in `/PHP_Files/` for menu links to work, or update URLs as needed.
3. If using FontAwesome for social icons, ensure to include the FontAwesome CDN in your HTML `<head>`.
4. To serve PHP locally, use [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/), or similar.

---

## File Structure



---

## Customization

- Change colors by editing CSS `:root` variables.
- Add/remove health topics in the horizontal nav and main content as needed.
- Update logo and branding in HTML & CSS.
- For new age groups/content, copy the `.age-content` section and adjust accordingly.

---

## JavaScript Behaviors

- `toggleRotation()`: Start/stop the spinning cube.
- `openAgeTab(event, ageGroup)`: Show the selected age-related content section.
- Vertical navigation highlights current section on click.
- Auth form toggle reads query string for mode (login/signup).

---

## Support

For questions, support, or feedback:

- Email: info@wellnesswave.com
- Location: Earth 🌍

---

© 2025 Wellness Wave. All rights reserved.

# WELLNESS WAVE - Phobia Consultation

## Project Overview
WELLNESS WAVE is a responsive, user-friendly web platform dedicated to providing extensive consultation and resources related to phobias, panic attacks, and associated health topics across different age groups. It offers:

- Animated 3D cube logo branding
- Easy navigation with horizontal and vertical menus
- Age-group-specific guides for adults, children, and elderly
- Dietary plans, precautions, exercise recommendations, and home remedies
- Search functionality and responsive design for all devices

---

## Features

- **Animated Cube Logo:** Rotating 3D cube with brand-related text; can be clicked to toggle rotation.
- **Authentication Buttons:** Login and Sign Up buttons with hover effects.
- **Horizontal Navigation Bar:** Scrollable menu with links to various health topics and phobia pages.
- **Vertical Sidebar Navigation:** Links to main website sections like Home, About Us, Our Approach, Consultants, FAQ, Contact, Blog.
- **Tabbed Content:** Detailed sections for Adults, Children, and Older People, each with:
  - Explanation of condition
  - Precautions
  - Dietary plan with meal timings
  - Exercise suggestions
  - DIY/Home remedies
- **Search Bar:** Fixed search input at bottom-left corner for quick searching.
- **Footer:** Contains About info, Quick Links, Contact details, Social media icons, and legal information.
- **Responsive Design:** Adaptable layout to different screen sizes including tablets and mobile phones.

---

## Setup Instructions

1. Place all project files (HTML, CSS, JS, PHP) on a server or local environment supporting PHP for dynamic links.
2. Open the main HTML page (`index.html`) in a modern browser.
3. The authentication buttons link to local PHP files (`auth.php`) for login/signup handling.
4. Update URLs if deploying on a live server or change folder structure.
5. If using social media icons, include FontAwesome or suitable icon font.

---

## Code Structure Highlights

- **CSS Variables:** Colors and theme are managed via CSS custom properties for easy theming.
- **3D Cube Animation:** Uses CSS animations with transform-style and perspective.
- **Tab Functionality:** JavaScript manages visibility of age-group content based on clicked tabs.
- **Navigation Active States:** JavaScript toggles active classes for vertical navigation links.
- **Responsive Media Queries:** CSS adjusts layout, font sizes, and navigation for screen widths under 768px and 480px.

---

## JavaScript Documentation



---

## Best Practices Followed

- Semantic HTML5 elements and structure (`<header>`, `<main>`, `<nav>`, `<footer>`)
- CSS custom properties for consistent and maintainable styling
- Responsive design with media queries for tablets and mobiles
- Unobtrusive JavaScript to enhance user interaction without breaking core functionality
- Proper use of ARIA roles and alt attributes where applicable (add images/icons as needed)
- Comments in CSS and JS for clarity and maintainability

---

## Contact & Support

- **Email:** info@wellnesswave.com  
- **Phone:** +123 456 7890  
- **Location:** Earth 🌍

---

© 2025 Wellness Wave. All rights reserved.

# Wellness Wave Website

## Overview

Wellness Wave is a comprehensive web platform dedicated to promoting natural health, preventive care, and wellness through expert advice, evidence-based natural remedies, and personalized consultations. The platform offers a user-friendly interface with well-structured sections including Preventive Care, Natural Remedies, and Expert Consultants.

---

## Project Structure

This project contains three primary web pages:

1. **Preventive Care**  
   Focuses on strategies to maintain health and prevent illness, featuring cards on balanced diet, physical activity, sleep hygiene, hydration, stress management, and preventive checkups.

2. **Evidence-Based Natural & Herbal Remedies**  
   Showcases time-honored natural treatments grounded in scientific research, including turmeric, ginger, peppermint, echinacea, lavender, and honey.

3. **Expert Consultants**  
   Introduces a professional team of nutritionists, wellness speakers, and herbalists, providing contact details and consultation opportunities.

---

## Features

- **Consistent Branding and Theme:**  
  Unified color palette with teal blue and soft yellow highlights for a soothing, wellness-focused aesthetic using CSS variables.

- **Responsive Design:**  
  Each page adapts seamlessly for desktops, tablets, and mobile devices using CSS Grid and Flexbox with media queries.

- **Navigation Bar:**  
  A flex-based navigation menu on each page for easy access to main site sections.

- **Card Layouts:**  
  Scrollable, clickable cards with images, headings, descriptive text, and evidence references, enhanced with hover effects.

- **Accessibility:**  
  Semantic HTML5 structure, meaningful alt attributes, clear contrast for readability.

---

## Technologies Used

- HTML5 & CSS3 (with CSS Grid and Flexbox)
- Google Fonts ('Montserrat' and 'Playfair Display')
- Responsive media queries
- External image hosting for card visuals

---

## How to Run Locally

1. Clone or download the project files.
2. Open any of the `.html` files (e.g., `preventive-care.html`, `natural-remedies.html`, `experts.html`) in a modern web browser.
3. To maintain navigation links, host files on a local server or update links according to your environment.

---

## Customization Tips

- **Colors and Fonts:**  
  Modify CSS variables under `:root` to customize the color scheme.

- **Content Cards:**  
  Update or add new cards in the containers `.preventive-grid`, `.remedies-grid`, or `.grid-container` for each respective page.

- **Navigation Links:**  
  Adjust URLs in the navigation menus if deploying under different domain or folder structure.

- **Images:**  
  Replace image URLs in `<img>` tags with relevant assets.

---

## Contact Information

For more information or assistance, contact:

- Email: info@wellnesswave.com  
- Phone: +123 456 7890  
- Website: [Wellness Wave](http://localhost//PHP_Files/homepagephp.php) *(local development URL)*

---

## License & Disclaimer

All content is for informational purposes only. Consult healthcare professionals for personalized medical advice.

© 2025 Wellness Wave. All rights reserved.


