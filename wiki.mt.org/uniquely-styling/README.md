# Uniquely styling blogs, categories, or other sections of your site

```
<mt:Multiblog include_blogs="1,2,3">
    <mt:Entries lastn="3">
        <div class="blog-<mt:BlogID/>">
            <mt:EntryTitle/>
        </div>
    </mt:Entries>
</mt:MultiBlog>
```

Notice that a different class will be assigned to each blog based on the blog ID. Then, in your stylesheet, you'd define the CSS. For example:

```
.blog-1 { background: white; }
.blog-2 { background: green; }
.blog-3 { background: orange; }
```

This technique can be used elsewhere, too. Examples:

```
<div class="body<mt:If tag="EntryBody"> extended</mt:If>">
    Content
</div>
```

```
<div class="<mt:CategoryLabel dirify="1">">
    Content
</div>
```
