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