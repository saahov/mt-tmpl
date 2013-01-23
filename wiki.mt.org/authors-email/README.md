# Email List Of All Authors On A System

This little snip of code will dump out a list of all the users and their email addresses on your install in a comma-delimited format that you can easily import into your email client. It's particularly useful on larger installs:

```
<mt:Authors include_blogs="all">
    <mt:If tag="AuthorEmail">
        <mt:If tag="AuthorDisplayName">"<mt:AuthorDisplayName />" </mt:If>
        <mt:AuthorEmail/>
    </mt:If>
</mt:Authors>
``

And the Authors tag allows for all sorts of cool filtering attributes so you can get at any group of authors in the system, ordered however you like:

 * display_name: Specifies a particular author to select. 
 * lastn: Limits the selection of authors to the specified number. 
 * sort_by: Supported values: display_name, name, created_on. 
 * sort_order: Supported values: ascend, descend. 
 * roles: comma separated list of values. eg "Author, Commenter" 
 * need_entry: 1 | 0 (default is 1) 
 * status: Supported values: enabled, disabled. Default is enabled.
