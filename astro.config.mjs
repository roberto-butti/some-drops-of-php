import { defineConfig } from 'astro/config';
import starlight from '@astrojs/starlight';

import tailwind from "@astrojs/tailwind";

// https://astro.build/config
export default defineConfig({
  site: "https://drops-of-php.hi-folks.dev/",
  integrations: [
    starlight({
      title: "Some drops of PHP",
      logo: {
        src: "./src/assets/some-drops-of-php-logo.png",
      },
      head: [
        {
          tag: "meta",
          attrs: {
            property: "og:image",
            content:
              "https://raw.githubusercontent.com/roberto-butti/some-drops-of-php/main/public/header.webp",
          },
        },
        {
          tag: "meta",
          attrs: {
            property: "twitter:image",
            content:
              "https://raw.githubusercontent.com/roberto-butti/some-drops-of-php/main/public/header.webp",
          },
        },
      ],
      customCss: ["./src/styles/tailwind.css", "./src/styles/custom.css"],
      editLink: {
        baseUrl: "https://github.com/roberto-butti/some-drops-of-php/edit/main",
      },
      social: {
        github: "https://github.com/roberto-butti/some-drops-of-php",
      },
      sidebar: [
        {
          label: "📔 (0) Intro",
          autogenerate: {
            directory: "00-intro",
          },
          collapsed: false,
        },
        {
          label: "🧑‍💻 (1) System",
          autogenerate: {
            directory: "01-system",
          },
          collapsed: true,
        },
        {
          label: "📚 (2) Array",
          autogenerate: {
            directory: "02-array",
          },
          collapsed: true,
        },
        {
          label: "🗄️ (3) Vars, Objects",
          autogenerate: {
            directory: "03-vars",
          },
          collapsed: true,
        },
        {
          label: "🚲 (4) Functions",
          autogenerate: {
            directory: "04-functions",
          },
          collapsed: true,
        },
        {
          label: "🧵 (5) Strings",
          autogenerate: {
            directory: "05-string",
          },
          collapsed: true,
        },
        {
          label: "📁 (6) Files",
          autogenerate: {
            directory: "06-file",
          },
          collapsed: true,
        },
        {
          label: "🔢 (7) Numbers",
          autogenerate: {
            directory: "07-numbers",
          },
          collapsed: true,
        },
        {
          label: "[ 🧑‍💻 Sources ]",
          items: [
            // Each item here is one entry in the navigation menu.
            {
              label: "Markdown",
              link: "https://github.com/roberto-butti/some-drops-of-php/tree/main/src/content/docs",
            },
            {
              label: "Examples",
              link: "https://github.com/roberto-butti/some-drops-of-php/tree/main/examples",
            },
          ],
          collapsed: true,
        },
      ],
    }),
    tailwind({
      // Disable the default base styles:
      applyBaseStyles: false,
    }),
  ],
});