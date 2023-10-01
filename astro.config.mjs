import { defineConfig } from 'astro/config';
import starlight from '@astrojs/starlight';

// https://astro.build/config
export default defineConfig({
	site: 'https://some-drops-of-php.vercel.app/',
	integrations: [
		starlight({
			title: 'Some drops of PHP',
			customCss: [
				'./src/styles/custom.css'
			],
			editLink: {
				baseUrl: 'https://github.com/roberto-butti/some-drops-of-php/edit/main',
			},
			social: {
				github: 'https://github.com/roberto-butti/some-drops-of-php',
			},
			sidebar: [
				{
					label: '📔 Intro',
					autogenerate: { directory: '00-intro' },
					collapsed: false
				},
				{
					label: '🧑‍💻 System',
					autogenerate: { directory: '01-system' },
					collapsed: true
				},
				{
					label: '📚 Array',
					autogenerate: { directory: '02-array' },
					collapsed: true
				},
				{
					label: '[ 🧑‍💻 Sources ]',
					items: [
						// Each item here is one entry in the navigation menu.
						{ label: 'Markdown', link: 'https://github.com/roberto-butti/some-drops-of-php/tree/main/src/content/docs' },
						{ label: 'Examples', link: 'https://github.com/roberto-butti/some-drops-of-php/tree/main/examples' },
					],
					collapsed: true
				},
			],
		}),
	],
});
