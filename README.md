# Lykins PCM Nurture Example Theme

## Created by Steven Lykins

---
This is an example theme created for Postcard Mania, based on
the ["Blank Slate"](https://wordpress.org/themes/blankslate/) barebones WordPress theme boilerplate.

## Notes

- Added theme support for the customizer - Logo
- Removed some theme templates, like the sidebar.php and comments.php, since they were not needed.
- Did not register global fonts within the customizer, since almost all fonts used in the design are "THICCCBOI". If
  multiple fonts were used, I would have registered them in the customizer as header or body fonts.
- In this project, I tried to use some more advanced features of CSS3, such as nesting, variables, partials and
  operators.
	- Also utilized SCSS for mixins, specifically with Bootstrap.
- For the page templates, I created some example custom blocks for WordPress (by running npx @wordpress/create-block in
  /src/blocks, then npm run build in the theme directory) and added them to the pages using the Gutenburg editor. This
  way, if the client wanted to add more blocks on other pages, they could do so easily without further development
  assistance, allowing for standardized template designs to be applied and edited by non-coders across multiple pages (
  for example, the other "Industries" pages).
- Custom blocks created: Email CTA Masthead, Image Card, Logo Marquee, Fullwidth CTA, Three Testimonials.
	- Thus, I did not create a custom template for the main page.
	- I did create a custom template for the index page, for an example of a full template using PHP and no block
	  editor (archive-features.php)
	- The custom block for the email CTA Masthead does include a customizable email input box and button for submission,
	  but in a real theme I would include a Block Setting for a GravityForm or ContactForm7 ID, so that an actual
	  working form could be loaded into the Block, instead.
	- The custom block for the fullwidth CTA includes customizable colors, as an example
	- In a full theme it might be better to include block settings instead of panel settings, but I made all of my
	  blocks using panel settings to keep the development time down
- Added the design's colors to the theme default palate (theme.json), and a colors.css file, so that they could be
  easily used in Gutenburg blocks and CSS.
- Also used theme.json to apply custom fonts, font sizing, font style, border and spacing settings to the block editor
