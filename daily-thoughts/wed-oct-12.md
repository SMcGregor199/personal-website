# Some Thoughts for October 12th 

## Goal: To get 1% better every day
- `.json()` is a method for taking JSON data and parsing it to produce a javaScript object. That's why after you use `.json()` on a fetch request you can then treat the resulting data as a javaScript object, including the using the `.` notation to retirve key values pairs inside the object. 
- `cURL` is a utility for fetching api data
- to create `categories` in WordPress, you need to go to the `POSTS` and click categories. To add categories to a custom post type, you need to go where you create that post type in `CPT UI` and under `taxonomies` add categories and tags if you'd like
- you can enable users to switch between the classic and block editor by enabling the classic editor plugin and inside `settings -> writing` you can allow users to switch between the two
- `fetch` allows a second parameter, in which you can specify how you want the data retrieved. 

# Some Thoughts for October 13th 

- In order to `.gitignore` a file that was previously added to the repository you need to remove it from the cache using the command line `git rm --cached <FILENAME>` 
- in the tailwind config file, when you see two values within the font-size key, the second values stands for line-height
- pages in wordpress are for static content while content related to post types will be dynamically generated. 

# Some Thoughts for October 17th
-  `get_queried_object()` allows you to get the specific taxonomy term you're on in a wordpress project.
- in wordpress, if and while states optionally can be written with the `:` instead of codeblocks `{}` which then corresponds with `endeach` `endwhile` and `endif`  
# Some Thoughts for October 18th
- you can add a sign up link in wordpress by creating a custom link in the menu under appearences 
- you can use the `current_user_can()` function to determine if the logged in user has a certain capability (i.e. editor, administrator, etc.)
- you can use the `wp_get_current_user()` function to get whoever the current user is and check it against an array of allowed users using the `array_intersection` function. 
# Some Thoughts for October 20th
- custom HTML is its own block in the WP block editor. You can also switch the block editor to a code editor via the three dots in the upper right hand corner
- you use the `editor-style-block-custom.css` to determine the style of your block editor, and you use a special function to enque it into your project.
# Some Thoughts for October 21th
- `body * { }` selects every element in the css
- In javaScript you can use `document.querySelector()` to grab anything you want from the dom. 
- You can alternatively use `.getElementById()` to grab any element with an id
- You can alternatively grab all of a certain element by using the `.querySelectorAll('');` and from here you can loop over it.
	- with this object you can `.addEventListener()`
	- You can add to it with  `.innerHTML`
	- You can give it a class with `.classList.add('MyClass');`
- You can loop over arrays with the `forEach(function(x,y,z){ })` or if you're only using the element you can loop through with the `forEach(element =>{ //what to do with element })`
- `cursor` is a css property that can be used to select the style of cursor that appears on the element on hover
- components control the elements inside themselves. pages control how the components are positioned relative to eachother. 
- in javaScript, you can use the `offsetWidth` property with console.log to display the size of an image. 
# Some Thoughts for October 24th
- A good reason to use teh `slot` component in Svelte is as an interator. So you have your resource card, but if you would like to iterate over it, then you would create another component called resource wrapper that utilizes the `slot` component. 
- A single `<slot />` is able to take multiple components
- In wordpress, you can create custom blocks using ACF. You do this by creating a block.json file that contains all the information relevant to the block. In the same blocks/block-name folder, you create what is essentially the module that you'll be calling in `the_content()` function. 
- you also need to register the block using 
`
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/[block-title]' );
}`
- On the admin side, when creating a custom field, in the location, you need to state that these fields are block, and attach them to the specific block title
- `wp_enqueue_style` takes a custom file name and the location of the stylsheet. You can use `get_stylesheet_uri()` if it's in the root or `get_theme_file_uri()` if it's somewhere else. 
- Following this you can use the `add_action()` to add your custom function to to a particular place in the system. To add a stylesheet you would use `wp_enqueue_scripts` or to add it to the editor you would use `enqueue_block_editor_assets` 
- `the_author()` will only appear in the middle of a wp_loop
- you would use `echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );` to get the author's post link. the `esc_url` is a way to add extra security to the url
-in Svelte you can use `import { onMount } from 'svelte';` if you want to use javascript in the browser. Once you import it, you can use 
`  import { onMount } from 'svelte';
  onMount(() => {
    code goes here;
    // ...
  });`
# Some Thoughts for November 8th
- You can use Global Settings in WordPress to interact with elements within certain sections of the website. 
- Some WordPress Plugins that are useful for building websites at scale include 
    Disable Author Archives
    Perfmatters 
    Simple History
    Redirection 
    User Switching 
    The SEO Framework 






























