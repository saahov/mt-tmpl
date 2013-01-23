# Styling the comments left by the author of a post differently

This is the code used on MovableType.org. It achieves two things:

 * it alternates the CSS class for odd and even comments 
 * it applies an additional class to comments left by the author of the post 

```
<div class="comment pkg<mt:If name="__odd__"> odd<mt:Else> even</mt:If><mt:IfCommenterIsEntryAuthor> comment-author</mt:IfCommenterIsEntryAuthor>"<mt:IfArchiveTypeEnabled archive_type="Individual"> id="comment-<mt:CommentID/>"</mt:IfArchiveTypeEnabled>>
    <div class="inner">
        <div class="comment-meta">
            <h4 class="commenter-name">
                <mt:CommentAuthorLink default_name="Anonymous" show_email="0"/>
                <mt:If tag="CommentAuthorIdentity"><mt:CommentAuthorIdentity/></mt:If>
            </h4>
            <p class="byline">
                <a href="#comment-<mt:CommentID/>" title="Permalink to this comment"><mt:CommentDate format="%x %X"/></a> | <mt:CommentReplyLink/>
            </p>
        </div>
        <div class="comment-body">
            <mt:CommentBody/>
        </div>
    </div>
</div>
```
