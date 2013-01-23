Solution from François Nonnenmacher (http://padawan.info/).

Place the following code in a global template, or a template module on your blog (let's say the template is named "Authenticate"): `authenticate.php`

Then simply include this template as the first line on any page you want to protect, like so:

`<mt:Include module="Authenticate"/>`

This implies, of course, that your pages are served and parsed as PHP.
Note that you can play with all the various authentication levels of MT. In the example above, I used `is_authenticated` which is true for any authenticated user regardless of their permissions, but you have more permission levels such as `is_author`, `is_anonymous`, `is_trusted`, `is_banned`, `can_comment` and `can_post`. Just change the last if clause in the script to the criteria that suits your needs.
