# Capsule

A lightweight, customizable starter block theme for WooCommerce stores that prioritizes performance, accessibility, and modern development practices.

## Quick Start

**Setup new project:**

```bash
npm run setup
```

**Development:**

```bash
npm run start    # Watch Sass + wp-scripts dev server in parallel
npm run build    # Build CSS (Sass + PostCSS/Autoprefixer) and JS bundles
```

## Available Commands

### Development

```bash
npm run start          # Watch mode with live reloading
npm run build          # Production build
npm run setup          # Install dependencies
```

### Styles

```bash
npm run sass:build     # Alias to build:css
npm run build:css      # Compile Sass to CSS, then run PostCSS (autoprefixer)
npm run sass:watch     # Watch Sass files
```

### Linting & Formatting

```bash
# Linting
npm run lint           # Lint all files (CSS, JS, PHP)
npm run lint:fix       # Auto-fix linting issues
npm run lint:sass      # Lint SCSS/CSS only
npm run lint:js        # Lint JavaScript only (with JSX support)
npm run lint:php       # Lint PHP only

# Formatting
npm run format         # Format all files with Prettier
npm run format:check   # Check formatting without fixing
```

### Release

```bash
npm run translate      # Generate translation file (.pot) via WP-CLI i18n
npm run zip            # Create theme archive
npm run release        # Full release build (build + translate + zip)
```

## Development Tools

- **SCSS** - Modern Sass compilation
- **PostCSS** - Autoprefixer for cross-browser CSS
- **Code Standards** - PHPCS with WordPress/WooCommerce standards
- **Block Formatting** - Prettier integration for templates
- **VS Code Integration** - Automated linting and formatting

### VS Code Setup

Install recommended extensions when prompted or via `Cmd+Shift+P` → "Extensions: Show Recommended Extensions":

- **Prettier** - Code formatting
- **Stylelint** - CSS/SCSS linting
- **ESLint** - JavaScript linting
- **SCSS IntelliSense** - SASS support

### Code Formatting

Format current file: `Cmd+Shift+B` (macOS) or `Ctrl+Shift+B` (Windows/Linux)

## Usage

1. Clone this repository
2. Run `npm run setup`
3. Start development with `npm run start`
4. Build for production with `npm run release`

## Configuration Files

- `.vscode/settings.json` - VS Code workspace settings
- `.vscode/tasks.json` - Custom build tasks
- `.vscode/keybindings.json` - Custom keyboard shortcuts
- `.vscode/extensions.json` - Recommended extensions
- `.prettierrc.json` - Prettier formatting rules
- `.editorconfig` - Cross-editor configuration
- `stylelint.config.cjs` - CSS/SCSS linting rules
- `eslint.config.js` - ESLint (flat) config
- `phpcs.xml.dist` - PHP coding standards

## License

GPL v3 or later
