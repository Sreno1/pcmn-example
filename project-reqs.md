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
- For the page templates, I created blocks for WordPress (by running npx @wordpress/create-block in /src/blocks, then
  npm run build in the theme directory) and added them to the pages using the Gutenburg editor. This way, if the client
  wanted to add more blocks on other pages, they could do so easily without further development assistance, allowing for
  standardized template designs to be applied and edited by non-coders.
	- Thus, I did not create a custom template for the main page.
