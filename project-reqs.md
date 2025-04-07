# Project Requirements

Program a custom WP theme from scratch or using preferred skeleton template. Include the following:

- custom post type called "features" with a featured image and 2 custom meta boxes added to edit screen
- 2 pages:
	- main page based on provided XD file
	- index page for listing the cpt posts in a grid format, display the title, featured image and meta values for each
	  grid item.
- responsive, using bootstrap
- best practices used, and built as though this would be used for an entire site buildout, not just a demo of the things
  requested
- forms don't need to work

## Notes

- Added theme support for the customizer - Logo
- Removed some theme templates, like the sidebar.php and comments.php, since they were not needed.
- Did not register global fonts within the customizer, since almost all fonts used in the design are "THICCCBOI". If
  multiple fonts were used, I would have registered them in the customizer as header or body fonts.
- In this project, I tried to use some more advanced features of CSS3, such as nesting, variables, partials and
  operators.
	- Also utilized SCSS for mixins, specifically with Bootstrap.
- For the page templates, I created some example custom blocks for WordPress (by running npx @wordpress/create-block in
  /src/blocks, then
  npm run build in the theme directory) and added them to the pages using the Gutenburg editor. This way, if the client
  wanted to add more blocks on other pages, they could do so easily without further development assistance, allowing for
  standardized template designs to be applied and edited by non-coders across multiple pages (for example, the other "
  Industries" pages).
	- Thus, I did not create a custom template for the main page.
	- I did create a custom template for the index page, for an example of a full template using PHP and no block
	  editor.
	- The custom block for the email CTA Masthead does include a customizable email input box and button for submission,
	  but in a real theme I would include a Block Setting for a GravityForm or ContactForm7 ID, so that an actual
	  working form could be loaded into the Block, instead.
- Added the design's colors to the theme default palate (theme.json), and a colors.css file, so that they could be
  easily used in
  Gutenburg blocks and CSS.
