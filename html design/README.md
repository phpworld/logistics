# Royal Mail Website Clone

A responsive clone of the Royal Mail website built with Bootstrap 5, featuring modern design patterns and accessibility best practices.

## 🚀 Features

- **Responsive Design**: Mobile-first approach using Bootstrap 5
- **Modern Navigation**: Multi-level dropdown menus with mega menu support
- **Interactive Elements**: Tabbed interfaces, hover effects, and smooth animations
- **Accessibility**: WCAG compliant with keyboard navigation and screen reader support
- **Performance Optimized**: Lazy loading, optimized images, and efficient CSS
- **Royal Mail Branding**: Authentic color scheme and design elements

## 📁 Project Structure

```
miles/
├── index.html                 # Main homepage
├── assets/
│   ├── css/
│   │   └── style.css         # Custom styles and Royal Mail theme
│   ├── js/
│   │   └── main.js           # Interactive functionality
│   └── images/
│       ├── logo/             # Royal Mail logo and branding
│       ├── icons/            # Service and feature icons
│       ├── promos/           # Promotional banners and images
│       ├── services/         # Service category images
│       ├── help/             # Help section images
│       ├── sustainability/   # Environmental messaging images
│       └── footer/           # Footer assets
├── placeholder-generator.html # Tool for creating placeholder images
├── create_placeholders.html  # Visual placeholder generator
└── README.md                 # Project documentation
```

## 🎨 Design System

### Colors
- **Royal Mail Red**: `#E60012` - Primary brand color
- **Royal Mail Blue**: `#004B87` - Secondary brand color  
- **Royal Mail Yellow**: `#FFD100` - Accent color
- **Dark**: `#1a1a1a` - Text and footer
- **Gray**: `#6c757d` - Secondary text
- **Light Gray**: `#f8f9fa` - Background sections

### Typography
- **Primary Font**: Segoe UI, Tahoma, Geneva, Verdana, sans-serif
- **Headings**: Bold weights for hierarchy
- **Body Text**: Regular weight, 1.6 line height for readability

### Components
- **Navigation**: Bootstrap navbar with custom mega menu
- **Cards**: Elevated design with hover effects
- **Buttons**: Royal Mail red primary, outlined secondary
- **Forms**: Clean inputs with validation states
- **Icons**: Custom SVG icons with Royal Mail styling

## 🛠️ Technologies Used

- **HTML5**: Semantic markup and accessibility features
- **CSS3**: Custom properties, flexbox, grid, animations
- **Bootstrap 5**: Responsive framework and components
- **JavaScript (ES6+)**: Interactive functionality and form handling
- **Font Awesome**: Icon library for UI elements
- **SVG**: Scalable vector graphics for logos and icons

## 📱 Responsive Breakpoints

- **Mobile**: < 576px
- **Tablet**: 576px - 768px  
- **Desktop**: 768px - 992px
- **Large Desktop**: > 992px

## 🚀 Getting Started

1. **Clone or Download** the project files
2. **Open** `index.html` in a web browser
3. **For Development**: Use a local server (Live Server, XAMPP, etc.)
4. **Customize**: Modify colors, content, and images as needed

### Local Development

```bash
# If using Python
python -m http.server 8000

# If using Node.js
npx http-server

# If using PHP (XAMPP)
# Place files in htdocs folder and access via localhost
```

## 🖼️ Image Setup

The project includes placeholder images. To use real images:

1. Open `create_placeholders.html` in a browser
2. Right-click and save each colored placeholder as an image
3. Place images in the corresponding `assets/images/` folders
4. Or replace with actual Royal Mail images (ensure proper licensing)

### Required Images
- Logo: `assets/images/logo/rmg_logo.svg`
- Icons: `assets/images/icons/*.svg`
- Promos: `assets/images/promos/*.jpg`
- Services: `assets/images/services/*.png`
- Help: `assets/images/help/*.jpg`
- Sustainability: `assets/images/sustainability/*.jpg`
- Footer: `assets/images/footer/*.png`

## ⚡ Performance Features

- **Lazy Loading**: Images load as they enter viewport
- **Optimized CSS**: Minimal custom styles, leveraging Bootstrap
- **Efficient JavaScript**: Event delegation and performance monitoring
- **Compressed Assets**: Minified CSS and JS in production
- **Semantic HTML**: Proper document structure for SEO

## ♿ Accessibility Features

- **Keyboard Navigation**: Full keyboard support for all interactive elements
- **Screen Reader Support**: Proper ARIA labels and semantic markup
- **Color Contrast**: WCAG AA compliant color combinations
- **Focus Management**: Visible focus indicators and logical tab order
- **Alternative Text**: Descriptive alt text for all images

## 🔧 Customization

### Changing Colors
Edit the CSS custom properties in `assets/css/style.css`:

```css
:root {
    --royal-mail-red: #E60012;
    --royal-mail-blue: #004B87;
    --royal-mail-yellow: #FFD100;
}
```

### Adding New Sections
1. Add HTML structure following Bootstrap grid system
2. Apply appropriate CSS classes
3. Add any required JavaScript functionality
4. Test responsiveness across devices

### Modifying Navigation
Edit the navigation structure in `index.html` and update corresponding CSS in `style.css`.

## 📊 Browser Support

- **Chrome**: 90+
- **Firefox**: 88+
- **Safari**: 14+
- **Edge**: 90+
- **Mobile Browsers**: iOS Safari 14+, Chrome Mobile 90+

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test across browsers and devices
5. Submit a pull request

## 📄 License

This project is for educational purposes. Royal Mail branding and trademarks belong to Royal Mail Group Ltd.

## 🔗 Links

- [Royal Mail Official Website](https://www.royalmail.com/)
- [Bootstrap 5 Documentation](https://getbootstrap.com/docs/5.3/)
- [Font Awesome Icons](https://fontawesome.com/)

## 📞 Support

For questions or issues with this clone:
1. Check the browser console for JavaScript errors
2. Validate HTML and CSS
3. Test in different browsers
4. Review responsive design on various screen sizes

---

**Note**: This is a clone for educational purposes. All Royal Mail branding and content rights belong to Royal Mail Group Ltd.
