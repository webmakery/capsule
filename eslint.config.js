import js from '@eslint/js';
import globals from 'globals';
import react from 'eslint-plugin-react';
import reactHooks from 'eslint-plugin-react-hooks';
import prettier from 'eslint-plugin-prettier';

export default [
  js.configs.recommended,
  {
    files: ['**/*.{js,jsx}'],
    plugins: {
      react,
      'react-hooks': reactHooks,
      prettier,
    },
    languageOptions: {
      ecmaVersion: 2022,
      sourceType: 'module',
      parserOptions: {
        ecmaFeatures: {
          jsx: true,
        },
      },
      globals: {
        ...globals.browser,
        ...globals.node,
        wp: 'readonly',
        jQuery: 'readonly',
        $: 'readonly',
        ajaxurl: 'readonly',
        wc_add_to_cart_params: 'readonly',
        woocommerce_params: 'readonly',
        Swiper: 'readonly',
      },
    },
    settings: {
      react: {
        version: 'detect',
      },
    },
    rules: {
      indent: 'off',
      'prettier/prettier': 'error',
      'linebreak-style': ['error', 'unix'],
      quotes: ['error', 'single'],
      semi: ['error', 'always'],
      'no-console': 'warn',
      'no-unused-vars': ['error', { argsIgnorePattern: '^_' }],
      'no-undef': 'error',
      'react/jsx-uses-react': 'error',
      'react/jsx-uses-vars': 'error',
      'react-hooks/rules-of-hooks': 'error',
      'react-hooks/exhaustive-deps': 'warn',
    },
  },
  {
    files: ['eslint.config.js'],
    rules: {
      indent: ['error', 2],
    },
  },
  {
    ignores: [
      'dev-utils/**',
      'build/**',
      'vendor/**',
      'node_modules/**',
      'assets/js/vendor/**',
      'gulpfile.js',
      '*.min.js',
    ],
  },
];
