# Breadcrumbs for pages and folders

On an MT4+ powered site that has pages and folders, the following code delivers a completely effective breadcrumb navigation trail:

```
<a href="<mt:BlogURL/>">Home</a> &raquo;
<mt:ParentFolders>
    <a href="<MTBlogURL><mt:FolderPath/>"><mt:FolderLabel/></a> &raquo;
</mt:ParentFolders>
<strong><mt:PageTitle/></strong>
```
